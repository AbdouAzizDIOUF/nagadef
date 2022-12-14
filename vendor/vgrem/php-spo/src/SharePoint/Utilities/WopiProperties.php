<?php

/**
 * Generated 2019-11-17T18:33:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Utilities;

use Office365\Runtime\ClientObject;

/**
 * Do not 
 * use. For internal use only.
 */
class WopiProperties extends ClientObject
{
    /**
     * @return string
     */
    public function getAccessToken()
    {
        if (!$this->isPropertyAvailable("AccessToken")) {
            return null;
        }
        return $this->getProperty("AccessToken");
    }
    /**
     * @var string
     */
    public function setAccessToken($value)
    {
        $this->setProperty("AccessToken", $value, true);
    }
    /**
     * @return integer
     */
    public function getAccessTokenTtl()
    {
        if (!$this->isPropertyAvailable("AccessTokenTtl")) {
            return null;
        }
        return $this->getProperty("AccessTokenTtl");
    }
    /**
     * @var integer
     */
    public function setAccessTokenTtl($value)
    {
        $this->setProperty("AccessTokenTtl", $value, true);
    }
    /**
     * @return string
     */
    public function getAppIconUrl()
    {
        if (!$this->isPropertyAvailable("AppIconUrl")) {
            return null;
        }
        return $this->getProperty("AppIconUrl");
    }
    /**
     * @var string
     */
    public function setAppIconUrl($value)
    {
        $this->setProperty("AppIconUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getErrorMessageToDisplay()
    {
        if (!$this->isPropertyAvailable("ErrorMessageToDisplay")) {
            return null;
        }
        return $this->getProperty("ErrorMessageToDisplay");
    }
    /**
     * @var string
     */
    public function setErrorMessageToDisplay($value)
    {
        $this->setProperty("ErrorMessageToDisplay", $value, true);
    }
    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        if (!$this->isPropertyAvailable("RedirectUrl")) {
            return null;
        }
        return $this->getProperty("RedirectUrl");
    }
    /**
     * @var string
     */
    public function setRedirectUrl($value)
    {
        $this->setProperty("RedirectUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getWebApplicationUrl()
    {
        if (!$this->isPropertyAvailable("WebApplicationUrl")) {
            return null;
        }
        return $this->getProperty("WebApplicationUrl");
    }
    /**
     * @var string
     */
    public function setWebApplicationUrl($value)
    {
        $this->setProperty("WebApplicationUrl", $value, true);
    }
}