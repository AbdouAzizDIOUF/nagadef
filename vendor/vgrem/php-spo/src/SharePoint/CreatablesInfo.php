<?php

/**
 * Generated 2019-11-17T16:07:15+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Returns an 
 * object that describes what this list can create, and 
 * a collection of links to visit in order to create those things. If it can't 
 * create certain things, it contains an error message describing why. The consumer MUST append the encoded URL 
 * of the current page to the links returned here. (This page the link goes to 
 * needs it as a query parameter to function correctly.) The consumer SHOULD also 
 * consider appending &IsDlg=1 to the link, to remove the UI from the linked 
 * page, if desired.
 */
class CreatablesInfo extends ClientObject
{
    /**
     * @return bool
     */
    public function getCanCreateFolders()
    {
        if (!$this->isPropertyAvailable("CanCreateFolders")) {
            return null;
        }
        return $this->getProperty("CanCreateFolders");
    }
    /**
     * @var bool
     */
    public function setCanCreateFolders($value)
    {
        $this->setProperty("CanCreateFolders", $value, true);
    }
    /**
     * @return bool
     */
    public function getCanCreateItems()
    {
        if (!$this->isPropertyAvailable("CanCreateItems")) {
            return null;
        }
        return $this->getProperty("CanCreateItems");
    }
    /**
     * @var bool
     */
    public function setCanCreateItems($value)
    {
        $this->setProperty("CanCreateItems", $value, true);
    }
    /**
     * @return bool
     */
    public function getCanUploadFiles()
    {
        if (!$this->isPropertyAvailable("CanUploadFiles")) {
            return null;
        }
        return $this->getProperty("CanUploadFiles");
    }
    /**
     * @var bool
     */
    public function setCanUploadFiles($value)
    {
        $this->setProperty("CanUploadFiles", $value, true);
    }
    /**
     * @return CreatableItemInfoCollection
     */
    public function getCreatablesCollection()
    {
        if (!$this->isPropertyAvailable("CreatablesCollection")) {
            return null;
        }
        return $this->getProperty("CreatablesCollection");
    }
    /**
     * @var CreatableItemInfoCollection
     */
    public function setCreatablesCollection($value)
    {
        $this->setProperty("CreatablesCollection", $value, true);
    }
}