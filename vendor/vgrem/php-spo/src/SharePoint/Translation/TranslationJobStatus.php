<?php

/**
 * Generated 2019-11-17T18:33:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Translation;

use Office365\Runtime\ClientObject;


class TranslationJobStatus extends ClientObject
{
    /**
     * @return integer
     */
    public function getCanceled()
    {
        if (!$this->isPropertyAvailable("Canceled")) {
            return null;
        }
        return $this->getProperty("Canceled");
    }
    /**
     * @var integer
     */
    public function setCanceled($value)
    {
        $this->setProperty("Canceled", $value, true);
    }
    /**
     * @return integer
     */
    public function getCount()
    {
        if (!$this->isPropertyAvailable("Count")) {
            return null;
        }
        return $this->getProperty("Count");
    }
    /**
     * @var integer
     */
    public function setCount($value)
    {
        $this->setProperty("Count", $value, true);
    }
    /**
     * @return integer
     */
    public function getFailed()
    {
        if (!$this->isPropertyAvailable("Failed")) {
            return null;
        }
        return $this->getProperty("Failed");
    }
    /**
     * @var integer
     */
    public function setFailed($value)
    {
        $this->setProperty("Failed", $value, true);
    }
    /**
     * @return integer
     */
    public function getInProgress()
    {
        if (!$this->isPropertyAvailable("InProgress")) {
            return null;
        }
        return $this->getProperty("InProgress");
    }
    /**
     * @var integer
     */
    public function setInProgress($value)
    {
        $this->setProperty("InProgress", $value, true);
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
    /**
     * @return integer
     */
    public function getNotStarted()
    {
        if (!$this->isPropertyAvailable("NotStarted")) {
            return null;
        }
        return $this->getProperty("NotStarted");
    }
    /**
     * @var integer
     */
    public function setNotStarted($value)
    {
        $this->setProperty("NotStarted", $value, true);
    }
    /**
     * @return integer
     */
    public function getSucceeded()
    {
        if (!$this->isPropertyAvailable("Succeeded")) {
            return null;
        }
        return $this->getProperty("Succeeded");
    }
    /**
     * @var integer
     */
    public function setSucceeded($value)
    {
        $this->setProperty("Succeeded", $value, true);
    }
}