<?php

/**
 * Generated 2019-11-16T20:10:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\UserProfiles;

use Office365\Runtime\Actions\InvokePostMethodQuery;
use Office365\SharePoint\BaseEntity;

class UserProfile extends BaseEntity
{

    /**
     * Enqueues creating a personal site for this user, which can be used to share documents, web pages, and other files.
     */
    public function createPersonalSiteEnque()
    {
        $qry = new InvokePostMethodQuery($this, "createPersonalSiteEnque", array(false));
        $this->getContext()->addQuery($qry);
        return $this;
    }
    /**
     * @return string
     */
    public function getAccountName()
    {
        if (!$this->isPropertyAvailable("AccountName")) {
            return null;
        }
        return $this->getProperty("AccountName");
    }
    /**
     * @var string
     */
    public function setAccountName($value)
    {
        $this->setProperty("AccountName", $value, true);
    }
    /**
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * @return string
     */
    public function getFollowPersonalSiteUrl()
    {
        if (!$this->isPropertyAvailable("FollowPersonalSiteUrl")) {
            return null;
        }
        return $this->getProperty("FollowPersonalSiteUrl");
    }
    /**
     * @var string
     */
    public function setFollowPersonalSiteUrl($value)
    {
        $this->setProperty("FollowPersonalSiteUrl", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsDefaultDocumentLibraryBlocked()
    {
        if (!$this->isPropertyAvailable("IsDefaultDocumentLibraryBlocked")) {
            return null;
        }
        return $this->getProperty("IsDefaultDocumentLibraryBlocked");
    }
    /**
     * @var bool
     */
    public function setIsDefaultDocumentLibraryBlocked($value)
    {
        $this->setProperty("IsDefaultDocumentLibraryBlocked", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsPeopleListPublic()
    {
        if (!$this->isPropertyAvailable("IsPeopleListPublic")) {
            return null;
        }
        return $this->getProperty("IsPeopleListPublic");
    }
    /**
     * @var bool
     */
    public function setIsPeopleListPublic($value)
    {
        $this->setProperty("IsPeopleListPublic", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsPrivacySettingOn()
    {
        if (!$this->isPropertyAvailable("IsPrivacySettingOn")) {
            return null;
        }
        return $this->getProperty("IsPrivacySettingOn");
    }
    /**
     * @var bool
     */
    public function setIsPrivacySettingOn($value)
    {
        $this->setProperty("IsPrivacySettingOn", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsSelf()
    {
        if (!$this->isPropertyAvailable("IsSelf")) {
            return null;
        }
        return $this->getProperty("IsSelf");
    }
    /**
     * @var bool
     */
    public function setIsSelf($value)
    {
        $this->setProperty("IsSelf", $value, true);
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
     * @return integer
     */
    public function getMySiteFirstRunExperience()
    {
        if (!$this->isPropertyAvailable("MySiteFirstRunExperience")) {
            return null;
        }
        return $this->getProperty("MySiteFirstRunExperience");
    }
    /**
     * @var integer
     */
    public function setMySiteFirstRunExperience($value)
    {
        $this->setProperty("MySiteFirstRunExperience", $value, true);
    }
    /**
     * @return string
     */
    public function getMySiteHostUrl()
    {
        if (!$this->isPropertyAvailable("MySiteHostUrl")) {
            return null;
        }
        return $this->getProperty("MySiteHostUrl");
    }
    /**
     * @var string
     */
    public function setMySiteHostUrl($value)
    {
        $this->setProperty("MySiteHostUrl", $value, true);
    }
    /**
     * @return integer
     */
    public function getO15FirstRunExperience()
    {
        if (!$this->isPropertyAvailable("O15FirstRunExperience")) {
            return null;
        }
        return $this->getProperty("O15FirstRunExperience");
    }
    /**
     * @var integer
     */
    public function setO15FirstRunExperience($value)
    {
        $this->setProperty("O15FirstRunExperience", $value, true);
    }
    /**
     * @return integer
     */
    public function getPersonalSiteCapabilities()
    {
        if (!$this->isPropertyAvailable("PersonalSiteCapabilities")) {
            return null;
        }
        return $this->getProperty("PersonalSiteCapabilities");
    }
    /**
     * @var integer
     */
    public function setPersonalSiteCapabilities($value)
    {
        $this->setProperty("PersonalSiteCapabilities", $value, true);
    }
    /**
     * @return string
     */
    public function getPersonalSiteFirstCreationError()
    {
        if (!$this->isPropertyAvailable("PersonalSiteFirstCreationError")) {
            return null;
        }
        return $this->getProperty("PersonalSiteFirstCreationError");
    }
    /**
     * @var string
     */
    public function setPersonalSiteFirstCreationError($value)
    {
        $this->setProperty("PersonalSiteFirstCreationError", $value, true);
    }
    /**
     * @return string
     */
    public function getPersonalSiteFirstCreationTime()
    {
        if (!$this->isPropertyAvailable("PersonalSiteFirstCreationTime")) {
            return null;
        }
        return $this->getProperty("PersonalSiteFirstCreationTime");
    }
    /**
     * @var string
     */
    public function setPersonalSiteFirstCreationTime($value)
    {
        $this->setProperty("PersonalSiteFirstCreationTime", $value, true);
    }
    /**
     * @return integer
     */
    public function getPersonalSiteInstantiationState()
    {
        if (!$this->isPropertyAvailable("PersonalSiteInstantiationState")) {
            return null;
        }
        return $this->getProperty("PersonalSiteInstantiationState");
    }
    /**
     * @var integer
     */
    public function setPersonalSiteInstantiationState($value)
    {
        $this->setProperty("PersonalSiteInstantiationState", $value, true);
    }
    /**
     * @return string
     */
    public function getPersonalSiteLastCreationTime()
    {
        if (!$this->isPropertyAvailable("PersonalSiteLastCreationTime")) {
            return null;
        }
        return $this->getProperty("PersonalSiteLastCreationTime");
    }
    /**
     * @var string
     */
    public function setPersonalSiteLastCreationTime($value)
    {
        $this->setProperty("PersonalSiteLastCreationTime", $value, true);
    }
    /**
     * @return integer
     */
    public function getPersonalSiteNumberOfRetries()
    {
        if (!$this->isPropertyAvailable("PersonalSiteNumberOfRetries")) {
            return null;
        }
        return $this->getProperty("PersonalSiteNumberOfRetries");
    }
    /**
     * @var integer
     */
    public function setPersonalSiteNumberOfRetries($value)
    {
        $this->setProperty("PersonalSiteNumberOfRetries", $value, true);
    }
    /**
     * @return bool
     */
    public function getPictureImportEnabled()
    {
        if (!$this->isPropertyAvailable("PictureImportEnabled")) {
            return null;
        }
        return $this->getProperty("PictureImportEnabled");
    }
    /**
     * @var bool
     */
    public function setPictureImportEnabled($value)
    {
        $this->setProperty("PictureImportEnabled", $value, true);
    }
    /**
     * @return string
     */
    public function getPictureUrl()
    {
        if (!$this->isPropertyAvailable("PictureUrl")) {
            return null;
        }
        return $this->getProperty("PictureUrl");
    }
    /**
     * @var string
     */
    public function setPictureUrl($value)
    {
        $this->setProperty("PictureUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getPublicUrl()
    {
        if (!$this->isPropertyAvailable("PublicUrl")) {
            return null;
        }
        return $this->getProperty("PublicUrl");
    }
    /**
     * @var string
     */
    public function setPublicUrl($value)
    {
        $this->setProperty("PublicUrl", $value, true);
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
     *
     * @return UserProfile
     * @var string
     */
    public function setSipAddress($value)
    {
        $this->setProperty("SipAddress", $value, true);
        return $this;
    }
    /**
     * @return string
     */
    public function getUrlToCreatePersonalSite()
    {
        if (!$this->isPropertyAvailable("UrlToCreatePersonalSite")) {
            return null;
        }
        return $this->getProperty("UrlToCreatePersonalSite");
    }

    /**
     * @param $value
     * @return self
     */
    public function setUrlToCreatePersonalSite($value)
    {
        $this->setProperty("UrlToCreatePersonalSite", $value, true);
        return $this;
    }
}