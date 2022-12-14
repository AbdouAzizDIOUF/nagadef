<?php

/**
 * Generated 2019-11-17T18:31:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;


class PointPublishingSiteStatus extends ClientObject
{
    /**
     * @return string
     */
    public function getFriendlyUrl()
    {
        if (!$this->isPropertyAvailable("FriendlyUrl")) {
            return null;
        }
        return $this->getProperty("FriendlyUrl");
    }
    /**
     * @var string
     */
    public function setFriendlyUrl($value)
    {
        $this->setProperty("FriendlyUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteId()
    {
        if (!$this->isPropertyAvailable("SiteId")) {
            return null;
        }
        return $this->getProperty("SiteId");
    }
    /**
     * @var string
     */
    public function setSiteId($value)
    {
        $this->setProperty("SiteId", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteUrl()
    {
        if (!$this->isPropertyAvailable("SiteUrl")) {
            return null;
        }
        return $this->getProperty("SiteUrl");
    }
    /**
     * @var string
     */
    public function setSiteUrl($value)
    {
        $this->setProperty("SiteUrl", $value, true);
    }
    /**
     * @return integer
     */
    public function getStatus()
    {
        if (!$this->isPropertyAvailable("Status")) {
            return null;
        }
        return $this->getProperty("Status");
    }
    /**
     * @var integer
     */
    public function setStatus($value)
    {
        $this->setProperty("Status", $value, true);
    }
}