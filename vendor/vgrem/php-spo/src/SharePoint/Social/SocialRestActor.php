<?php

/**
 * Generated 2019-11-16T20:16:35+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Social;

use Office365\Runtime\ClientObject;

class SocialRestActor extends ClientObject
{

    /**
     * @return string
     */
    public function getFollowableItem()
    {
        if (!$this->isPropertyAvailable("FollowableItem")) {
            return null;
        }
        return $this->getProperty("FollowableItem");
    }
    /**
     * @var string
     */
    public function setFollowableItem($value)
    {
        $this->setProperty("FollowableItem", $value, true);
    }
    /**
     * @return SocialActor
     */
    public function getFollowableItemActor()
    {
        if (!$this->isPropertyAvailable("FollowableItemActor")) {
            return null;
        }
        return $this->getProperty("FollowableItemActor");
    }
    /**
     * @var SocialActor
     */
    public function setFollowableItemActor($value)
    {
        $this->setProperty("FollowableItemActor", $value, true);
    }
    /**
     * @return SocialActor
     */
    public function getMe()
    {
        if (!$this->isPropertyAvailable("Me")) {
            return null;
        }
        return $this->getProperty("Me");
    }
    /**
     * @var SocialActor
     */
    public function setMe($value)
    {
        $this->setProperty("Me", $value, true);
    }
}
