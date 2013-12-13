<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/12/2013
 * Time: 18:21
 */

namespace RBM\CelumImagine\OpenAPI;

class Request
{

    public $username;
    public $password;
    public $basicAuthentication = false;
    public $useSSOLogin = false;
    public $url;
    public $function;
    public $command;
    public $parameters = [];

    /**
     * @return Response|string
     */
    public function call()
    {
        $params = array_merge($this->parameters, [
            "username" => $this->username,
            "password" => $this->password,
            "command"  => $this->command
        ]);

        array_walk($params, function (&$param) {
            if (is_bool($param)) {
                $param = ($param) ? 'true' : 'false';
            }

            if (is_array($param)) {
                $param = implode(",", $param);
            }
        });

        $query = http_build_query($params);

        $uri = "{$this->url}/api/{$this->function}.api?$query";

        $xmlString = file_get_contents($uri);

        if (strpos($xmlString, '<?xml version="1.0" encoding="UTF-8"?>') === 0) {
            $response = new Response($xmlString);
            return $response;
        }

        return $xmlString;
    }

    /**
     * @param array $params
     * @return $this
     */
    public function setParams(array $params)
    {
        foreach ($params as $key => $value) {
            $this->setParam($key, $value);
        }
        return $this;
    }

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    public function setParam($name, $value)
    {
        if (!is_null($value)) {
            $this->parameters[$name] = $value;
        }
        return $this;
    }

    /**
     * @param $name
     * @return $this
     */
    public function unsetParam($name)
    {
        if (isset($this->parameters[$name])) {
            unset($this->parameters[$name]);
        }
        return $this;
    }
} 