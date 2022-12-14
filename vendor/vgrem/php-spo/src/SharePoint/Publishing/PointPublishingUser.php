<?php

/**
 * Generated 2019-11-17T18:22:48+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;


class PointPublishingUser extends ClientObject
{
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
     * @return integer
     */
    public function getID()
    {
        if (!$this->isPropertyAvailable("ID")) {
            return null;
        }
        return $this->getProperty("ID");
    }
    /**
     * @var integer
     */
    public function setID($value)
    {
        $this->setProperty("ID", $value, true);
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
    public function getIsMagazineOwner()
    {
        if (!$this->isPropertyAvailable("IsMagazineOwner")) {
            return null;
        }
        return $this->getProperty("IsMagazineOwner");
    }
    /**
     * @var bool
     */
    public function setIsMagazineOwner($value)
    {
        $this->setProperty("IsMagazineOwner", $value, true);
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
}
