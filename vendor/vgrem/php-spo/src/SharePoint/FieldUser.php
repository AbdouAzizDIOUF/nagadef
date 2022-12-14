<?php

/**
 * Generated 2020-11-13T16:48:11+00:00 16.0.20628.12006
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a field 
 * (2) that contains a user. To set properties, call the Update 
 * method (section 3.2.5.61.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldUser extends Field
{
    /**
     * Specifies 
     * whether to display the name of the user in a survey list.
     * @return bool
     */
    public function getAllowDisplay()
    {
        if (!$this->isPropertyAvailable("AllowDisplay")) {
            return null;
        }
        return $this->getProperty("AllowDisplay");
    }
    /**
     * Specifies 
     * whether to display the name of the user in a survey list.
     * @var bool
     */
    public function setAllowDisplay($value)
    {
        $this->setProperty("AllowDisplay", $value, true);
    }
    /**
     * Specifies 
     * whether presence is enabled 
     * on the field (2).
     * @return bool
     */
    public function getPresence()
    {
        if (!$this->isPropertyAvailable("Presence")) {
            return null;
        }
        return $this->getProperty("Presence");
    }
    /**
     * Specifies 
     * whether presence is enabled 
     * on the field (2).
     * @var bool
     */
    public function setPresence($value)
    {
        $this->setProperty("Presence", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the group whose members 
     * can be selected as values of the field (2).
     * @return integer
     */
    public function getSelectionGroup()
    {
        if (!$this->isPropertyAvailable("SelectionGroup")) {
            return null;
        }
        return $this->getProperty("SelectionGroup");
    }
    /**
     * Specifies 
     * the identifier of the group whose members 
     * can be selected as values of the field (2).
     * @var integer
     */
    public function setSelectionGroup($value)
    {
        $this->setProperty("SelectionGroup", $value, true);
    }
    /**
     * Specifies 
     * whether users and groups or only users 
     * can be selected.
     * @return integer
     */
    public function getSelectionMode()
    {
        if (!$this->isPropertyAvailable("SelectionMode")) {
            return null;
        }
        return $this->getProperty("SelectionMode");
    }
    /**
     * Specifies 
     * whether users and groups or only users 
     * can be selected.
     * @var integer
     */
    public function setSelectionMode($value)
    {
        $this->setProperty("SelectionMode", $value, true);
    }
    /**
     * @return string
     */
    public function getUserDisplayOptions()
    {
        if (!$this->isPropertyAvailable("UserDisplayOptions")) {
            return null;
        }
        return $this->getProperty("UserDisplayOptions");
    }
    /**
     * @var string
     */
    public function setUserDisplayOptions($value)
    {
        $this->setProperty("UserDisplayOptions", $value, true);
    }
}