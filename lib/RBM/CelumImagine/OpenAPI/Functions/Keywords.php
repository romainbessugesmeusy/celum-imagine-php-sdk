<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/12/2013
 * Time: 18:32
 */

namespace RBM\CelumImagine\OpenAPI\Functions;

use RBM\CelumImagine\OpenAPI;

class Keywords
{
    /**
     * @param int $id ID of the requested document information field
     * @param bool $includeAdditionalLang Indicates, if Keyword field should be returned with the additional languages.
     * @param bool $includeUserPermissions Indicates, if permissions of the requesting user are returned.
     * @param bool $includeAllPermissions Indicates, if all permissions are returned
     * @return string
     */
    public static function getKeyword(
        $id,
        $includeAdditionalLang = null,
        $includeUserPermissions = null,
        $includeAllPermissions = null)
    {

        return OpenAPI\OpenAPI::request('keywords', 'getKeyword')
            ->setParam('id', $id)
            ->setParam('includeAdditionalLang', $includeAdditionalLang)
            ->setParam('includeUserPermissions', $includeUserPermissions)
            ->setParam('includeAllPermissions', $includeAllPermissions)
            ->call();
    }

    /**
     * @param int $id ID of the parent Container, which children should be returned. Without this parameter the root Containers will be returned.
     * @param bool $includeAdditionalLang Indicates, if Keyword names should be returned in the additional languages.
     * @param int $clientId Client for which the Keywords should be retrieved. Only for administrators of the default client.
     * @param bool $includeUserPermissions Indicates, if permissions of the requesting user are returned.
     * @param bool $includeAllPermissions Indicates, if all permissions are returned.
     * @param int $expandedId This is an alternative to the ID parameter. In contrast to the ID parameter the "expandedId" parameter returns a tree of Containers, expanded to the Container specified by "expandedId".
     *
     * @return \RBM\CelumImagine\OpenAPI\Response|string
     */
    public static function getKeywords(
        $id = null,
        $includeAdditionalLang = null,
        $clientId = null,
        $includeUserPermissions = null,
        $includeAllPermissions = null,
        $expandedId = null
    )
    {

        return OpenAPI\OpenAPI::request('keywords', 'getKeywords')
            ->setParam('id', $id)
            ->setParam('includeAdditionalLang', $includeAdditionalLang)
            ->setParam('clientId', $clientId)
            ->setParam('includeUserPermissions', $includeUserPermissions)
            ->setParam('includeAllPermissions', $includeAllPermissions)
            ->setParam('expandedId', $expandedId)
            ->call();
    }
} 