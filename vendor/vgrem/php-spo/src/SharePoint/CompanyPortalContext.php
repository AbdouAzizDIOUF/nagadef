<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;


class CompanyPortalContext extends ClientObject
{
    /**
     * @return integer
     */
    public function getFooterEmphasis()
    {
        if (!$this->isPropertyAvailable("FooterEmphasis")) {
            return null;
        }
        return $this->getProperty("FooterEmphasis");
    }
    /**
     * @var integer
     */
    public function setFooterEmphasis($value)
    {
        $this->setProperty("FooterEmphasis", $value, true);
    }
    /**
     * @return integer
     */
    public function getFooterLayout()
    {
        if (!$this->isPropertyAvailable("FooterLayout")) {
            return null;
        }
        return $this->getProperty("FooterLayout");
    }
    /**
     * @var integer
     */
    public function setFooterLayout($value)
    {
        $this->setProperty("FooterLayout", $value, true);
    }
    /**
     * @return string
     */
    public function getFooterNavigation()
    {
        if (!$this->isPropertyAvailable("FooterNavigation")) {
            return null;
        }
        return $this->getProperty("FooterNavigation");
    }
    /**
     * @var string
     */
    public function setFooterNavigation($value)
    {
        $this->setProperty("FooterNavigation", $value, true);
    }
    /**
     * @return integer
     */
    public function getHeaderEmphasis()
    {
        if (!$this->isPropertyAvailable("HeaderEmphasis")) {
            return null;
        }
        return $this->getProperty("HeaderEmphasis");
    }
    /**
     * @var integer
     */
    public function setHeaderEmphasis($value)
    {
        $this->setProperty("HeaderEmphasis", $value, true);
    }
    /**
     * @return integer
     */
    public function getHeaderLayout()
    {
        if (!$this->isPropertyAvailable("HeaderLayout")) {
            return null;
        }
        return $this->getProperty("HeaderLayout");
    }
    /**
     * @var integer
     */
    public function setHeaderLayout($value)
    {
        $this->setProperty("HeaderLayout", $value, true);
    }
    /**
     * @return string
     */
    public function getHubSiteData()
    {
        if (!$this->isPropertyAvailable("HubSiteData")) {
            return null;
        }
        return $this->getProperty("HubSiteData");
    }
    /**
     * @var string
     */
    public function setHubSiteData($value)
    {
        $this->setProperty("HubSiteData", $value, true);
    }
    /**
     * @return string
     */
    public function getHubSiteId()
    {
        if (!$this->isPropertyAvailable("HubSiteId")) {
            return null;
        }
        return $this->getProperty("HubSiteId");
    }
    /**
     * @var string
     */
    public function setHubSiteId($value)
    {
        $this->setProperty("HubSiteId", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsAudienceTargeted()
    {
        if (!$this->isPropertyAvailable("IsAudienceTargeted")) {
            return null;
        }
        return $this->getProperty("IsAudienceTargeted");
    }
    /**
     * @var bool
     */
    public function setIsAudienceTargeted($value)
    {
        $this->setProperty("IsAudienceTargeted", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsFooterEnabled()
    {
        if (!$this->isPropertyAvailable("IsFooterEnabled")) {
            return null;
        }
        return $this->getProperty("IsFooterEnabled");
    }
    /**
     * @var bool
     */
    public function setIsFooterEnabled($value)
    {
        $this->setProperty("IsFooterEnabled", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsHubSite()
    {
        if (!$this->isPropertyAvailable("IsHubSite")) {
            return null;
        }
        return $this->getProperty("IsHubSite");
    }
    /**
     * @var bool
     */
    public function setIsHubSite($value)
    {
        $this->setProperty("IsHubSite", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsMegaMenuEnabled()
    {
        if (!$this->isPropertyAvailable("IsMegaMenuEnabled")) {
            return null;
        }
        return $this->getProperty("IsMegaMenuEnabled");
    }
    /**
     * @var bool
     */
    public function setIsMegaMenuEnabled($value)
    {
        $this->setProperty("IsMegaMenuEnabled", $value, true);
    }
    /**
     * @return integer
     */
    public function getLanguage()
    {
        if (!$this->isPropertyAvailable("Language")) {
            return null;
        }
        return $this->getProperty("Language");
    }
    /**
     * @var integer
     */
    public function setLanguage($value)
    {
        $this->setProperty("Language", $value, true);
    }
    /**
     * @return string
     */
    public function getNavigationInfo()
    {
        if (!$this->isPropertyAvailable("NavigationInfo")) {
            return null;
        }
        return $this->getProperty("NavigationInfo");
    }
    /**
     * @var string
     */
    public function setNavigationInfo($value)
    {
        $this->setProperty("NavigationInfo", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteAcronym()
    {
        if (!$this->isPropertyAvailable("SiteAcronym")) {
            return null;
        }
        return $this->getProperty("SiteAcronym");
    }
    /**
     * @var string
     */
    public function setSiteAcronym($value)
    {
        $this->setProperty("SiteAcronym", $value, true);
    }
    /**
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
     * @var string
     */
    public function setSiteId($value)
    {
        $this->setProperty("SiteId", $value, true);
    }
    /**
     * @return string
     */
    public function getsiteUrl()
    {
        if (!$this->isPropertyAvailable("siteUrl")) {
            return null;
        }
        return $this->getProperty("siteUrl");
    }
    /**
     * @var string
     */
    public function setsiteUrl($value)
    {
        $this->setProperty("siteUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getThemedCssFolderUrl()
    {
        if (!$this->isPropertyAvailable("ThemedCssFolderUrl")) {
            return null;
        }
        return $this->getProperty("ThemedCssFolderUrl");
    }
    /**
     * @var string
     */
    public function setThemedCssFolderUrl($value)
    {
        $this->setProperty("ThemedCssFolderUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getThemeInfo()
    {
        if (!$this->isPropertyAvailable("ThemeInfo")) {
            return null;
        }
        return $this->getProperty("ThemeInfo");
    }
    /**
     * @var string
     */
    public function setThemeInfo($value)
    {
        $this->setProperty("ThemeInfo", $value, true);
    }
    /**
     * @return string
     */
    public function getWebAbsoluteUrl()
    {
        if (!$this->isPropertyAvailable("WebAbsoluteUrl")) {
            return null;
        }
        return $this->getProperty("WebAbsoluteUrl");
    }
    /**
     * @var string
     */
    public function setWebAbsoluteUrl($value)
    {
        $this->setProperty("WebAbsoluteUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getWebLogoBackgroundColor()
    {
        if (!$this->isPropertyAvailable("WebLogoBackgroundColor")) {
            return null;
        }
        return $this->getProperty("WebLogoBackgroundColor");
    }
    /**
     * @var string
     */
    public function setWebLogoBackgroundColor($value)
    {
        $this->setProperty("WebLogoBackgroundColor", $value, true);
    }
    /**
     * @return string
     */
    public function getWebLogoUrl()
    {
        if (!$this->isPropertyAvailable("WebLogoUrl")) {
            return null;
        }
        return $this->getProperty("WebLogoUrl");
    }
    /**
     * @var string
     */
    public function setWebLogoUrl($value)
    {
        $this->setProperty("WebLogoUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getWebServerRelativeUrl()
    {
        if (!$this->isPropertyAvailable("WebServerRelativeUrl")) {
            return null;
        }
        return $this->getProperty("WebServerRelativeUrl");
    }
    /**
     * @var string
     */
    public function setWebServerRelativeUrl($value)
    {
        $this->setProperty("WebServerRelativeUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getWebTitle()
    {
        if (!$this->isPropertyAvailable("WebTitle")) {
            return null;
        }
        return $this->getProperty("WebTitle");
    }
    /**
     * @var string
     */
    public function setWebTitle($value)
    {
        $this->setProperty("WebTitle", $value, true);
    }
}