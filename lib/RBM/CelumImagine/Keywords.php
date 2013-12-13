<?php

namespace RBM\CelumImagine;

class Keywords
{

    protected static $_tree = [];
    /**
     * @var array
     */
    protected static $_map = [];

    protected static function _buildTreeAndMap($originId)
    {
        $response = \RBM\CelumImagine\OpenAPI\Functions\Keywords::getKeywords($originId);
        foreach($response->content as $keyword){
            $id = intval($keyword->id);
            self::$_map[(string)$keyword->path] = $id;
            if(intval($keyword->nrOfChildren) > 0){
                self::_buildTreeAndMap($id);
            }
        }
    }

    public static function test()
    {
        self::_buildTreeAndMap(2);
        var_dump(self::$_tree);
        var_dump(self::$_map);
    }
} 