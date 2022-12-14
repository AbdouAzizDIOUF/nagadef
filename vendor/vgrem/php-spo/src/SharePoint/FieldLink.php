<?php

/**
 * Generated 2019-11-17T15:06:51+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a reference 
 * to a field 
 * (2) or field definition for 
 * a content 
 * type.The DisplayName, ReadOnly and ShowInDisplayForm properties 
 * are not included in the default scalar property set 
 * for this type.
 */
class FieldLink extends BaseEntity
{
    /**
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * @return string
     */
    public function getFieldInternalName()
    {
        if (!$this->isPropertyAvailable("FieldInternalName")) {
            return null;
        }
        return $this->getProperty("FieldInternalName");
    }
    /**
     * @var string
     */
    public function setFieldInternalName($value)
    {
        $this->setProperty("FieldInternalName", $value, true);
    }
    /**
     * @return bool
     */
    public function getHidden()
    {
        if (!$this->isPropertyAvailable("Hidden")) {
            return null;
        }
        return $this->getProperty("Hidden");
    }
    /**
     * @var bool
     */
    public function setHidden($value)
    {
        $this->setProperty("Hidden", $value, true);
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
     * @return bool
     */
    public function getReadOnly()
    {
        if (!$this->isPropertyAvailable("ReadOnly")) {
            return null;
        }
        return $this->getProperty("ReadOnly");
    }
    /**
     * @var bool
     */
    public function setReadOnly($value)
    {
        $this->setProperty("ReadOnly", $value, true);
    }
    /**
     * @return bool
     */
    public function getRequired()
    {
        if (!$this->isPropertyAvailable("Required")) {
            return null;
        }
        return $this->getProperty("Required");
    }
    /**
     * @var bool
     */
    public function setRequired($value)
    {
        $this->setProperty("Required", $value, true);
    }
    /**
     * @return bool
     */
    public function getShowInDisplayForm()
    {
        if (!$this->isPropertyAvailable("ShowInDisplayForm")) {
            return null;
        }
        return $this->getProperty("ShowInDisplayForm");
    }
    /**
     * @var bool
     */
    public function setShowInDisplayForm($value)
    {
        $this->setProperty("ShowInDisplayForm", $value, true);
    }
}