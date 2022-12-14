<?php

/**
 * Generated 2019-11-16T20:28:28+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
use Office365\SharePoint\ClientContext;

class VideoServiceDiscoverer extends ClientObject
{
    public function __construct(ClientContext $ctx)
    {
        parent::__construct($ctx, new ResourcePath("VideoService.Discover"));
    }
    public function getVideoPortalUrl()
    {
        return $this->getProperty("VideoPortalUrl");
    }
    public function getVideoPortalLayoutsUrl()
    {
        return $this->getProperty("VideoPortalLayoutsUrl");
    }
    public function getPlayerUrlTemplate()
    {
        return $this->getProperty("PlayerUrlTemplate");
    }
    /**
     * @return boolean
     */
    public function getIsVideoPortalEnabled()
    {
        return $this->getProperty("IsVideoPortalEnabled");
    }
    /**
     * @return string
     */
    public function getChannelUrlTemplate()
    {
        if (!$this->isPropertyAvailable("ChannelUrlTemplate")) {
            return null;
        }
        return $this->getProperty("ChannelUrlTemplate");
    }
    /**
     * @var string
     */
    public function setChannelUrlTemplate($value)
    {
        $this->setProperty("ChannelUrlTemplate", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsFeedbackEnabled()
    {
        if (!$this->isPropertyAvailable("IsFeedbackEnabled")) {
            return null;
        }
        return $this->getProperty("IsFeedbackEnabled");
    }
    /**
     * @var bool
     */
    public function setIsFeedbackEnabled($value)
    {
        $this->setProperty("IsFeedbackEnabled", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsLicensedForVideoPortal()
    {
        if (!$this->isPropertyAvailable("IsLicensedForVideoPortal")) {
            return null;
        }
        return $this->getProperty("IsLicensedForVideoPortal");
    }
    /**
     * @var bool
     */
    public function setIsLicensedForVideoPortal($value)
    {
        $this->setProperty("IsLicensedForVideoPortal", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsMigratedToStream()
    {
        if (!$this->isPropertyAvailable("IsMigratedToStream")) {
            return null;
        }
        return $this->getProperty("IsMigratedToStream");
    }
    /**
     * @var bool
     */
    public function setIsMigratedToStream($value)
    {
        $this->setProperty("IsMigratedToStream", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsO365VideoEnabled()
    {
        if (!$this->isPropertyAvailable("IsO365VideoEnabled")) {
            return null;
        }
        return $this->getProperty("IsO365VideoEnabled");
    }
    /**
     * @var bool
     */
    public function setIsO365VideoEnabled($value)
    {
        $this->setProperty("IsO365VideoEnabled", $value, true);
    }
    /**
     * @var bool
     */
    public function setIsVideoPortalEnabled($value)
    {
        $this->setProperty("IsVideoPortalEnabled", $value, true);
    }
    /**
     * @return string
     */
    public function getO365VideoPageUrl()
    {
        if (!$this->isPropertyAvailable("O365VideoPageUrl")) {
            return null;
        }
        return $this->getProperty("O365VideoPageUrl");
    }
    /**
     * @var string
     */
    public function setO365VideoPageUrl($value)
    {
        $this->setProperty("O365VideoPageUrl", $value, true);
    }
    /**
     * @var string
     */
    public function setPlayerUrlTemplate($value)
    {
        $this->setProperty("PlayerUrlTemplate", $value, true);
    }
    /**
     * @var string
     */
    public function setVideoPortalLayoutsUrl($value)
    {
        $this->setProperty("VideoPortalLayoutsUrl", $value, true);
    }
    /**
     * @var string
     */
    public function setVideoPortalUrl($value)
    {
        $this->setProperty("VideoPortalUrl", $value, true);
    }
}