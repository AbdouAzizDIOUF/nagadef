<?php

/**
 * Generated 2019-11-16T20:26:56+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;

class SpotlightChannel extends ClientObject
{
    /**
     * @return string
     */
    public function getChannelId()
    {
        if (!$this->isPropertyAvailable("ChannelId")) {
            return null;
        }
        return $this->getProperty("ChannelId");
    }
    /**
     * @var string
     */
    public function setChannelId($value)
    {
        $this->setProperty("ChannelId", $value, true);
    }
    /**
     * @return integer
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * @var integer
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * @return string
     */
    public function getTileHtmlColor()
    {
        if (!$this->isPropertyAvailable("TileHtmlColor")) {
            return null;
        }
        return $this->getProperty("TileHtmlColor");
    }
    /**
     * @var string
     */
    public function setTileHtmlColor($value)
    {
        $this->setProperty("TileHtmlColor", $value, true);
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * @return string
     */
    public function getVideoLibraryServerRelativeUrl()
    {
        if (!$this->isPropertyAvailable("VideoLibraryServerRelativeUrl")) {
            return null;
        }
        return $this->getProperty("VideoLibraryServerRelativeUrl");
    }
    /**
     * @var string
     */
    public function setVideoLibraryServerRelativeUrl($value)
    {
        $this->setProperty("VideoLibraryServerRelativeUrl", $value, true);
    }
}