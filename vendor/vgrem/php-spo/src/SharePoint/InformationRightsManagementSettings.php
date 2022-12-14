<?php

/**
 * Generated 2020-04-22T20:59:03+00:00 16.0.20008.12009
 */
namespace Office365\SharePoint;


/**
 * A 
 * collection of Information Rights Management 
 * (IRM) settings for a list.<201>
 */
class InformationRightsManagementSettings extends BaseEntity
{

    /**
     * Specifies 
     * whether a user can print the downloaded document.
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
     * Specifies 
     * whether a user can print the downloaded document.
     * @var bool
     */
    public function setAllowPrint($value)
    {
        $this->setProperty("AllowPrint", $value, true);
    }
    /**
     * Specifies 
     * whether a user can run scripts on the downloaded document.
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
     * Specifies 
     * whether a user can run scripts on the downloaded document.
     * @var bool
     */
    public function setAllowScript($value)
    {
        $this->setProperty("AllowScript", $value, true);
    }
    /**
     * Specifies 
     * whether a user can write in a copy of the downloaded document.
     * @return bool
     */
    public function getAllowWriteCopy()
    {
        return $this->getProperty("AllowWriteCopy");
    }
    /**
     * Specifies 
     * whether a user can write in a copy of the downloaded document.
     * @var bool
     */
    public function setAllowWriteCopy($value)
    {
        $this->setProperty("AllowWriteCopy", $value, true);
    }
    /**
     * Specifies 
     * whether to block the Office Add-in from 
     * showing this document. The default value is false.
     * @return bool
     */
    public function getDisableDocumentBrowserView()
    {
        return $this->getProperty("DisableDocumentBrowserView");
    }
    /**
     * Specifies 
     * whether to block the Office Add-in from 
     * showing this document. The default value is false.
     * @var bool
     */
    public function setDisableDocumentBrowserView($value)
    {
        $this->setProperty("DisableDocumentBrowserView", $value, true);
    }
    /**
     * Specifies 
     * the number of days after which the downloaded document will 
     * expire.
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
     * Specifies 
     * the number of days after which the downloaded document will 
     * expire.
     * @var integer
     */
    public function setDocumentAccessExpireDays($value)
    {
        $this->setProperty("DocumentAccessExpireDays", $value, true);
    }
    /**
     * Specifies 
     * the date on which the Information Rights Management 
     * (IRM) protection of this document library 
     * will stop.
     * @return string
     */
    public function getDocumentLibraryProtectionExpireDate()
    {

        return $this->getProperty("DocumentLibraryProtectionExpireDate");
    }
    /**
     * Specifies 
     * the date on which the Information Rights Management 
     * (IRM) protection of this document library 
     * will stop.
     * @var string
     */
    public function setDocumentLibraryProtectionExpireDate($value)
    {
        $this->setProperty("DocumentLibraryProtectionExpireDate", $value, true);
    }
    /**
     * Specifies 
     * whether the downloaded document will 
     * expire.
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
     * Specifies 
     * whether the downloaded document will 
     * expire.
     * @var bool
     */
    public function setEnableDocumentAccessExpire($value)
    {
        $this->setProperty("EnableDocumentAccessExpire", $value, true);
    }
    /**
     * Specifies 
     * whether publishing view is enabled in the Office Add-in. The 
     * default value is false.
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
     * Specifies 
     * whether publishing view is enabled in the Office Add-in. The 
     * default value is false.
     * @var bool
     */
    public function setEnableDocumentBrowserPublishingView($value)
    {
        $this->setProperty("EnableDocumentBrowserPublishingView", $value, true);
    }
    /**
     * Specifies 
     * whether the permission of the downloaded document is 
     * applicable to a group.
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
     * Specifies 
     * whether the permission of the downloaded document is 
     * applicable to a group.
     * @var bool
     */
    public function setEnableGroupProtection($value)
    {
        $this->setProperty("EnableGroupProtection", $value, true);
    }
    /**
     * Specifies 
     * whether a user MUST verify his or her credentials after certain intervals.
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
     * Specifies 
     * whether a user MUST verify his or her credentials after certain intervals.
     * @var bool
     */
    public function setEnableLicenseCacheExpire($value)
    {
        $this->setProperty("EnableLicenseCacheExpire", $value, true);
    }
    /**
     * Specifies 
     * the group 
     * name (email address) that the permission is also applicable to.
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
     * Specifies 
     * the group 
     * name (email address) that the permission is also applicable to.
     * @var string
     */
    public function setGroupName($value)
    {
        $this->setProperty("GroupName", $value, true);
    }
    /**
     * Specifies 
     * the number of days that the Information Rights Management 
     * (IRM) license can be cached by the application to open the 
     * downloaded document. When these elapse, the application will connect to the IRM 
     * server to validate the license.
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
     * Specifies 
     * the number of days that the Information Rights Management 
     * (IRM) license can be cached by the application to open the 
     * downloaded document. When these elapse, the application will connect to the IRM 
     * server to validate the license.
     * @var integer
     */
    public function setLicenseCacheExpireDays($value)
    {
        $this->setProperty("LicenseCacheExpireDays", $value, true);
    }
    /**
     * Specifies 
     * the permission policy description.
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
     * Specifies 
     * the permission policy description.
     * @var string
     */
    public function setPolicyDescription($value)
    {
        $this->setProperty("PolicyDescription", $value, true);
    }
    /**
     * Specifies 
     * the permission policy title.
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
     * Specifies 
     * the permission policy title.
     * @var string
     */
    public function setPolicyTitle($value)
    {
        $this->setProperty("PolicyTitle", $value, true);
    }
    /**
     * Gets or 
     * sets the ID of the RMS template that will be applied to the file or library.
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
     * Gets or 
     * sets the ID of the RMS template that will be applied to the file or library.
     * @var string
     */
    public function setTemplateId($value)
    {
        $this->setProperty("TemplateId", $value, true);
    }
}