<?php

/**
 * Generated 2019-10-12T19:39:07+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Microfeed;

use Office365\Runtime\ClientValue;

class MicrofeedThread extends ClientValue
{
    /**
     * @var bool
     */
    public $CanFollowUp;
    /**
     * @var bool
     */
    public $CanHaveAttachments;
    /**
     * @var bool
     */
    public $CanLike;
    /**
     * @var bool
     */
    public $CanReply;
    /**
     * @var array
     */
    public $DataLinks;
    /**
     * @var integer
     */
    public $DefinitionId;
    /**
     * @var string
     */
    public $DefinitionName;
    /**
     * @var string
     */
    public $Identifier;
    /**
     * @var bool
     */
    public $Locked;
    /**
     * @var array
     */
    public $MicrofeedEntities;
    /**
     * @var integer
     */
    public $OwnerIndex;
    
    public $RefReply;
    
    public $RefRoot;
    /**
     * @var bool
     */
    public $RenderPostAuthorImage;
    
    public $Replies;
    /**
     * @var integer
     */
    public $ReplyCount;
    
    public $RootPost;
    /**
     * @var bool
     */
    public $SmallImageSizePreferred;
    /**
     * @var integer
     */
    public $Status;
}