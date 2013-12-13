<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/12/2013
 * Time: 18:45
 */

namespace RBM\CelumImagine\OpenAPI;


class Response {

    public $rawXmlString;
    public $content;

    public function __construct($xmlString)
    {
        $this->rawXmlString = $xmlString;
        $this->content = simplexml_load_string($xmlString);
    }
} 