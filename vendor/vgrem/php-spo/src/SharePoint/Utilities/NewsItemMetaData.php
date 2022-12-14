<?php

/**
 * Generated 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Utilities;

use Office365\Runtime\ClientValue;
/**
 * Contains 
 * metadata about the resource at a given url. The url might or might not be in 
 * SharePoint.
 */
class NewsItemMetaData extends ClientValue
{
    /**
     * File 
     * extension (indicating the type of file) if the resource is a file.
     * @var string
     */
    public $fileExtension;
    /**
     * Indicates 
     * the type of object the resource is.
     * @var integer
     */
    public $newsType;
    /**
     * The 
     * program identifier for the resource, if the resource is a file or a folder. 
     * Used to determine which program to use when the resource is opened.
     * @var string
     */
    public $progId;
    /**
     * The site 
     * ID of the SPSite the resource is in. If the resource is not a recognized type, 
     * or is not in a site, this will be the empty Guid.
     * @var string
     */
    public $siteId;
    /**
     * The title 
     * of the resource. If the resource does not have a title, or is not a recognized 
     * type this will be the empty string.
     * @var string
     */
    public $title;
    /**
     * The unique 
     * ID of the resource. If the resource does not have a unique ID or is not a 
     * recognized type, this will be the empty Guid.
     * @var string
     */
    public $uniqueId;
    /**
     * The URL of 
     * the resource.
     * @var string
     */
    public $url;
    /**
     * The web ID 
     * of the SPWeb the resource is in. If the resource is not a recognized type, or 
     * is not in a web, this will be the empty Guid.
     * @var string
     */
    public $webId;
}