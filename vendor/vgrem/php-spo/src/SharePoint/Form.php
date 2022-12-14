<?php

/**
 * Generated 2020-08-19T18:22:34+00:00 16.0.20405.12008
 */
namespace Office365\SharePoint;

/**
 * Specified 
 * in [MS-WSSTS] 
 * section 2.1.2.15.4.
 */
class Form extends BaseEntity
{
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
     * @return integer
     */
    public function getFormType()
    {
        if (!$this->isPropertyAvailable("FormType")) {
            return null;
        }
        return $this->getProperty("FormType");
    }
    /**
     * @var integer
     */
    public function setFormType($value)
    {
        $this->setProperty("FormType", $value, true);
    }
    /**
     * Gets the 
     * Web site–relative Path of the form.
     * @var SPResourcePath
     */
    public function setResourcePath($value)
    {
        $this->setProperty("ResourcePath", $value, true);
    }
}