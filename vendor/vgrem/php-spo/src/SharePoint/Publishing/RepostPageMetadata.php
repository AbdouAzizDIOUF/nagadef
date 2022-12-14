<?php

/**
 * Generated 2019-11-17T18:31:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;


class RepostPageMetadata extends ClientObject
{
    /**
     * @return string
     */
    public function getOriginalSourceItemId()
    {
        if (!$this->isPropertyAvailable("OriginalSourceItemId")) {
            return null;
        }
        return $this->getProperty("OriginalSourceItemId");
    }
    /**
     * @var string
     */
    public function setOriginalSourceItemId($value)
    {
        $this->setProperty("OriginalSourceItemId", $value, true);
    }
    /**
     * @return string
     */
    public function getOriginalSourceListId()
    {
        if (!$this->isPropertyAvailable("OriginalSourceListId")) {
            return null;
        }
        return $this->getProperty("OriginalSourceListId");
    }
    /**
     * @var string
     */
    public function setOriginalSourceListId($value)
    {
        $this->setProperty("OriginalSourceListId", $value, true);
    }
    /**
     * @return string
     */
    public function getOriginalSourceSiteId()
    {
        if (!$this->isPropertyAvailable("OriginalSourceSiteId")) {
            return null;
        }
        return $this->getProperty("OriginalSourceSiteId");
    }
    /**
     * @var string
     */
    public function setOriginalSourceSiteId($value)
    {
        $this->setProperty("OriginalSourceSiteId", $value, true);
    }
    /**
     * @return string
     */
    public function getOriginalSourceUrl()
    {
        if (!$this->isPropertyAvailable("OriginalSourceUrl")) {
            return null;
        }
        return $this->getProperty("OriginalSourceUrl");
    }
    /**
     * @var string
     */
    public function setOriginalSourceUrl($value)
    {
        $this->setProperty("OriginalSourceUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getOriginalSourceWebId()
    {
        if (!$this->isPropertyAvailable("OriginalSourceWebId")) {
            return null;
        }
        return $this->getProperty("OriginalSourceWebId");
    }
    /**
     * @var string
     */
    public function setOriginalSourceWebId($value)
    {
        $this->setProperty("OriginalSourceWebId", $value, true);
    }
}