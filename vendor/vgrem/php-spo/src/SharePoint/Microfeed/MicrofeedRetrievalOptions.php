<?php

/**
 * Generated 2019-10-12T19:39:07+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Microfeed;

use Office365\Runtime\ClientValue;

class MicrofeedRetrievalOptions extends ClientValue
{
    /**
     * @var integer
     */
    public $ContentFormattingOption;
    /**
     * @var bool
     */
    public $ContentOnly;
    /**
     * @var bool
     */
    public $DropAllSecurityTrimmablePosts;
    /**
     * @var bool
     */
    public $GatherUnreadMentionCountForUser;
    /**
     * @var integer
     */
    public $IncludedTypes;
    /**
     * @var string
     */
    public $NewerThan;
    /**
     * @var string
     */
    public $OlderThan;
    /**
     * @var array
     */
    public $PostDefinitionFilter;
    /**
     * @var integer
     */
    public $ResultSortOrder;
    /**
     * @var integer
     */
    public $ThreadCount;
}