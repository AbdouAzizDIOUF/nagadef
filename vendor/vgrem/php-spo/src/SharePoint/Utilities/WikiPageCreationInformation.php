<?php

/**
 * Generated 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Utilities;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * wiki page creation information.<212>
 */
class WikiPageCreationInformation extends ClientValue
{
    /**
     * The server-relative 
     * URL of the wiki page to be created.It MUST 
     * NOT be empty. It MUST be a URL of server-relative form. 
     * @var string
     */
    public $ServerRelativeUrl;
    /**
     * The HTML 
     * content of the wiki page.
     * @var string
     */
    public $WikiHtmlContent;
}