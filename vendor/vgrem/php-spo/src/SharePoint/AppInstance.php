<?php

/**
 * Generated 2019-11-16T19:33:31+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * an app 
 * instance.<187>
 */
class AppInstance extends BaseEntity
{
    /**
     * Specifies 
     * the identifier of the app principal.
     * @return string
     */
    public function getAppPrincipalId()
    {
        if (!$this->isPropertyAvailable("AppPrincipalId")) {
            return null;
        }
        return $this->getProperty("AppPrincipalId");
    }
    /**
     * Specifies 
     * the identifier of the app principal.
     * @var string
     */
    public function setAppPrincipalId($value)
    {
        $this->setProperty("AppPrincipalId", $value, true);
    }
    /**
     * The 
     * absolute URL of the site (2) 
     * created during the installation of this app instance.
     * @return string
     */
    public function getAppWebFullUrl()
    {
        if (!$this->isPropertyAvailable("AppWebFullUrl")) {
            return null;
        }
        return $this->getProperty("AppWebFullUrl");
    }
    /**
     * The 
     * absolute URL of the site (2) 
     * created during the installation of this app instance.
     * @var string
     */
    public function setAppWebFullUrl($value)
    {
        $this->setProperty("AppWebFullUrl", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the app instance.
     * @return string
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * Specifies 
     * the identifier of the app instance.
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * Gets the URL 
     * of the fallback image.
     * @return string
     */
    public function getImageFallbackUrl()
    {
        if (!$this->isPropertyAvailable("ImageFallbackUrl")) {
            return null;
        }
        return $this->getProperty("ImageFallbackUrl");
    }
    /**
     * Gets the URL 
     * of the fallback image.
     * @var string
     */
    public function setImageFallbackUrl($value)
    {
        $this->setProperty("ImageFallbackUrl", $value, true);
    }
    /**
     * The URL 
     * of the image relative to 
     * the layouts folder of the site where the app is installed.
     * @return string
     */
    public function getImageUrl()
    {
        if (!$this->isPropertyAvailable("ImageUrl")) {
            return null;
        }
        return $this->getProperty("ImageUrl");
    }
    /**
     * The URL 
     * of the image relative to 
     * the layouts folder of the site where the app is installed.
     * @var string
     */
    public function setImageUrl($value)
    {
        $this->setProperty("ImageUrl", $value, true);
    }
    /**
     * Specifies 
     * whether the app instance is in 
     * an error state. An error state means that a job to has to be retried or aborted 
     * for the instance to continue its current lifecycle operation.
     * @return bool
     */
    public function getInError()
    {
        if (!$this->isPropertyAvailable("InError")) {
            return null;
        }
        return $this->getProperty("InError");
    }
    /**
     * Specifies 
     * whether the app instance is in 
     * an error state. An error state means that a job to has to be retried or aborted 
     * for the instance to continue its current lifecycle operation.
     * @var bool
     */
    public function setInError($value)
    {
        $this->setProperty("InError", $value, true);
    }
    /**
     * The start 
     * page URL 
     * of the app instance.
     * @return string
     */
    public function getStartPage()
    {
        if (!$this->isPropertyAvailable("StartPage")) {
            return null;
        }
        return $this->getProperty("StartPage");
    }
    /**
     * The start 
     * page URL 
     * of the app instance.
     * @var string
     */
    public function setStartPage($value)
    {
        $this->setProperty("StartPage", $value, true);
    }
    /**
     * Gets the 
     * package fingerprint.
     * @return string
     */
    public function getPackageFingerprint()
    {
        if (!$this->isPropertyAvailable("PackageFingerprint")) {
            return null;
        }
        return $this->getProperty("PackageFingerprint");
    }
    /**
     * Gets the 
     * package fingerprint.
     * @var string
     */
    public function setPackageFingerprint($value)
    {
        $this->setProperty("PackageFingerprint", $value, true);
    }
    /**
     * Gets the App instance's 
     * Product Id.
     * @return string
     */
    public function getProductId()
    {
        if (!$this->isPropertyAvailable("ProductId")) {
            return null;
        }
        return $this->getProperty("ProductId");
    }
    /**
     * Gets the App instance's 
     * Product Id.
     * @var string
     */
    public function setProductId($value)
    {
        $this->setProperty("ProductId", $value, true);
    }
    /**
     * Specifies 
     * the base URL of the remote 
     * system deployed during the installation of this app instance.
     * @return string
     */
    public function getRemoteAppUrl()
    {
        if (!$this->isPropertyAvailable("RemoteAppUrl")) {
            return null;
        }
        return $this->getProperty("RemoteAppUrl");
    }
    /**
     * Specifies 
     * the base URL of the remote 
     * system deployed during the installation of this app instance.
     * @var string
     */
    public function setRemoteAppUrl($value)
    {
        $this->setProperty("RemoteAppUrl", $value, true);
    }
    /**
     * Specifies 
     * the URL 
     * to configure the settings of this app instance.
     * @return string
     */
    public function getSettingsPageUrl()
    {
        if (!$this->isPropertyAvailable("SettingsPageUrl")) {
            return null;
        }
        return $this->getProperty("SettingsPageUrl");
    }
    /**
     * Specifies 
     * the URL 
     * to configure the settings of this app instance.
     * @var string
     */
    public function setSettingsPageUrl($value)
    {
        $this->setProperty("SettingsPageUrl", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the site collection that 
     * contains the site (2) where this app 
     * instance is installed.
     * @return string
     */
    public function getSiteId()
    {
        if (!$this->isPropertyAvailable("SiteId")) {
            return null;
        }
        return $this->getProperty("SiteId");
    }
    /**
     * Specifies 
     * the identifier of the site collection that 
     * contains the site (2) where this app 
     * instance is installed.
     * @var string
     */
    public function setSiteId($value)
    {
        $this->setProperty("SiteId", $value, true);
    }
    /**
     * The status 
     * of the app instance as 
     * defined in section 3.2.5.238.
     * @return integer
     */
    public function getStatus()
    {
        if (!$this->isPropertyAvailable("Status")) {
            return null;
        }
        return $this->getProperty("Status");
    }
    /**
     * The status 
     * of the app instance as 
     * defined in section 3.2.5.238.
     * @var integer
     */
    public function setStatus($value)
    {
        $this->setProperty("Status", $value, true);
    }
    /**
     * Specifies 
     * the title of the app instance. The 
     * title can change with use, and SHOULD NOT be used as an identifier. Use Id 
     * (section 3.2.5.182.1.1.1) 
     * instead.
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
     * Specifies 
     * the title of the app instance. The 
     * title can change with use, and SHOULD NOT be used as an identifier. Use Id 
     * (section 3.2.5.182.1.1.1) 
     * instead.
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the site (2) where this app 
     * instance is installed.
     * @return string
     */
    public function getWebId()
    {
        if (!$this->isPropertyAvailable("WebId")) {
            return null;
        }
        return $this->getProperty("WebId");
    }
    /**
     * Specifies 
     * the identifier of the site (2) where this app 
     * instance is installed.
     * @var string
     */
    public function setWebId($value)
    {
        $this->setProperty("WebId", $value, true);
    }
}