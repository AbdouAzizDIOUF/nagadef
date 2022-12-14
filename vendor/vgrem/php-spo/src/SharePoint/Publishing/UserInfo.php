<?php

/**
 * Generated 2019-11-17T18:31:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;


class UserInfo extends ClientObject
{
    /**
     * @return string
     */
    public function getAccountName()
    {
        if (!$this->isPropertyAvailable("AccountName")) {
            return null;
        }
        return $this->getProperty("AccountName");
    }
    /**
     * @var string
     */
    public function setAccountName($value)
    {
        $this->setProperty("AccountName", $value, true);
    }
    /**
     * @return string
     */
    public function getAcronym()
    {
        if (!$this->isPropertyAvailable("Acronym")) {
            return null;
        }
        return $this->getProperty("Acronym");
    }
    /**
     * @var string
     */
    public function setAcronym($value)
    {
        $this->setProperty("Acronym", $value, true);
    }
    /**
     * @return string
     */
    public function getColor()
    {
        if (!$this->isPropertyAvailable("Color")) {
            return null;
        }
        return $this->getProperty("Color");
    }
    /**
     * @var string
     */
    public function setColor($value)
    {
        $this->setProperty("Color", $value, true);
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
}