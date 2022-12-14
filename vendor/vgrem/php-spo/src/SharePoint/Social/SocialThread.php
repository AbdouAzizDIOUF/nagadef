<?php

/**
 * Generated 2019-10-12T19:41:09+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Social;

use Office365\Runtime\ClientValue;

class SocialThread extends ClientValue
{
    /**
     * @var array
     */
    public $Actors;
    /**
     * @var integer
     */
    public $Attributes;
    /**
     * @var string
     */
    public $Id;
    /**
     * @var integer
     */
    public $OwnerIndex;
    /**
     * @var string
     */
    public $Permalink;
    
    public $PostReference;
    /**
     * @var array
     */
    public $Replies;
    
    public $RootPost;
    /**
     * @var integer
     */
    public $Status;
    /**
     * @var integer
     */
    public $ThreadType;
    /**
     * @var integer
     */
    public $TotalReplyCount;
}