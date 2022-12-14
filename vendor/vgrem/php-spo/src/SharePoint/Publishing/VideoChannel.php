<?php

/**
 * Generated 2019-11-16T20:26:56+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
use Office365\Runtime\ServerTypeInfo;

class VideoChannel extends ClientObject
{
    public function getId()
    {
        return $this->getProperty("Id");
    }
    public function getTitle()
    {
        return $this->getProperty("Title");
    }
    public function getDescription()
    {
        return $this->getProperty("Description");
    }
    public function getServerRelativeUrl()
    {
        return $this->getProperty("ServerRelativeUrl");
    }
    public function getTileHtmlColor()
    {
        return $this->getProperty("TileHtmlColor");
    }
    /**
     * @return VideoCollection
     */
    public function GetAllVideos()
    {
        return new VideoCollection($this->getContext(), new ResourcePath("GetAllVideos", $this->getResourcePath()));
    }
    /**
     * @return SpotlightVideoCollection
     */
    public function getSpotlightVideos()
    {
        return new SpotlightVideoCollection($this->getContext(), new ResourcePath("SpotlightVideos", $this->getResourcePath()));
    }
    /**
     * @return VideoCollection
     */
    public function getVideos()
    {
        return new VideoCollection($this->getContext(), new ResourcePath("Videos", $this->getResourcePath()));
    }

    /**
     * @return ServerTypeInfo
     */
    public function getServerTypeInfo()
    {
        return new ServerTypeInfo("SP.Publishing", "VideoChannel");
    }
    /**
     * @return bool
     */
    public function getCanAdministrateByCurrent()
    {
        if (!$this->isPropertyAvailable("CanAdministrateByCurrent")) {
            return null;
        }
        return $this->getProperty("CanAdministrateByCurrent");
    }
    /**
     * @var bool
     */
    public function setCanAdministrateByCurrent($value)
    {
        $this->setProperty("CanAdministrateByCurrent", $value, true);
    }
    /**
     * @return bool
     */
    public function getCanEditByCurrent()
    {
        if (!$this->isPropertyAvailable("CanEditByCurrent")) {
            return null;
        }
        return $this->getProperty("CanEditByCurrent");
    }
    /**
     * @var bool
     */
    public function setCanEditByCurrent($value)
    {
        $this->setProperty("CanEditByCurrent", $value, true);
    }
    /**
     * @return bool
     */
    public function getCanViewByCurrent()
    {
        if (!$this->isPropertyAvailable("CanViewByCurrent")) {
            return null;
        }
        return $this->getProperty("CanViewByCurrent");
    }
    /**
     * @var bool
     */
    public function setCanViewByCurrent($value)
    {
        $this->setProperty("CanViewByCurrent", $value, true);
    }
    /**
     * @return string
     */
    public function getChannelPageUrl()
    {
        if (!$this->isPropertyAvailable("ChannelPageUrl")) {
            return null;
        }
        return $this->getProperty("ChannelPageUrl");
    }
    /**
     * @var string
     */
    public function setChannelPageUrl($value)
    {
        $this->setProperty("ChannelPageUrl", $value, true);
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * @return integer
     */
    public function getDownloadUrlVisibleMinPermission()
    {
        if (!$this->isPropertyAvailable("DownloadUrlVisibleMinPermission")) {
            return null;
        }
        return $this->getProperty("DownloadUrlVisibleMinPermission");
    }
    /**
     * @var integer
     */
    public function setDownloadUrlVisibleMinPermission($value)
    {
        $this->setProperty("DownloadUrlVisibleMinPermission", $value, true);
    }
    /**
     * @return string
     */
    public function getFullUrl()
    {
        if (!$this->isPropertyAvailable("FullUrl")) {
            return null;
        }
        return $this->getProperty("FullUrl");
    }
    /**
     * @var string
     */
    public function setFullUrl($value)
    {
        $this->setProperty("FullUrl", $value, true);
    }
    /**
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * @var string
     */
    public function setServerRelativeUrl($value)
    {
        $this->setProperty("ServerRelativeUrl", $value, true);
    }
    /**
     * @return bool
     */
    public function getShareByEmailEnabled()
    {
        if (!$this->isPropertyAvailable("ShareByEmailEnabled")) {
            return null;
        }
        return $this->getProperty("ShareByEmailEnabled");
    }
    /**
     * @var bool
     */
    public function setShareByEmailEnabled($value)
    {
        $this->setProperty("ShareByEmailEnabled", $value, true);
    }
    /**
     * @var string
     */
    public function setTileHtmlColor($value)
    {
        $this->setProperty("TileHtmlColor", $value, true);
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * @return integer
     */
    public function getYammerDefaultGroupId()
    {
        if (!$this->isPropertyAvailable("YammerDefaultGroupId")) {
            return null;
        }
        return $this->getProperty("YammerDefaultGroupId");
    }
    /**
     * @var integer
     */
    public function setYammerDefaultGroupId($value)
    {
        $this->setProperty("YammerDefaultGroupId", $value, true);
    }
    /**
     * @return bool
     */
    public function getYammerEnabled()
    {
        if (!$this->isPropertyAvailable("YammerEnabled")) {
            return null;
        }
        return $this->getProperty("YammerEnabled");
    }
    /**
     * @var bool
     */
    public function setYammerEnabled($value)
    {
        $this->setProperty("YammerEnabled", $value, true);
    }
}