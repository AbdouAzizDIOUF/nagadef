<?php

/**
 * Generated 2019-11-17T16:07:15+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Represents 
 * the Information 
 * Rights Management (IRM) settings of a file.
 */
class InformationRightsManagementFileSettings extends ClientObject
{
    /**
     * @return bool
     */
    public function getAllowPrint()
    {
        if (!$this->isPropertyAvailable("AllowPrint")) {
            return null;
        }
        return $this->getProperty("AllowPrint");
    }
    /**
     * @var bool
     */
    public function setAllowPrint($value)
    {
        $this->setProperty("AllowPrint", $value, true);
    }
    /**
     * @return bool
     */
    public function getAllowScript()
    {
        if (!$this->isPropertyAvailable("AllowScript")) {
            return null;
        }
        return $this->getProperty("AllowScript");
    }
    /**
     * @var bool
     */
    public function setAllowScript($value)
    {
        $this->setProperty("AllowScript", $value, true);
    }
    /**
     * @return bool
     */
    public function getAllowWriteCopy()
    {
        if (!$this->isPropertyAvailable("AllowWriteCopy")) {
            return null;
        }
        return $this->getProperty("AllowWriteCopy");
    }
    /**
     * @var bool
     */
    public function setAllowWriteCopy($value)
    {
        $this->setProperty("AllowWriteCopy", $value, true);
    }
    /**
     * @return bool
     */
    public function getDisableDocumentBrowserView()
    {
        if (!$this->isPropertyAvailable("DisableDocumentBrowserView")) {
            return null;
        }
        return $this->getProperty("DisableDocumentBrowserView");
    }
    /**
     * @var bool
     */
    public function setDisableDocumentBrowserView($value)
    {
        $this->setProperty("DisableDocumentBrowserView", $value, true);
    }
    /**
     * @return integer
     */
    public function getDocumentAccessExpireDays()
    {
        if (!$this->isPropertyAvailable("DocumentAccessExpireDays")) {
            return null;
        }
        return $this->getProperty("DocumentAccessExpireDays");
    }
    /**
     * @var integer
     */
    public function setDocumentAccessExpireDays($value)
    {
        $this->setProperty("DocumentAccessExpireDays", $value, true);
    }
    /**
     * @return bool
     */
    public function getEnableDocumentAccessExpire()
    {
        if (!$this->isPropertyAvailable("EnableDocumentAccessExpire")) {
            return null;
        }
        return $this->getProperty("EnableDocumentAccessExpire");
    }
    /**
     * @var bool
     */
    public function setEnableDocumentAccessExpire($value)
    {
        $this->setProperty("EnableDocumentAccessExpire", $value, true);
    }
    /**
     * @return bool
     */
    public function getEnableDocumentBrowserPublishingView()
    {
        if (!$this->isPropertyAvailable("EnableDocumentBrowserPublishingView")) {
            return null;
        }
        return $this->getProperty("EnableDocumentBrowserPublishingView");
    }
    /**
     * @var bool
     */
    public function setEnableDocumentBrowserPublishingView($value)
    {
        $this->setProperty("EnableDocumentBrowserPublishingView", $value, true);
    }
    /**
     * @return bool
     */
    public function getEnableGroupProtection()
    {
        if (!$this->isPropertyAvailable("EnableGroupProtection")) {
            return null;
        }
        return $this->getProperty("EnableGroupProtection");
    }
    /**
     * @var bool
     */
    public function setEnableGroupProtection($value)
    {
        $this->setProperty("EnableGroupProtection", $value, true);
    }
    /**
     * @return bool
     */
    public function getEnableLicenseCacheExpire()
    {
        if (!$this->isPropertyAvailable("EnableLicenseCacheExpire")) {
            return null;
        }
        return $this->getProperty("EnableLicenseCacheExpire");
    }
    /**
     * @var bool
     */
    public function setEnableLicenseCacheExpire($value)
    {
        $this->setProperty("EnableLicenseCacheExpire", $value, true);
    }
    /**
     * @return string
     */
    public function getGroupName()
    {
        if (!$this->isPropertyAvailable("GroupName")) {
            return null;
        }
        return $this->getProperty("GroupName");
    }
    /**
     * @var string
     */
    public function setGroupName($value)
    {
        $this->setProperty("GroupName", $value, true);
    }
    /**
     * @return bool
     */
    public function getIrmEnabled()
    {
        if (!$this->isPropertyAvailable("IrmEnabled")) {
            return null;
        }
        return $this->getProperty("IrmEnabled");
    }
    /**
     * @var bool
     */
    public function setIrmEnabled($value)
    {
        $this->setProperty("IrmEnabled", $value, true);
    }
    /**
     * @return integer
     */
    public function getLicenseCacheExpireDays()
    {
        if (!$this->isPropertyAvailable("LicenseCacheExpireDays")) {
            return null;
        }
        return $this->getProperty("LicenseCacheExpireDays");
    }
    /**
     * @var integer
     */
    public function setLicenseCacheExpireDays($value)
    {
        $this->setProperty("LicenseCacheExpireDays", $value, true);
    }
    /**
     * @return string
     */
    public function getPolicyDescription()
    {
        if (!$this->isPropertyAvailable("PolicyDescription")) {
            return null;
        }
        return $this->getProperty("PolicyDescription");
    }
    /**
     * @var string
     */
    public function setPolicyDescription($value)
    {
        $this->setProperty("PolicyDescription", $value, true);
    }
    /**
     * @return string
     */
    public function getPolicyTitle()
    {
        if (!$this->isPropertyAvailable("PolicyTitle")) {
            return null;
        }
        return $this->getProperty("PolicyTitle");
    }
    /**
     * @var string
     */
    public function setPolicyTitle($value)
    {
        $this->setProperty("PolicyTitle", $value, true);
    }
    /**
     * @return string
     */
    public function getTemplateId()
    {
        if (!$this->isPropertyAvailable("TemplateId")) {
            return null;
        }
        return $this->getProperty("TemplateId");
    }
    /**
     * @var string
     */
    public function setTemplateId($value)
    {
        $this->setProperty("TemplateId", $value, true);
    }
}