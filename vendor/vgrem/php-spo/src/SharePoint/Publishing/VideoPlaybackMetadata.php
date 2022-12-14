<?php

/**
 * Generated 2019-11-16T20:28:28+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;

class VideoPlaybackMetadata extends ClientObject
{
    /**
     * @return string
     */
    public function getHLSUrl()
    {
        if (!$this->isPropertyAvailable("HLSUrl")) {
            return null;
        }
        return $this->getProperty("HLSUrl");
    }
    /**
     * @var string
     */
    public function setHLSUrl($value)
    {
        $this->setProperty("HLSUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getSdnPlaybackMetadata()
    {
        if (!$this->isPropertyAvailable("SdnPlaybackMetadata")) {
            return null;
        }
        return $this->getProperty("SdnPlaybackMetadata");
    }
    /**
     * @var string
     */
    public function setSdnPlaybackMetadata($value)
    {
        $this->setProperty("SdnPlaybackMetadata", $value, true);
    }
    /**
     * @return string
     */
    public function getStreamingUrl()
    {
        if (!$this->isPropertyAvailable("StreamingUrl")) {
            return null;
        }
        return $this->getProperty("StreamingUrl");
    }
    /**
     * @var string
     */
    public function setStreamingUrl($value)
    {
        $this->setProperty("StreamingUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getToken()
    {
        if (!$this->isPropertyAvailable("Token")) {
            return null;
        }
        return $this->getProperty("Token");
    }
    /**
     * @var string
     */
    public function setToken($value)
    {
        $this->setProperty("Token", $value, true);
    }
}