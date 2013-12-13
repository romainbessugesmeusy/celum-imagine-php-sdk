<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/12/2013
 * Time: 20:04
 */

namespace RBM\CelumImagine\OpenAPI\Functions;


use RBM\CelumImagine\OpenAPI\Functions\Search\Parameters;
use RBM\CelumImagine\OpenAPI\OpenAPI;

class Search
{

    /**
     * Perform a search equivalent to the celum IMAGINE 2013 user interface
     * @param Parameters $params
     *
     * @return \RBM\CelumImagine\OpenAPI\Response|string
     */
    public static function search(Parameters $params)
    {
        $request = OpenAPI::request('search', 'search');
        foreach($params as $name => $value){
            $request->setParam(str_replace('_', '.', $name), $value);
        }
        return $request->call();
    }
} 