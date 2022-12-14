<?php

/**
 * Generated 2019-10-12T19:01:57+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * metadata about a time zone.<224>
 */
class TimeZoneInformation extends ClientValue
{
    /**
     * Specifies 
     * the number of minutes that the time zone differs 
     * from Coordinated 
     * Universal Time (UTC). A positive value indicates that the time zone 
     * is behind UTC.
     * @var integer
     */
    public $Bias;
    /**
     * Specifies 
     * the number of minutes added to the Bias (section 3.2.5.222.1.1.1) 
     * during Daylight Savings Time.
     * @var integer
     */
    public $DaylightBias;
    /**
     * Specifies 
     * the number of minutes added to the Bias (section 3.2.5.222.1.1.1) 
     * outside of Daylight Savings Time.
     * @var integer
     */
    public $StandardBias;
}