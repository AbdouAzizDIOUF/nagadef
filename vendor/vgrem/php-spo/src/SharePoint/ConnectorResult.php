<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Used to 
 * return data from Connector operations in a specific format
 */
class ConnectorResult extends ClientObject
{
    /**
     * @return string
     */
    public function getContextData()
    {
        if (!$this->isPropertyAvailable("ContextData")) {
            return null;
        }
        return $this->getProperty("ContextData");
    }
    /**
     * @var string
     */
    public function setContextData($value)
    {
        $this->setProperty("ContextData", $value, true);
    }
    /**
     * @return string
     */
    public function getValue()
    {
        if (!$this->isPropertyAvailable("Value")) {
            return null;
        }
        return $this->getProperty("Value");
    }
    /**
     * @var string
     */
    public function setValue($value)
    {
        $this->setProperty("Value", $value, true);
    }
}