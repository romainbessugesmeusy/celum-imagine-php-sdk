<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/12/2013
 * Time: 20:07
 */

namespace RBM\CelumImagine\OpenAPI\Functions\Search;


class Parameters
{
    /**
     * @var string Text that should be found. Replaces drf.allSearchString in an extended search.
     */
    public $text;


    /**
     * @var int Returns documents in an ordered manner.
     */
    public $drf_orderBy;


    /**
     * @var number ASCENDING = 0 (api default) DESCENDING = 1 (gui default)
     */
    public $drf_orderSequence;


    /**
     * @var number Index of first document to return. This can be used for retrieving just parts of the list
     * (generally used together with drf.maxResults). Index starts with 0. Does not affect folders.
     */
    public $drf_firstResult;


    /**
     * @var number Number of documents to return (generally used together with drf.firstResult).
     * Does not affect folders. Please consider that the number of results can be limited
     * by a server side configuration (‘searchSettings.maxResults’).
     */
    public $drf_maxResults;


    /**
     * @var string Specifies a property or list of properties that should be returned e.g. “folder”.
     * Not all properties of documents are available for links.
     */
    public $includeProperties;


    /**
     * @var bool Indicates, if permissions of the requesting user are returned
     */
    public $includeUserPermissions;


    /**
     * @var bool Indicates, if all permissions are returned
     */
    public $includeAllPermissions;


    /**
     * @var bool Indicates, if the associated document properties are returned in links.
     */
    public $includeDocumentInLinks;


    /**
     * @var bool Returns associated keywords.
     */
    public $includeKeywords;


    /**
     * @var bool Indicates, if only the number of search results should be returned.
     */
    public $returnCount;


    /**
     * @var int Options for the default client administrator to search in other clients.
     */
    public $clientId;


    /**
     * @var string The search result should contain all words
     */
    public $drf_allSearchString;


    /**
     * @var string The search result should contain any words.
     */
    public $drf_anySearchString;


    /**
     * @var string The search result should contain the exact words.
     */
    public $drf_exactSearchString;


    /**
     * @var string The search result should not contain these words
     */
    public $drf_notSearchString;


    /**
     * @var bool Indicates, if documents are returned. Default: true
     */
    public $drf_showDocuments;


    /**
     * @var bool Indicates, if images are returned. Default: true
     */
    public $drf_showImages;


    /**
     * @var bool Indicates, if videos are returned. Default: true
     */
    public $drf_showVideos;


    /**
     * @var bool Indicates, if audios are returned. Default: true
     */
    public $drf_showAudios;


    /**
     * @var bool Indicates, if unknown objects are returned. Default: true.
     */
    public $drf_showOtherObjects;


    /**
     * @var bool Indicates, if text objects are returned. Default: true
     */
    public $drf_showTextObjects;


    /**
     * @var bool Indicates, if container objects are returned. Default: true
     */
    public $drf_showContainerObjects;


    /**
     * @var bool Indicates, if folders are returned. Default: false.
     */
    public $drf_showFolders;


    /**
     * @var bool Indicates, if links are returned. Default: false.
     */
    public $drf_showLinks;


    /**
     * @var string[] Indicates which type of object should be returned.
     * The type is the class name of an image format which can be retrieved by the systeminfo api.
     */
    public $drf_fileExtensions;


    /**
     * @var int[] Restrict the search to a single folder id or a list of folder ids.
     * Not existing folders will be ignored without error.
     */
    public $folderIds;


    /**
     * @var int[] Exclude a single folder id or a list of folder ids.
     * Not existing folders will be ignored without error.
     */
    public $excludedFolderIds;


    /**
     * @var int Search in a specific folder. Deprecated use folderIds parameter instead.
     */
    public $drf_folderId;


    /**
     * @var bool Indicates, if the folders from parameter folderIds or drf.folderId should be searched recursively.
     */
    public $drf_pathRecursive;


    /**
     * @var int Maximum height of an image.
     */
    public $drf_maxHeight;


    /**
     * @var int Minimum height of an image.
     */
    public $drf_minHeight;


    /**
     * @var int Maximum width of an image.
     */
    public $drf_maxWidth;


    /**
     * @var int Minimum width of an image.
     */
    public $drf_minWidth;


    /**
     * @var \DateTime Document uploaded after a specific date
     */
    public $drf_uploadedAfter;


    /**
     * @var \DateTime Document uploaded before a specific date.
     */
    public $drf_uploadedBefore;


    /**
     * @var \DateTime Document modified after a specific date.
     */
    public $drf_modifiedAfter;


    /**
     * @var \DateTime Document modified before a specific date.
     */
    public $drf_modifiedBefore;


    /**
     * @var int Minimum filesize in bytes of an Asset.
     */
    public $drf_minFileSizeBytes;


    /**
     * @var int Maximum filesize in bytes of an Asset.
     */
    public $drf_maxFileSizeBytes;


    /**
     * @var int Checked out status. Can be one of the following values.
     * 0 = Hide checked out objects
     * 1 = Show checked out objects (default)
     * 2 = Show checked out objects only.
     */
    public $drf_checkedOutStatus;


    /**
     * @var int Validity status. Can be one of the following values.
     * 0 = Hide invalid objects
     * 1 = Show invalid objects (default)
     * 2 = Show invalid objects only.
     */
    public $drf_activeStatus;


    /**
     * @var int ID of the Asset.
     */
    public $drf_objectId;


    /**
     * @var string Name of the Asset.
     */
    public $drf_objectName;


    /**
     * @var string The color represented as hex value.
     */
    public $drf_color;


    /**
     * @var int The tolerance of the color search. This can be one of 0.05, 0.20 (default) and 0.35.
     * Do not use other values here, otherwise the results might be unexpected.
     */
    public $drf_colorDelta;


    /**
     * @var string[] IDs of the Keywords that the search result has to contain.
     */
    public $keywords;


    /**
     * @var int Determines, if the search result has to contain :
     * all (KEYWORD_ALL = 0)
     * at least one (KEYWORD_ANY = 1)
     * exactly all (KEYWORD_EXACT = 2)
     * specified keywords.
     * Default is all (KEYWORD_ALL = 0).
     * Requires keywords parameter.
     */
    public $drf_keywordMode;


    /**
     * @var bool Checks, if all Keywords from parameter Keywords exist. Default value = true
     */
    public $checkKeywords;


    /**
     * @var string[] IDs of the keywords that the search result has to contain.
     */
    public $keywordsPathSearch;


    /**
     * @var bool Indicates, if the keywords provided in the keywords parameter are search recursively.
     * Meaning that Assets are found when Assets are assigned to a sub keyword of the provided keyword.
     * For example: There is a keyword X and a keyword Y that is a child of X.
     * If recursive is true Assets are also returned that are assigned to Y.
     * A value of false makes the search behave like the non path search described above.
     * Requires the keywords parameter.
     */
    public $drf_keywordModeRecursive;


    /**
     * @var string XML string which defines the Information Field search criteria.
     * Only text, number and date Information Fields are supported.
     * There are two separate modes for searching in Information Fields:
     * 1. The exact search mode, which searches for one term.
     * This does not imply that Information Fields are searched by exact phrase matching!
     * Exact matching for text Information Fields can be achieved by putting the search term into double quotes.
     * For example a search string of "test100" will match "test100" and "test1000" but a search string of “test100”
     * will only match "test100". In case of a Drop-Down Field search with multiple drop-down values,
     * the drop-down values are connected via a logical OR operator. 2. The range search mode,
     * which allows to search for terms specified by “from” and “to”. Specify either “from” or “to”.
     */
    public $informationFieldSearch;


}
