<?php

/**
 * Generated 2020-08-19T18:22:34+00:00 16.0.20405.12008
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a field 
 * (2) that contains number values. To set properties, call the Update 
 * method (section 3.2.5.53.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldNumber extends Field
{
    /**
     * Gets the 
     * number of decimal places to be used when displaying the field.
     * @return integer
     */
    public function getDisplayFormat()
    {
        if (!$this->isPropertyAvailable("DisplayFormat")) {
            return null;
        }
        return $this->getProperty("DisplayFormat");
    }
    /**
     * Gets the 
     * number of decimal places to be used when displaying the field.
     * @var integer
     */
    public function setDisplayFormat($value)
    {
        $this->setProperty("DisplayFormat", $value, true);
    }
    /**
     * Specifies 
     * the maximum allowed value for the field (2).
     * @return double
     */
    public function getMaximumValue()
    {
        if (!$this->isPropertyAvailable("MaximumValue")) {
            return null;
        }
        return $this->getProperty("MaximumValue");
    }
    /**
     * Specifies 
     * the maximum allowed value for the field (2).
     * @var double
     */
    public function setMaximumValue($value)
    {
        $this->setProperty("MaximumValue", $value, true);
    }
    /**
     * Specifies 
     * the minimum allowed value for the field (2).
     * @return double
     */
    public function getMinimumValue()
    {
        if (!$this->isPropertyAvailable("MinimumValue")) {
            return null;
        }
        return $this->getProperty("MinimumValue");
    }
    /**
     * Specifies 
     * the minimum allowed value for the field (2).
     * @var double
     */
    public function setMinimumValue($value)
    {
        $this->setProperty("MinimumValue", $value, true);
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether to render the field as a 
     * percentage.
     * @return bool
     */
    public function getShowAsPercentage()
    {
        if (!$this->isPropertyAvailable("ShowAsPercentage")) {
            return null;
        }
        return $this->getProperty("ShowAsPercentage");
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether to render the field as a 
     * percentage.
     * @var bool
     */
    public function setShowAsPercentage($value)
    {
        $this->setProperty("ShowAsPercentage", $value, true);
    }
    /**
     * @return bool
     */
    public function getCommaSeparator()
    {
        if (!$this->isPropertyAvailable("CommaSeparator")) {
            return null;
        }
        return $this->getProperty("CommaSeparator");
    }
    /**
     * @var bool
     */
    public function setCommaSeparator($value)
    {
        $this->setProperty("CommaSeparator", $value, true);
    }
    /**
     * @return string
     */
    public function getCustomUnitName()
    {
        if (!$this->isPropertyAvailable("CustomUnitName")) {
            return null;
        }
        return $this->getProperty("CustomUnitName");
    }
    /**
     * @var string
     */
    public function setCustomUnitName($value)
    {
        $this->setProperty("CustomUnitName", $value, true);
    }
    /**
     * @return bool
     */
    public function getCustomUnitOnRight()
    {
        if (!$this->isPropertyAvailable("CustomUnitOnRight")) {
            return null;
        }
        return $this->getProperty("CustomUnitOnRight");
    }
    /**
     * @var bool
     */
    public function setCustomUnitOnRight($value)
    {
        $this->setProperty("CustomUnitOnRight", $value, true);
    }
    /**
     * @return string
     */
    public function getUnit()
    {
        if (!$this->isPropertyAvailable("Unit")) {
            return null;
        }
        return $this->getProperty("Unit");
    }
    /**
     * @var string
     */
    public function setUnit($value)
    {
        $this->setProperty("Unit", $value, true);
    }
}