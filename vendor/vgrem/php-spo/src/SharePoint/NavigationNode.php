<?php

/**
 * Generated 2020-11-13T16:48:11+00:00 16.0.20628.12006
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

/**
 * Represents 
 * the URL 
 * to a specific navigation node and 
 * provides access to properties and methods for manipulating the ordering of the 
 * navigation node in a navigation node collection. 
 */
class NavigationNode extends ClientObject
{
    /**
     * @return array
     */
    public function getAudienceIds()
    {
        if (!$this->isPropertyAvailable("AudienceIds")) {
            return null;
        }
        return $this->getProperty("AudienceIds");
    }
    /**
     * @var array
     */
    public function setAudienceIds($value)
    {
        $this->setProperty("AudienceIds", $value, true);
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
     * @return bool
     */
    public function getIsDocLib()
    {
        if (!$this->isPropertyAvailable("IsDocLib")) {
            return null;
        }
        return $this->getProperty("IsDocLib");
    }
    /**
     * @var bool
     */
    public function setIsDocLib($value)
    {
        $this->setProperty("IsDocLib", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsExternal()
    {
        if (!$this->isPropertyAvailable("IsExternal")) {
            return null;
        }
        return $this->getProperty("IsExternal");
    }
    /**
     * @var bool
     */
    public function setIsExternal($value)
    {
        $this->setProperty("IsExternal", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsVisible()
    {
        if (!$this->isPropertyAvailable("IsVisible")) {
            return null;
        }
        return $this->getProperty("IsVisible");
    }
    /**
     * @var bool
     */
    public function setIsVisible($value)
    {
        $this->setProperty("IsVisible", $value, true);
    }
    /**
     * @return integer
     */
    public function getListTemplateType()
    {
        if (!$this->isPropertyAvailable("ListTemplateType")) {
            return null;
        }
        return $this->getProperty("ListTemplateType");
    }
    /**
     * @var integer
     */
    public function setListTemplateType($value)
    {
        $this->setProperty("ListTemplateType", $value, true);
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
    public function getUrl()
    {
        if (!$this->isPropertyAvailable("Url")) {
            return null;
        }
        return $this->getProperty("Url");
    }
    /**
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
    /**
     * @return integer
     */
    public function getCurrentLCID()
    {
        if (!$this->isPropertyAvailable("CurrentLCID")) {
            return null;
        }
        return $this->getProperty("CurrentLCID");
    }
    /**
     * @var integer
     */
    public function setCurrentLCID($value)
    {
        $this->setProperty("CurrentLCID", $value, true);
    }
    /**
     * @return UserResource
     */
    public function getTitleResource()
    {
        if (!$this->isPropertyAvailable("TitleResource")) {
            $this->setProperty("TitleResource", new UserResource($this->getContext(),
                new ResourcePath("TitleResource", $this->getResourcePath())));
        }
        return $this->getProperty("TitleResource");
    }
}