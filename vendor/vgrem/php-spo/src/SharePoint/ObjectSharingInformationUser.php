<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;


/**
 * Contains 
 * information about a principal with whom 
 * a securable 
 * object is shared. It can be a user or a group.
 */
class ObjectSharingInformationUser extends ClientObject
{
    /**
     * @return string
     */
    public function getCustomRoleNames()
    {
        if (!$this->isPropertyAvailable("CustomRoleNames")) {
            return null;
        }
        return $this->getProperty("CustomRoleNames");
    }
    /**
     * @var string
     */
    public function setCustomRoleNames($value)
    {
        $this->setProperty("CustomRoleNames", $value, true);
    }
    /**
     * @return string
     */
    public function getDepartment()
    {
        if (!$this->isPropertyAvailable("Department")) {
            return null;
        }
        return $this->getProperty("Department");
    }
    /**
     * @var string
     */
    public function setDepartment($value)
    {
        $this->setProperty("Department", $value, true);
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        if (!$this->isPropertyAvailable("Email")) {
            return null;
        }
        return $this->getProperty("Email");
    }
    /**
     * @var string
     */
    public function setEmail($value)
    {
        $this->setProperty("Email", $value, true);
    }
    /**
     * @return bool
     */
    public function getHasEditPermission()
    {
        if (!$this->isPropertyAvailable("HasEditPermission")) {
            return null;
        }
        return $this->getProperty("HasEditPermission");
    }
    /**
     * @var bool
     */
    public function setHasEditPermission($value)
    {
        $this->setProperty("HasEditPermission", $value, true);
    }
    /**
     * @return bool
     */
    public function getHasReviewPermission()
    {
        if (!$this->isPropertyAvailable("HasReviewPermission")) {
            return null;
        }
        return $this->getProperty("HasReviewPermission");
    }
    /**
     * @var bool
     */
    public function setHasReviewPermission($value)
    {
        $this->setProperty("HasReviewPermission", $value, true);
    }
    /**
     * @return bool
     */
    public function getHasViewPermission()
    {
        if (!$this->isPropertyAvailable("HasViewPermission")) {
            return null;
        }
        return $this->getProperty("HasViewPermission");
    }
    /**
     * @var bool
     */
    public function setHasViewPermission($value)
    {
        $this->setProperty("HasViewPermission", $value, true);
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
    public function getIsDomainGroup()
    {
        if (!$this->isPropertyAvailable("IsDomainGroup")) {
            return null;
        }
        return $this->getProperty("IsDomainGroup");
    }
    /**
     * @var bool
     */
    public function setIsDomainGroup($value)
    {
        $this->setProperty("IsDomainGroup", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsExternalUser()
    {
        if (!$this->isPropertyAvailable("IsExternalUser")) {
            return null;
        }
        return $this->getProperty("IsExternalUser");
    }
    /**
     * @var bool
     */
    public function setIsExternalUser($value)
    {
        $this->setProperty("IsExternalUser", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsMemberOfGroup()
    {
        if (!$this->isPropertyAvailable("IsMemberOfGroup")) {
            return null;
        }
        return $this->getProperty("IsMemberOfGroup");
    }
    /**
     * @var bool
     */
    public function setIsMemberOfGroup($value)
    {
        $this->setProperty("IsMemberOfGroup", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsSiteAdmin()
    {
        if (!$this->isPropertyAvailable("IsSiteAdmin")) {
            return null;
        }
        return $this->getProperty("IsSiteAdmin");
    }
    /**
     * @var bool
     */
    public function setIsSiteAdmin($value)
    {
        $this->setProperty("IsSiteAdmin", $value, true);
    }
    /**
     * @return string
     */
    public function getJobTitle()
    {
        if (!$this->isPropertyAvailable("JobTitle")) {
            return null;
        }
        return $this->getProperty("JobTitle");
    }
    /**
     * @var string
     */
    public function setJobTitle($value)
    {
        $this->setProperty("JobTitle", $value, true);
    }
    /**
     * @return string
     */
    public function getLoginName()
    {
        if (!$this->isPropertyAvailable("LoginName")) {
            return null;
        }
        return $this->getProperty("LoginName");
    }
    /**
     * @var string
     */
    public function setLoginName($value)
    {
        $this->setProperty("LoginName", $value, true);
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
    public function getPicture()
    {
        if (!$this->isPropertyAvailable("Picture")) {
            return null;
        }
        return $this->getProperty("Picture");
    }
    /**
     * @var string
     */
    public function setPicture($value)
    {
        $this->setProperty("Picture", $value, true);
    }
    /**
     * @return string
     */
    public function getSipAddress()
    {
        if (!$this->isPropertyAvailable("SipAddress")) {
            return null;
        }
        return $this->getProperty("SipAddress");
    }
    /**
     * @var string
     */
    public function setSipAddress($value)
    {
        $this->setProperty("SipAddress", $value, true);
    }
    /**
     * @return Principal
     */
    public function getPrincipal()
    {
        if (!$this->isPropertyAvailable("Principal")) {
            $this->setProperty("Principal", new Principal($this->getContext(),
                new ResourcePath("Principal", $this->getResourcePath())));
        }
        return $this->getProperty("Principal");
    }
    /**
     * @return User
     */
    public function getUser()
    {
        if (!$this->isPropertyAvailable("User")) {
            $this->setProperty("User", new User($this->getContext(),
                new ResourcePath("User", $this->getResourcePath())));
        }
        return $this->getProperty("User");
    }
}
