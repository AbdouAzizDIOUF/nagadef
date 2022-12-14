<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Specifies 
 * a theme 
 * for a site (2).<200>
 */
class ThemeInfo extends ClientObject
{
    /**
     * @return string
     */
    public function getAccessibleDescription()
    {
        if (!$this->isPropertyAvailable("AccessibleDescription")) {
            return null;
        }
        return $this->getProperty("AccessibleDescription");
    }
    /**
     * @var string
     */
    public function setAccessibleDescription($value)
    {
        $this->setProperty("AccessibleDescription", $value, true);
    }
    /**
     * @return string
     */
    public function getThemeBackgroundImageUri()
    {
        return $this->getProperty("ThemeBackgroundImageUri");
    }
    /**
     * @var string
     */
    public function setThemeBackgroundImageUri($value)
    {
        $this->setProperty("ThemeBackgroundImageUri", $value, true);
    }
}