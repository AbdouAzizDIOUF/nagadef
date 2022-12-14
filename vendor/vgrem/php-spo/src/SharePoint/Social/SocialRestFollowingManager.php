<?php

/**
 * Generated 2019-11-16T20:20:25+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Social;

use Office365\SharePoint\BaseEntity;

class SocialRestFollowingManager extends BaseEntity
{
    /**
     * @return string
     */
    public function getFollowedDocumentsUri()
    {
        if (!$this->isPropertyAvailable("FollowedDocumentsUri")) {
            return null;
        }
        return $this->getProperty("FollowedDocumentsUri");
    }
    /**
     * @var string
     */
    public function setFollowedDocumentsUri($value)
    {
        $this->setProperty("FollowedDocumentsUri", $value, true);
    }
    /**
     * @return string
     */
    public function getFollowedSitesUri()
    {
        if (!$this->isPropertyAvailable("FollowedSitesUri")) {
            return null;
        }
        return $this->getProperty("FollowedSitesUri");
    }
    /**
     * @var string
     */
    public function setFollowedSitesUri($value)
    {
        $this->setProperty("FollowedSitesUri", $value, true);
    }
    /**
     * @return string
     */
    public function getMyFollowedDocumentsUri()
    {
        if (!$this->isPropertyAvailable("MyFollowedDocumentsUri")) {
            return null;
        }
        return $this->getProperty("MyFollowedDocumentsUri");
    }
    /**
     * @var string
     */
    public function setMyFollowedDocumentsUri($value)
    {
        $this->setProperty("MyFollowedDocumentsUri", $value, true);
    }
    /**
     * @return string
     */
    public function getMyFollowedSitesUri()
    {
        if (!$this->isPropertyAvailable("MyFollowedSitesUri")) {
            return null;
        }
        return $this->getProperty("MyFollowedSitesUri");
    }
    /**
     * @var string
     */
    public function setMyFollowedSitesUri($value)
    {
        $this->setProperty("MyFollowedSitesUri", $value, true);
    }
    /**
     * @return SocialActor
     */
    public function getSocialActor()
    {
        if (!$this->isPropertyAvailable("SocialActor")) {
            return null;
        }
        return $this->getProperty("SocialActor");
    }
    /**
     * @var SocialActor
     */
    public function setSocialActor($value)
    {
        $this->setProperty("SocialActor", $value, true);
    }
}