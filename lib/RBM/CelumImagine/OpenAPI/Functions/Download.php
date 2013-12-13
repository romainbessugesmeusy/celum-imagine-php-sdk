<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/12/2013
 * Time: 21:38
 */

namespace RBM\CelumImagine\OpenAPI\Functions;


use RBM\CelumImagine\OpenAPI\Functions\Download\Parameters;
use RBM\CelumImagine\OpenAPI\OpenAPI;

class Download
{

    public static function download(Parameters $params)
    {
        $request = OpenAPI::request('download', 'download');
        foreach($params as $name => $value){
            $request->setParam(str_replace('_', '.', $name), $value);
        }
        return $request->call();
    }
} 