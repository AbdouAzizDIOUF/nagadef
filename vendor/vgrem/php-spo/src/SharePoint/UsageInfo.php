<?php

/**
 * Generated 2019-10-12T19:01:57+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;

class UsageInfo extends ClientValue
{
    /**
     * Specifies 
     * the cumulative bandwidth, in bytes, used by the site collection 
     * during an implementation-specific period.Its value 
     * MUST be equal to or greater than 0. 
     * @var integer
     */
    public $Bandwidth;
    /**
     * Specifies 
     * the total amount of disk space, in bytes, currently being used to store Web 
     * discussion comments in the site collection.Its value 
     * MUST be equal to or greater than 0. 
     * @var integer
     */
    public $DiscussionStorage;
    /**
     * Specifies 
     * the cumulative number of requests for pages in the site collection 
     * during an implementation-specific period.Its value 
     * MUST be equal to or greater than 0. 
     * @var integer
     */
    public $Hits;
    /**
     * Specifies 
     * the total amount of disk space, in bytes, currently being used to store Web 
     * discussion comments in the site collection.Its value 
     * MUST be equal to or greater than 0. 
     * @var integer
     */
    public $Storage;
    /**
     * Specifies 
     * the ratio of the amount of disk space currently being used by the site 
     * collection to the maximum disk space specified in the site 
     * collection quota.The server 
     * MUST return 0 if no maximum available storage is specified in the site 
     * collection quotaIts value MUST be equal to or greater than 0. Its value MUST 
     * be equal to or less than 1. 
     * @var double
     */
    public $StoragePercentageUsed;
    /**
     * Specifies 
     * the cumulative number of requests for pages in the site collection, 
     * with no HTTP referer, or a 
     * HTTP referer outside of the current site collection during an 
     * implementation-specific period. Its value MUST be equal to or greater than 0. 
     * @var integer
     */
    public $Visits;
}