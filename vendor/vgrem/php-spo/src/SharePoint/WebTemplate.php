<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;


/**
 * Specifies 
 * a site 
 * definition or a site template that 
 * is used to instantiate a site (2). 
 */
class WebTemplate extends BaseEntity
{
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
    public function getDisplayCategory()
    {
        if (!$this->isPropertyAvailable("DisplayCategory")) {
            return null;
        }
        return $this->getProperty("DisplayCategory");
    }
    /**
     * @var string
     */
    public function setDisplayCategory($value)
    {
        $this->setProperty("DisplayCategory", $value, true);
    }
    /**
     * @return integer
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * @var integer
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
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
     * @var string
     */
    public function setImageUrl($value)
    {
        $this->setProperty("ImageUrl", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsHidden()
    {
        if (!$this->isPropertyAvailable("IsHidden")) {
            return null;
        }
        return $this->getProperty("IsHidden");
    }
    /**
     * @var bool
     */
    public function setIsHidden($value)
    {
        $this->setProperty("IsHidden", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsRootWebOnly()
    {
        if (!$this->isPropertyAvailable("IsRootWebOnly")) {
            return null;
        }
        return $this->getProperty("IsRootWebOnly");
    }
    /**
     * @var bool
     */
    public function setIsRootWebOnly($value)
    {
        $this->setProperty("IsRootWebOnly", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsSubWebOnly()
    {
        if (!$this->isPropertyAvailable("IsSubWebOnly")) {
            return null;
        }
        return $this->getProperty("IsSubWebOnly");
    }
    /**
     * @var bool
     */
    public function setIsSubWebOnly($value)
    {
        $this->setProperty("IsSubWebOnly", $value, true);
    }
    /**
     * @return integer
     */
    public function getLcid()
    {
        if (!$this->isPropertyAvailable("Lcid")) {
            return null;
        }
        return $this->getProperty("Lcid");
    }
    /**
     * @var integer
     */
    public function setLcid($value)
    {
        $this->setProperty("Lcid", $value, true);
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getProperty("Title");
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }


    public function setProperty($name, $value, $persistChanges = true)
    {
        return parent::setProperty($name, $value, $persistChanges);
    }
}