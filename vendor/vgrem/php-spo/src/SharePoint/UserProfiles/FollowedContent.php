<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\UserProfiles;

use Office365\Runtime\ClientObject;


class FollowedContent extends ClientObject
{
    /**
     * @return string
     */
    public function getFollowedDocumentsUrl()
    {
        if (!$this->isPropertyAvailable("FollowedDocumentsUrl")) {
            return null;
        }
        return $this->getProperty("FollowedDocumentsUrl");
    }
    /**
     * @var string
     */
    public function setFollowedDocumentsUrl($value)
    {
        $this->setProperty("FollowedDocumentsUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getFollowedSitesUrl()
    {
        if (!$this->isPropertyAvailable("FollowedSitesUrl")) {
            return null;
        }
        return $this->getProperty("FollowedSitesUrl");
    }
    /**
     * @var string
     */
    public function setFollowedSitesUrl($value)
    {
        $this->setProperty("FollowedSitesUrl", $value, true);
    }
}
