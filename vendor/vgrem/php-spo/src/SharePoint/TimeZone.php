<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Specifies 
 * the time 
 * zone of a site (2).<223>
 */
class TimeZone extends ClientObject
{
    /**
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * @return integer
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * @var integer
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * @return TimeZoneInformation
     */
    public function getInformation()
    {
        if (!$this->isPropertyAvailable("Information")) {
            return null;
        }
        return $this->getProperty("Information");
    }
    /**
     * @var TimeZoneInformation
     */
    public function setInformation($value)
    {
        $this->setProperty("Information", $value, true);
    }
}