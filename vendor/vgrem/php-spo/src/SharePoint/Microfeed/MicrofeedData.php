<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Microfeed;

use Office365\Runtime\ClientObject;


class MicrofeedData extends ClientObject
{
    /**
     * @return string
     */
    public function getCreated()
    {
        if (!$this->isPropertyAvailable("Created")) {
            return null;
        }
        return $this->getProperty("Created");
    }
    /**
     * @var string
     */
    public function setCreated($value)
    {
        $this->setProperty("Created", $value, true);
    }
    /**
     * @return array
     */
    public function getData()
    {
        if (!$this->isPropertyAvailable("Data")) {
            return null;
        }
        return $this->getProperty("Data");
    }
    /**
     * @var array
     */
    public function setData($value)
    {
        $this->setProperty("Data", $value, true);
    }
    /**
     * @return integer
     */
    public function getDefinitionId()
    {
        if (!$this->isPropertyAvailable("DefinitionId")) {
            return null;
        }
        return $this->getProperty("DefinitionId");
    }
    /**
     * @var integer
     */
    public function setDefinitionId($value)
    {
        $this->setProperty("DefinitionId", $value, true);
    }
    /**
     * @return integer
     */
    public function getItemType()
    {
        if (!$this->isPropertyAvailable("ItemType")) {
            return null;
        }
        return $this->getProperty("ItemType");
    }
    /**
     * @var integer
     */
    public function setItemType($value)
    {
        $this->setProperty("ItemType", $value, true);
    }
    /**
     * @return string
     */
    public function getModified()
    {
        if (!$this->isPropertyAvailable("Modified")) {
            return null;
        }
        return $this->getProperty("Modified");
    }
    /**
     * @var string
     */
    public function setModified($value)
    {
        $this->setProperty("Modified", $value, true);
    }
    /**
     * @return string
     */
    public function getTargetIdentifier()
    {
        if (!$this->isPropertyAvailable("TargetIdentifier")) {
            return null;
        }
        return $this->getProperty("TargetIdentifier");
    }
    /**
     * @var string
     */
    public function setTargetIdentifier($value)
    {
        $this->setProperty("TargetIdentifier", $value, true);
    }
    /**
     * @return string
     */
    public function getVersion()
    {
        if (!$this->isPropertyAvailable("Version")) {
            return null;
        }
        return $this->getProperty("Version");
    }
    /**
     * @var string
     */
    public function setVersion($value)
    {
        $this->setProperty("Version", $value, true);
    }
}
