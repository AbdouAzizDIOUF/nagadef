<?php

/**
 * Generated 2020-08-19T18:22:34+00:00 16.0.20405.12008
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
/**
 * Represents 
 * a checked-out file in a document library or workspace.
 */
class CheckedOutFile extends ClientObject
{
    /**
     * @return integer
     */
    public function getCheckedOutById()
    {
        if (!$this->isPropertyAvailable("CheckedOutById")) {
            return null;
        }
        return $this->getProperty("CheckedOutById");
    }
    /**
     * @var integer
     */
    public function setCheckedOutById($value)
    {
        $this->setProperty("CheckedOutById", $value, true);
    }
    /**
     * @return User
     */
    public function getCheckedOutBy()
    {
        if (!$this->isPropertyAvailable("CheckedOutBy")) {
            $this->setProperty("CheckedOutBy", new User($this->getContext(), new ResourcePath("CheckedOutBy", $this->getResourcePath())));
        }
        return $this->getProperty("CheckedOutBy");
    }
    /**
     * The server 
     * relative path of the checked out file.
     * @return SPResourcePath
     */
    public function getServerRelativePath()
    {
        if (!$this->isPropertyAvailable("ServerRelativePath")) {
            return null;
        }
        return $this->getProperty("ServerRelativePath");
    }
    /**
     * The server 
     * relative path of the checked out file.
     * @var SPResourcePath
     */
    public function setServerRelativePath($value)
    {
        $this->setProperty("ServerRelativePath", $value, true);
    }
}