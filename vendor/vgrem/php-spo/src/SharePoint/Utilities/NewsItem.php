<?php

/**
 * Generated 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Utilities;

use Office365\Runtime\ClientValue;
/**
 * Represents 
 * an item in the News List.
 */
class NewsItem extends ClientValue
{
    /**
     * The url of 
     * the picture to use for this News Item if the primary picture breaks.
     * @var string
     */
    public $backupPictureUrl;
    /**
     * The 
     * caption for the News Item.
     * @var string
     */
    public $caption;
    /**
     * The id of 
     * the list item storing this news post.
     * @var integer
     */
    public $itemId;
    /**
     * Alt text 
     * to use on the image of the picture for the News Item.
     * @var string
     */
    public $pictureAltText;
    /**
     * The url of 
     * the picture for the News Item.
     * @var string
     */
    public $pictureUrl;
    /**
     * A JSON 
     * blob of properties for the News Item.
     * @var string
     */
    public $properties;
}