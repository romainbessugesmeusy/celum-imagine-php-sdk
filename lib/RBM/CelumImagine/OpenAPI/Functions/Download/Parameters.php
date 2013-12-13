<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11/12/2013
 * Time: 21:39
 */

namespace RBM\CelumImagine\OpenAPI\Functions\Download;


class Parameters {


    /**
     * ID of the document that should be downloaded
     * @var int
     */
    public $documentId;

    /**
     * ID of the Download Format. Note that the Download Format defines several properties how a file is downloaded.
     * @var int
     */
    public $format;

    /**
     * Whether or not to perform the target size scaling, if the Download Format has target size scaling enabled. This is useful, if you want to use the specified Download Format, but use a different size, than specified in the Download Format target size settings.
     * @var bool
     */
    public $ignoreTargetSizeScaling;

    /**
     * File extension of the custom format. Only, if you provided a custom Download Format in parameter ‘format’.
     * @var string
     */
    public $customformat;

    /**
     * Determines which type of binary should be used, if there are multiple binaries for one Object. A download without a binaryType lets the format decide, if original or working Asset is returned. For a preview or thumbnail, download the binaryType must be set. Other types than original or working Asset are not processed by the conversion engine. It is not possible to perform image editing operations on a preview file. ‘orig’: original Asset. ‘work’: working Asset. Images / Documents: ‘thmb’: default thumbnail size. ‘prvw’: default preview size.
     * @var string
     */
    public $binaryType;

    /**
     * Determines a specific page of a document with several pages. Note that the index starts with 0, thus the first page of a document is at 0.
     * @var int
     */
    public $binaryIndex;

    /**
     * The revision of the Asset to download. Note that the edit permission on the document is required to download other revisions than the current revision.
     * @var int
     */
    public $revision;

    /**
     * A user-defined message that describes the intended usage of the downloaded Asset. Any non-null, non-empty value will create a "UsageReference" entry for the downloaded document on the server. Whether an Asset supports or requires the creation of "UsageReferences" can be specified on object-level in the edit view of an Asset or a Folder. According to this setting the API parameter is either optional (setting: SUPPORTED), required (setting: REQUIRED) or forbidden (setting: DISABLED). If a UsageReference is created a unique identifier (ID) for this "UsageReference" will be returned as HTTP header named ‘usageReferenceId’. If both "usageReferenceMessage" and "copyUsageReferenceMessageFrom" are defined, the API call will be considered invalid and return an exception.
     * @var string
     */
    public $usageReferenceMessage;

    /**
     * The unique identifier (ID) of an existing "UsageReference" Object. If defined, a new "UsageReference" will be created and the message text will be copied from the specified "UsageReference" Object. In all other respects; the behaviour is the same as when defining the "usageReferenceMessage" parameter. If both "usageReferenceMessage" and "copyUsageReferenceMessageFrom" are defined, the API call will be considered invalid and return an exception. In case the specified ID is not (or no longer) valid, an "UnknownUsageReferenceException" (215) is thrown.
     * @var string
     */
    public $copyUsageReferenceMessageFrom;

    /**
     * Parameter for cropped image size in pixels
     * @var float
     */
    public $width;

    /**
     * Parameter for cropped image size in pixels.
     * @var float
     */
    public $height;

    /**
     * Number Horizontal starting position in pixels of image cropping.
     * @var float
     */
    public $x;

    /**
     * Vertical starting position in pixels of image cropping.
     * @var float
     */
    public $y;

    /**
     * Scale factor between 0 and 1.
     * @var float
     */
    public $scale;

    /**
     * Width of the image after scaling. Works as alternative to ‘scale’. Requires ‘scaleToHeight’. Note, that these two parameters overwrite the target size settings of the "downloadformat" you specified with the format parameter.
     * @var float
     */
    public $scaleToWidth;

    /**
     * Height of the image after scaling. Requires ‘scaleToWidth’.
     * @var float
     */
    public $scaleToHeight;

    /**
     * Scales the image to a maximum width and height, considering the aspect ratio. Requires ‘scaleToMaxHeight’. Parameter can be -1 if just height should be limited by scaleToMaxHeight. Works also vice versa.
     * @var float
     */
    public $scaleToMaxWidth;

    /**
     * Scales the image to a maximum width and height, considering the aspect ratio. Requires ‘scaleToMaxHeight’. Parameter can be -1 if just height should be limited by scaleToMaxHeight. Works also vice versa.
     * @var float
     */
    public $scaleToMaxHeight;

    /**
     * Indicates, if the image is stretched up to the desired width and height.
     * @var bool
     */
    public $allowStretchUp;

    /**
     * ROTATION_NONE 0 ROTATION_LEFT 1 ROTATION_RIGHT 2 flip Number FLIP_NONE 0 FLIP_HORIZONTAL 1 FLIP_VERTICAL 2 FLIP_HORIZONTAL_VERTICAL 3
     * @var int
     */
    public $rotation;

    /**
     * Activates cmsMode for the cropping and scaling parameters. With this option enabled, the return parameters from the cms[connect module can be used with the open[api. See below for an example. (since 4.0.3)
     * @var bool
     */
    public $cmsMode;

    /**
     * 0 = BmpImageProperties: old windows bitmap 1 = Windows 3.x or newer Bitmap 2 = IBM OS/2 version 1.x bitmap 3 = IBM OS/2 version 2.x bitmap ; GifImageProperties GIF87a GIF89a ;
     * @var mixed
     */
    public $version;

    /**
     * PngImageProperties: between 0 and 9: 0 = minimum 9 = maximum
     * @var float
     */
    public $compression;

    /**
     * TgaImageProperties: Date in format "yyyy.mm.dd"
     * @var string
     */
    public $creationDate;

    /**
     * TgaImageProperties: Hex value, e.g. "FBCFBC"
     * @var string
     */
    public $backgroundColor;

    /**
     * TiffImageProperties: 1 = The 0th row represents the visual top of the image, and the 0th column representsthe visual left-hand side. 2 = The 0th row represents the visual top of the image, and the 0th column represents the visual right-hand side. 3= The 0th row represents the visual bottom of the image, and the 0th column represents the visual right-hand side. 4= The 0th row represents the visual bottom of the image, and the 0th column represents the visual left-hand side. 5 = The 0th row represents the visual left-hand side of the image, and the 0th column represents the visual top. 6 = The 0th row represents the visual right-hand side of the image, and the 0th column represents the visual top. 7 = The 0th row represents the visual right-hand side of the image, and the 0th column represents the visual bottom. 8 = The 0th row represents the visual left-hand side of the image, and the 0th column represents the visual bottom.
     * @var int
     */
    public $orientation;

    /**
     * Document name in the tif header. NOT the name of the downloaded document.
     * @var string
     */
    public $documentName;

    /**
     * between 0 and 100: 0=minimum 100= maximum
     * @var float
     */
    public $jpegQualitiy;

    /**
     * TiffImageProperties: Description in the tif header.
     * @var string
     */
    public $imageDescription;

} 