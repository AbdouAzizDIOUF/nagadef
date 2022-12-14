<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

/**
 * Microsoft.SharePoint.Client.VisualizationAppSynchronizationResult 
 * is not applicable.<283>
 */
class VisualizationAppSynchronizationResult extends ClientObject
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
    /**
     * @return ViewCollection
     */
    public function getAppMappedViews()
    {
        if (!$this->isPropertyAvailable("AppMappedViews")) {
            $this->setProperty("AppMappedViews", new ViewCollection($this->getContext(),
                new ResourcePath("AppMappedViews", $this->getResourcePath())));
        }
        return $this->getProperty("AppMappedViews");
    }
}