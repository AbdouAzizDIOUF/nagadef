<?php

/**
 * Generated 2019-11-16T20:28:28+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
use Office365\SharePoint\ClientContext;

class VideoServiceManager extends ClientObject
{
    public function __construct(ClientContext $ctx, $videoPortalUrl)
    {
        $ctx->setBaseUrl($videoPortalUrl);
        parent::__construct($ctx, new ResourcePath("VideoService"));
    }


    /**
     * @return VideoChannelCollection
     */
    public function getChannels()
    {
        return new VideoChannelCollection($this->getContext(),
            new ResourcePath("Channels", $this->getResourcePath()));
    }
    /**
     * @return VideoChannelCollection
     */
    public function getCanEditChannels()
    {
        return new VideoChannelCollection($this->getContext(),
            new ResourcePath("CanEditChannels", $this->getResourcePath()));
    }
    /**
     * @return SpotlightChannelCollection
     */
    public function getSpotlightChannels()
    {
        return new SpotlightChannelCollection($this->getContext(),
            new ResourcePath("SpotlightChannels", $this->getResourcePath()));
    }
    /**
     * @return SpotlightVideoCollection
     */
    public function getSpotlightVideos()
    {
        return new SpotlightVideoCollection($this->getContext(),
            new ResourcePath("SpotlightVideos", $this->getResourcePath()));
    }
    /**
     * @return string
     */
    public function getAutomaticMigrationType()
    {
        if (!$this->isPropertyAvailable("AutomaticMigrationType")) {
            return null;
        }
        return $this->getProperty("AutomaticMigrationType");
    }
    /**
     * @var string
     */
    public function setAutomaticMigrationType($value)
    {
        $this->setProperty("AutomaticMigrationType", $value, true);
    }
    /**
     * @return bool
     */
    public function getCanAdministratePortalByCurrent()
    {
        if (!$this->isPropertyAvailable("CanAdministratePortalByCurrent")) {
            return null;
        }
        return $this->getProperty("CanAdministratePortalByCurrent");
    }
    /**
     * @var bool
     */
    public function setCanAdministratePortalByCurrent($value)
    {
        $this->setProperty("CanAdministratePortalByCurrent", $value, true);
    }
    /**
     * @return bool
     */
    public function getCanCreateChannelsByCurrent()
    {
        if (!$this->isPropertyAvailable("CanCreateChannelsByCurrent")) {
            return null;
        }
        return $this->getProperty("CanCreateChannelsByCurrent");
    }
    /**
     * @var bool
     */
    public function setCanCreateChannelsByCurrent($value)
    {
        $this->setProperty("CanCreateChannelsByCurrent", $value, true);
    }
    /**
     * @return bool
     */
    public function getCanViewPortalByCurrent()
    {
        if (!$this->isPropertyAvailable("CanViewPortalByCurrent")) {
            return null;
        }
        return $this->getProperty("CanViewPortalByCurrent");
    }
    /**
     * @var bool
     */
    public function setCanViewPortalByCurrent($value)
    {
        $this->setProperty("CanViewPortalByCurrent", $value, true);
    }
    /**
     * @return string
     */
    public function getUploadGuidelinesLink()
    {
        if (!$this->isPropertyAvailable("UploadGuidelinesLink")) {
            return null;
        }
        return $this->getProperty("UploadGuidelinesLink");
    }
    /**
     * @var string
     */
    public function setUploadGuidelinesLink($value)
    {
        $this->setProperty("UploadGuidelinesLink", $value, true);
    }
    /**
     * @return string
     */
    public function getVideoGuidelinesLink()
    {
        if (!$this->isPropertyAvailable("VideoGuidelinesLink")) {
            return null;
        }
        return $this->getProperty("VideoGuidelinesLink");
    }
    /**
     * @var string
     */
    public function setVideoGuidelinesLink($value)
    {
        $this->setProperty("VideoGuidelinesLink", $value, true);
    }
}