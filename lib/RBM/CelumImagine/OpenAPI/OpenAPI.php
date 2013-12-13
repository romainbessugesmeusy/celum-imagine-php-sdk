<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/12/2013
 * Time: 18:34
 */

namespace RBM\CelumImagine\OpenAPI;


class OpenAPI
{

    public static $url;

    public static $username;

    public static $password;

    public static function request($function, $command)
    {
        if(!isset(self::$url) || !isset(self::$username) || !isset(self::$password)){
            throw new Exception('You MUST define url, username and password class variables');
        }

        $request = new Request();
        $request->url = self::$url;
        $request->username = self::$username;
        $request->password = self::$password;
        $request->function = $function;
        $request->command = $command;
        return $request;
    }
} 