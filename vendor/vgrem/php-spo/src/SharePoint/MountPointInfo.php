<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Provides 
 * read-only properties that describe a mount point.
 */
class MountPointInfo extends ClientObject
{
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
     * @return string
     */
    public function getRedirectUrl()
    {
        if (!$this->isPropertyAvailable("RedirectUrl")) {
            return null;
        }
        return $this->getProperty("RedirectUrl");
    }
    /**
     * @var string
     */
    public function setRedirectUrl($value)
    {
        $this->setProperty("RedirectUrl", $value, true);
    }
}