<?php

/**
 * Generated 2019-11-17T18:33:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Utilities;

use Office365\Runtime\ClientObject;

/**
 * The entity 
 * data object for shortcut link target information.Some of the properties only apply to shortcut targets that 
 * are in SharePoint.
 */
class ShortcutTargetInfo extends ClientObject
{
    /**
     * @return string
     */
    public function getsiteId()
    {
        if (!$this->isPropertyAvailable("siteId")) {
            return null;
        }
        return $this->getProperty("siteId");
    }
    /**
     * @var string
     */
    public function setsiteId($value)
    {
        $this->setProperty("siteId", $value, true);
    }
    /**
     * @return string
     */
    public function getuniqueId()
    {
        if (!$this->isPropertyAvailable("uniqueId")) {
            return null;
        }
        return $this->getProperty("uniqueId");
    }
    /**
     * @var string
     */
    public function setuniqueId($value)
    {
        $this->setProperty("uniqueId", $value, true);
    }
    /**
     * @return string
     */
    public function geturl()
    {
        if (!$this->isPropertyAvailable("url")) {
            return null;
        }
        return $this->getProperty("url");
    }
    /**
     * @var string
     */
    public function seturl($value)
    {
        $this->setProperty("url", $value, true);
    }
    /**
     * @return string
     */
    public function getwebId()
    {
        if (!$this->isPropertyAvailable("webId")) {
            return null;
        }
        return $this->getProperty("webId");
    }
    /**
     * @var string
     */
    public function setwebId($value)
    {
        $this->setProperty("webId", $value, true);
    }
}