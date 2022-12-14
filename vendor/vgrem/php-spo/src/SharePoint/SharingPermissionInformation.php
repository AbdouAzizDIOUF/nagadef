<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Contains 
 * information about a sharing permission entity such as group or role.
 */
class SharingPermissionInformation extends ClientObject
{
    /**
     * @return bool
     */
    public function getIsDefaultPermission()
    {
        if (!$this->isPropertyAvailable("IsDefaultPermission")) {
            return null;
        }
        return $this->getProperty("IsDefaultPermission");
    }
    /**
     * @var bool
     */
    public function setIsDefaultPermission($value)
    {
        $this->setProperty("IsDefaultPermission", $value, true);
    }
    /**
     * @return string
     */
    public function getPermissionDescription()
    {
        if (!$this->isPropertyAvailable("PermissionDescription")) {
            return null;
        }
        return $this->getProperty("PermissionDescription");
    }
    /**
     * @var string
     */
    public function setPermissionDescription($value)
    {
        $this->setProperty("PermissionDescription", $value, true);
    }
    /**
     * @return string
     */
    public function getPermissionId()
    {
        if (!$this->isPropertyAvailable("PermissionId")) {
            return null;
        }
        return $this->getProperty("PermissionId");
    }
    /**
     * @var string
     */
    public function setPermissionId($value)
    {
        $this->setProperty("PermissionId", $value, true);
    }
    /**
     * @return integer
     */
    public function getPermissionKind()
    {
        if (!$this->isPropertyAvailable("PermissionKind")) {
            return null;
        }
        return $this->getProperty("PermissionKind");
    }
    /**
     * @var integer
     */
    public function setPermissionKind($value)
    {
        $this->setProperty("PermissionKind", $value, true);
    }
    /**
     * @return string
     */
    public function getPermissionName()
    {
        if (!$this->isPropertyAvailable("PermissionName")) {
            return null;
        }
        return $this->getProperty("PermissionName");
    }
    /**
     * @var string
     */
    public function setPermissionName($value)
    {
        $this->setProperty("PermissionName", $value, true);
    }
    /**
     * @return integer
     */
    public function getPermissionRoleType()
    {
        if (!$this->isPropertyAvailable("PermissionRoleType")) {
            return null;
        }
        return $this->getProperty("PermissionRoleType");
    }
    /**
     * @var integer
     */
    public function setPermissionRoleType($value)
    {
        $this->setProperty("PermissionRoleType", $value, true);
    }
}