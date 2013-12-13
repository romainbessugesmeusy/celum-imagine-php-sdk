<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/12/2013
 * Time: 18:32
 */

namespace RBM\CelumImagine\OpenAPI\Functions;

use RBM\CelumImagine\OpenAPI;

class Lookup
{
    const TYPE_FOLDER = 101;
    const TYPE_COLLECTION = 102;
    const TYPE_KEYWORD = 103;

    /**
     * @param string $searchString Search string to narrow lookup results by
     * @param int $type Type to lookup in (101: Folder, 102: Collection, 103: Keyword)
     * @param int $start Index of first result to return (for paging)
     * @param int $limit Max number of results to return
     * @param int $orderBy Criterion to orderby ORDERBY_NAME = 1;
     * @param int $orderSequence Ascending=0, Descending=1
     * @param string $locale Language to search container names in
     * @param int $catalogId For keywords the lookup can be restricted to the given catalog
     */
    public static function lookup(
        $searchString = null,
        $type = null,
        $start = null,
        $limit = null,
        $orderBy = null,
        $orderSequence = null,
        $locale = null,
        $catalogId = null
    )
    {
        return OpenAPI\OpenAPI::request('lookup', 'lookup')
            ->setParam('searchString', $searchString)
            ->setParam('type', $type)
            ->setParam('start', $start)
            ->setParam('limit', $limit)
            ->setParam('orderBy', $orderBy)
            ->setParam('orderSequence', $orderSequence)
            ->setParam('locale', $locale)
            ->setParam('catalogId', $catalogId)
            ->call();
    }
} 