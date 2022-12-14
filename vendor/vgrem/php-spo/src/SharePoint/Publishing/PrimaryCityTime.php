<?php

/**
 * Generated 2019-11-17T18:31:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;


class PrimaryCityTime extends ClientObject
{
    /**
     * @return string
     */
    public function getLocation()
    {
        if (!$this->isPropertyAvailable("Location")) {
            return null;
        }
        return $this->getProperty("Location");
    }
    /**
     * @var string
     */
    public function setLocation($value)
    {
        $this->setProperty("Location", $value, true);
    }
    /**
     * @return string
     */
    public function getTime()
    {
        if (!$this->isPropertyAvailable("Time")) {
            return null;
        }
        return $this->getProperty("Time");
    }
    /**
     * @var string
     */
    public function setTime($value)
    {
        $this->setProperty("Time", $value, true);
    }
    /**
     * @return string
     */
    public function getUtcOffset()
    {
        if (!$this->isPropertyAvailable("UtcOffset")) {
            return null;
        }
        return $this->getProperty("UtcOffset");
    }
    /**
     * @var string
     */
    public function setUtcOffset($value)
    {
        $this->setProperty("UtcOffset", $value, true);
    }
}