<?php

/**
 * Generated 2019-11-17T16:35:02+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * metadata about a site (2).<197>
 */
class WebInformation extends BaseEntity
{
    /**
     * @return string
     */
    public function getCreated()
    {
        if (!$this->isPropertyAvailable("Created")) {
            return null;
        }
        return $this->getProperty("Created");
    }
    /**
     * @var string
     */
    public function setCreated($value)
    {
        $this->setProperty("Created", $value, true);
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
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
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
    public function getLastItemModifiedDate()
    {
        if (!$this->isPropertyAvailable("LastItemModifiedDate")) {
            return null;
        }
        return $this->getProperty("LastItemModifiedDate");
    }
    /**
     * @var string
     */
    public function setLastItemModifiedDate($value)
    {
        $this->setProperty("LastItemModifiedDate", $value, true);
    }
    /**
     * @return string
     */
    public function getLastItemUserModifiedDate()
    {
        if (!$this->isPropertyAvailable("LastItemUserModifiedDate")) {
            return null;
        }
        return $this->getProperty("LastItemUserModifiedDate");
    }
    /**
     * @var string
     */
    public function setLastItemUserModifiedDate($value)
    {
        $this->setProperty("LastItemUserModifiedDate", $value, true);
    }
    /**
     * @return string
     */
    public function getServerRelativeUrl()
    {
        if (!$this->isPropertyAvailable("ServerRelativeUrl")) {
            return null;
        }
        return $this->getProperty("ServerRelativeUrl");
    }
    /**
     * @var string
     */
    public function setServerRelativeUrl($value)
    {
        $this->setProperty("ServerRelativeUrl", $value, true);
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
    public function getWebTemplate()
    {
        if (!$this->isPropertyAvailable("WebTemplate")) {
            return null;
        }
        return $this->getProperty("WebTemplate");
    }
    /**
     * @var string
     */
    public function setWebTemplate($value)
    {
        $this->setProperty("WebTemplate", $value, true);
    }
    /**
     * @return integer
     */
    public function getWebTemplateId()
    {
        if (!$this->isPropertyAvailable("WebTemplateId")) {
            return null;
        }
        return $this->getProperty("WebTemplateId");
    }
    /**
     * @var integer
     */
    public function setWebTemplateId($value)
    {
        $this->setProperty("WebTemplateId", $value, true);
    }
}