<?php

/**
 * Generated 2019-10-12T19:01:57+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * A class 
 * containing site collection 
 * upgrade information.
 */
class UpgradeInfo extends ClientValue
{
    /**
     * Specifies 
     * the location of the file that contains upgrade errors.
     * @var string
     */
    public $ErrorFile;
    /**
     * Specifies 
     * the number of errors encountered during the site collection 
     * upgrade.
     * @var integer
     */
    public $Errors;
    /**
     * Specifies 
     * the DateTime of the latest upgrade progress update.
     * @var string
     */
    public $LastUpdated;
    /**
     * Specifies 
     * the location of the file that contains upgrade log.
     * @var string
     */
    public $LogFile;
    /**
     * Specifies 
     * the DateTime when the site collection 
     * upgrade was requested.
     * @var string
     */
    public $RequestDate;
    /**
     * Specifies 
     * how many times the site collection 
     * upgrade was attempted.
     * @var integer
     */
    public $RetryCount;
    /**
     * Specifies 
     * the DateTime when the site collection 
     * upgrade was started.
     * @var string
     */
    public $StartTime;
    /**
     * Specifies 
     * the current site collection 
     * upgrade status.
     * @var integer
     */
    public $Status;
    /**
     * Specifies 
     * the type of the site collection 
     * upgrade type. The type can be either a build-to-build upgrade, or a 
     * version-to-version upgrade.
     * @var integer
     */
    public $UpgradeType;
    /**
     * Specifies 
     * the number of warnings encountered during the site collection 
     * upgrade.
     * @var integer
     */
    public $Warnings;
}