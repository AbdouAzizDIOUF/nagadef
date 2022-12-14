<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Social;

use Office365\Runtime\ClientObject;


class SocialRestThread extends ClientObject
{
    /**
     * @return string
     */
    public function getID()
    {
        if (!$this->isPropertyAvailable("ID")) {
            return null;
        }
        return $this->getProperty("ID");
    }
    /**
     * @var string
     */
    public function setID($value)
    {
        $this->setProperty("ID", $value, true);
    }
    /**
     * @return SocialThread
     */
    public function getSocialThread()
    {
        if (!$this->isPropertyAvailable("SocialThread")) {
            return null;
        }
        return $this->getProperty("SocialThread");
    }
    /**
     * @var SocialThread
     */
    public function setSocialThread($value)
    {
        $this->setProperty("SocialThread", $value, true);
    }
}
