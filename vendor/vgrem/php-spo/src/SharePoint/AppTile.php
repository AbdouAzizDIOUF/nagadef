<?php

/**
 * Generated 2019-11-17T16:07:15+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Represents 
 * information about an app tile.
 */
class AppTile extends BaseEntity
{
    /**
     * @return string
     */
    public function getAppId()
    {
        if (!$this->isPropertyAvailable("AppId")) {
            return null;
        }
        return $this->getProperty("AppId");
    }
    /**
     * @var string
     */
    public function setAppId($value)
    {
        $this->setProperty("AppId", $value, true);
    }
    /**
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
     * @var string
     */
    public function setAppPrincipalId($value)
    {
        $this->setProperty("AppPrincipalId", $value, true);
    }
    /**
     * @return integer
     */
    public function getAppSource()
    {
        if (!$this->isPropertyAvailable("AppSource")) {
            return null;
        }
        return $this->getProperty("AppSource");
    }
    /**
     * @var integer
     */
    public function setAppSource($value)
    {
        $this->setProperty("AppSource", $value, true);
    }
    /**
     * @return integer
     */
    public function getAppStatus()
    {
        if (!$this->isPropertyAvailable("AppStatus")) {
            return null;
        }
        return $this->getProperty("AppStatus");
    }
    /**
     * @var integer
     */
    public function setAppStatus($value)
    {
        $this->setProperty("AppStatus", $value, true);
    }
    /**
     * @return integer
     */
    public function getAppType()
    {
        if (!$this->isPropertyAvailable("AppType")) {
            return null;
        }
        return $this->getProperty("AppType");
    }
    /**
     * @var integer
     */
    public function setAppType($value)
    {
        $this->setProperty("AppType", $value, true);
    }
    /**
     * @return string
     */
    public function getAssetId()
    {
        if (!$this->isPropertyAvailable("AssetId")) {
            return null;
        }
        return $this->getProperty("AssetId");
    }
    /**
     * @var string
     */
    public function setAssetId($value)
    {
        $this->setProperty("AssetId", $value, true);
    }
    /**
     * @return integer
     */
    public function getBaseTemplate()
    {
        if (!$this->isPropertyAvailable("BaseTemplate")) {
            return null;
        }
        return $this->getProperty("BaseTemplate");
    }
    /**
     * @var integer
     */
    public function setBaseTemplate($value)
    {
        $this->setProperty("BaseTemplate", $value, true);
    }
    /**
     * @return integer
     */
    public function getChildCount()
    {
        if (!$this->isPropertyAvailable("ChildCount")) {
            return null;
        }
        return $this->getProperty("ChildCount");
    }
    /**
     * @var integer
     */
    public function setChildCount($value)
    {
        $this->setProperty("ChildCount", $value, true);
    }
    /**
     * @return string
     */
    public function getContentMarket()
    {
        if (!$this->isPropertyAvailable("ContentMarket")) {
            return null;
        }
        return $this->getProperty("ContentMarket");
    }
    /**
     * @var string
     */
    public function setContentMarket($value)
    {
        $this->setProperty("ContentMarket", $value, true);
    }
    /**
     * @return string
     */
    public function getCustomSettingsUrl()
    {
        if (!$this->isPropertyAvailable("CustomSettingsUrl")) {
            return null;
        }
        return $this->getProperty("CustomSettingsUrl");
    }
    /**
     * @var string
     */
    public function setCustomSettingsUrl($value)
    {
        $this->setProperty("CustomSettingsUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsCorporateCatalogSite()
    {
        if (!$this->isPropertyAvailable("IsCorporateCatalogSite")) {
            return null;
        }
        return $this->getProperty("IsCorporateCatalogSite");
    }
    /**
     * @var bool
     */
    public function setIsCorporateCatalogSite($value)
    {
        $this->setProperty("IsCorporateCatalogSite", $value, true);
    }
    /**
     * @return string
     */
    public function getLastModified()
    {
        if (!$this->isPropertyAvailable("LastModified")) {
            return null;
        }
        return $this->getProperty("LastModified");
    }
    /**
     * @var string
     */
    public function setLastModified($value)
    {
        $this->setProperty("LastModified", $value, true);
    }
    /**
     * @return string
     */
    public function getLastModifiedDate()
    {
        if (!$this->isPropertyAvailable("LastModifiedDate")) {
            return null;
        }
        return $this->getProperty("LastModifiedDate");
    }
    /**
     * @var string
     */
    public function setLastModifiedDate($value)
    {
        $this->setProperty("LastModifiedDate", $value, true);
    }
    /**
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
     * @var string
     */
    public function setProductId($value)
    {
        $this->setProperty("ProductId", $value, true);
    }
    /**
     * @return string
     */
    public function getTarget()
    {
        if (!$this->isPropertyAvailable("Target")) {
            return null;
        }
        return $this->getProperty("Target");
    }
    /**
     * @var string
     */
    public function setTarget($value)
    {
        $this->setProperty("Target", $value, true);
    }
    /**
     * @return string
     */
    public function getThumbnail()
    {
        if (!$this->isPropertyAvailable("Thumbnail")) {
            return null;
        }
        return $this->getProperty("Thumbnail");
    }
    /**
     * @var string
     */
    public function setThumbnail($value)
    {
        $this->setProperty("Thumbnail", $value, true);
    }
    /**
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
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * @return string
     */
    public function getVersion()
    {
        if (!$this->isPropertyAvailable("Version")) {
            return null;
        }
        return $this->getProperty("Version");
    }
    /**
     * @var string
     */
    public function setVersion($value)
    {
        $this->setProperty("Version", $value, true);
    }
}