<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * The result 
 * of the synchronization operation.<260>
 */
class FlowSynchronizationResult extends ClientObject
{
    /**
     * @return string
     */
    public function getSynchronizationData()
    {
        if (!$this->isPropertyAvailable("SynchronizationData")) {
            return null;
        }
        return $this->getProperty("SynchronizationData");
    }
    /**
     * @var string
     */
    public function setSynchronizationData($value)
    {
        $this->setProperty("SynchronizationData", $value, true);
    }
    /**
     * @return integer
     */
    public function getSynchronizationStatus()
    {
        if (!$this->isPropertyAvailable("SynchronizationStatus")) {
            return null;
        }
        return $this->getProperty("SynchronizationStatus");
    }
    /**
     * @var integer
     */
    public function setSynchronizationStatus($value)
    {
        $this->setProperty("SynchronizationStatus", $value, true);
    }
}