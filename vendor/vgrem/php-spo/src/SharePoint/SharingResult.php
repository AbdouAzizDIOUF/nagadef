<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

/**
 * Contains 
 * properties generated as a result of sharing.
 */
class SharingResult extends ClientObject
{
    /**
     * @return string
     */
    public function getErrorMessage()
    {
        if (!$this->isPropertyAvailable("ErrorMessage")) {
            return null;
        }
        return $this->getProperty("ErrorMessage");
    }
    /**
     * @var string
     */
    public function setErrorMessage($value)
    {
        $this->setProperty("ErrorMessage", $value, true);
    }
    /**
     * @return string
     */
    public function getIconUrl()
    {
        if (!$this->isPropertyAvailable("IconUrl")) {
            return null;
        }
        return $this->getProperty("IconUrl");
    }
    /**
     * @var string
     */
    public function setIconUrl($value)
    {
        $this->setProperty("IconUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
    /**
     * @return string
     */
    public function getPermissionsPageRelativeUrl()
    {
        if (!$this->isPropertyAvailable("PermissionsPageRelativeUrl")) {
            return null;
        }
        return $this->getProperty("PermissionsPageRelativeUrl");
    }
    /**
     * @var string
     */
    public function setPermissionsPageRelativeUrl($value)
    {
        $this->setProperty("PermissionsPageRelativeUrl", $value, true);
    }
    /**
     * @return integer
     */
    public function getStatusCode()
    {
        if (!$this->isPropertyAvailable("StatusCode")) {
            return null;
        }
        return $this->getProperty("StatusCode");
    }
    /**
     * @var integer
     */
    public function setStatusCode($value)
    {
        $this->setProperty("StatusCode", $value, true);
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
     * @return GroupCollection
     */
    public function getGroupsSharedWith()
    {
        if (!$this->isPropertyAvailable("GroupsSharedWith")) {
            $this->setProperty("GroupsSharedWith", new GroupCollection($this->getContext(),
                new ResourcePath("GroupsSharedWith", $this->getResourcePath())));
        }
        return $this->getProperty("GroupsSharedWith");
    }
    /**
     * @return Group
     */
    public function getGroupUsersAddedTo()
    {
        if (!$this->isPropertyAvailable("GroupUsersAddedTo")) {
            $this->setProperty("GroupUsersAddedTo", new Group($this->getContext(),
                new ResourcePath("GroupUsersAddedTo", $this->getResourcePath())));
        }
        return $this->getProperty("GroupUsersAddedTo");
    }
    /**
     * @return UserCollection
     */
    public function getUsersWithAccessRequests()
    {
        if (!$this->isPropertyAvailable("UsersWithAccessRequests")) {
            $this->setProperty("UsersWithAccessRequests", new UserCollection($this->getContext(),
                new ResourcePath("UsersWithAccessRequests", $this->getResourcePath())));
        }
        return $this->getProperty("UsersWithAccessRequests");
    }
}