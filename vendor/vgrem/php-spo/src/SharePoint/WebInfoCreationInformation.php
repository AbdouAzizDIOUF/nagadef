<?php

/**
 * Generated 2019-10-12T19:04:49+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * metadata about site (2) creation.<196>
 */
class WebInfoCreationInformation extends ClientValue
{
    /**
     * Specifies 
     * the description for the site (2).
     * @var string
     */
    public $Description;
    /**
     * Specifies 
     * the language 
     * code identifier (LCID) for the language that is used on the site (2).
     * @var integer
     */
    public $Language;
    /**
     * Specifies 
     * the title for the site (2).It MUST 
     * NOT be NULL. Its length MUST be equal to or less than 255. 
     * @var string
     */
    public $Title;
    /**
     * Specifies 
     * the URL 
     * of the site (2).It MUST 
     * NOT be NULL. 
     * @var string
     */
    public $Url;
    /**
     * Specifies 
     * whether the site (2) inherits 
     * permissions from its parent.
     * @var bool
     */
    public $UseUniquePermissions;
    /**
     * Specifies 
     * the name of the site template that 
     * is used to create the site (2).
     * @var string
     */
    public $WebTemplate;
}