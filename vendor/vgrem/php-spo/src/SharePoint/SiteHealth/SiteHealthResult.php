<?php

/**
 * Generated 2019-10-12T19:41:09+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\SiteHealth;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * the result of running a site collection 
 * health rule.<219>
 */
class SiteHealthResult extends ClientValue
{
    /**
     * Specifies 
     * a summary of the results of running a site collection 
     * health rule.
     * @var string
     */
    public $MessageAsText;
    /**
     * Specifies 
     * a hyperlink 
     * to help information about the site collection 
     * health rule.
     * @var string
     */
    public $RuleHelpLink;
    /**
     * Specifies 
     * the unique identifier of the site collection 
     * health rule.
     * @var string
     */
    public $RuleId;
    /**
     * Specifies 
     * whether the site collection 
     * health rule is capable of attempting a repair of the issues found by the rule.
     * @var bool
     */
    public $RuleIsRepairable;
    /**
     * Specifies 
     * the name of the site collection 
     * health rule.
     * @var string
     */
    public $RuleName;
    /**
     * Specifies 
     * the success or failure mode returned by a site collection 
     * health rule.
     * @var integer
     */
    public $Status;
    /**
     * Specifies 
     * the date and time when the site collection 
     * health rule was run.
     * @var string
     */
    public $TimeStamp;
}