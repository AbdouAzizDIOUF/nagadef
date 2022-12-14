<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;


use Office365\Runtime\ClientObject;


class PointPublishingMagazineProps extends ClientObject
{
    /**
     * @return string
     */
    public function getBannerColor()
    {
        if (!$this->isPropertyAvailable("BannerColor")) {
            return null;
        }
        return $this->getProperty("BannerColor");
    }
    /**
     * @var string
     */
    public function setBannerColor($value)
    {
        $this->setProperty("BannerColor", $value, true);
    }
    /**
     * @return string
     */
    public function getBannerImageUrl()
    {
        if (!$this->isPropertyAvailable("BannerImageUrl")) {
            return null;
        }
        return $this->getProperty("BannerImageUrl");
    }
    /**
     * @var string
     */
    public function setBannerImageUrl($value)
    {
        $this->setProperty("BannerImageUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getBannerPattern()
    {
        if (!$this->isPropertyAvailable("BannerPattern")) {
            return null;
        }
        return $this->getProperty("BannerPattern");
    }
    /**
     * @var string
     */
    public function setBannerPattern($value)
    {
        $this->setProperty("BannerPattern", $value, true);
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
    public function getIsUserContributor()
    {
        if (!$this->isPropertyAvailable("IsUserContributor")) {
            return null;
        }
        return $this->getProperty("IsUserContributor");
    }
    /**
     * @var bool
     */
    public function setIsUserContributor($value)
    {
        $this->setProperty("IsUserContributor", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsUserOwner()
    {
        if (!$this->isPropertyAvailable("IsUserOwner")) {
            return null;
        }
        return $this->getProperty("IsUserOwner");
    }
    /**
     * @var bool
     */
    public function setIsUserOwner($value)
    {
        $this->setProperty("IsUserOwner", $value, true);
    }
    /**
     * @return integer
     */
    public function getMagazineType()
    {
        if (!$this->isPropertyAvailable("MagazineType")) {
            return null;
        }
        return $this->getProperty("MagazineType");
    }
    /**
     * @var integer
     */
    public function setMagazineType($value)
    {
        $this->setProperty("MagazineType", $value, true);
    }
    /**
     * @return string
     */
    public function getPublishedDate()
    {
        if (!$this->isPropertyAvailable("PublishedDate")) {
            return null;
        }
        return $this->getProperty("PublishedDate");
    }
    /**
     * @var string
     */
    public function setPublishedDate($value)
    {
        $this->setProperty("PublishedDate", $value, true);
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
}
