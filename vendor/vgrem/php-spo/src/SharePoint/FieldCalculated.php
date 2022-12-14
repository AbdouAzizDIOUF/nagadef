<?php

/**
 * Generated 2019-11-16T19:51:42+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a calculated 
 * field in a list. To set properties, call the Update method 
 * (section 3.2.5.38.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldCalculated extends Field
{
    /**
     * Gets or 
     * sets the locale ID that is used for currency on the Web site.
     * @return integer
     */
    public function getCurrencyLocaleId()
    {
        if (!$this->isPropertyAvailable("CurrencyLocaleId")) {
            return null;
        }
        return $this->getProperty("CurrencyLocaleId");
    }
    /**
     * Gets or 
     * sets the locale ID that is used for currency on the Web site.
     * @var integer
     */
    public function setCurrencyLocaleId($value)
    {
        $this->setProperty("CurrencyLocaleId", $value, true);
    }
    /**
     * Specifies 
     * the date and time format that is used in the field (2).
     * @return integer
     */
    public function getDateFormat()
    {
        if (!$this->isPropertyAvailable("DateFormat")) {
            return null;
        }
        return $this->getProperty("DateFormat");
    }
    /**
     * Specifies 
     * the date and time format that is used in the field (2).
     * @var integer
     */
    public function setDateFormat($value)
    {
        $this->setProperty("DateFormat", $value, true);
    }
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
     * the formula for the field (2).It MUST 
     * NOT be empty. 
     * @return string
     */
    public function getFormula()
    {
        if (!$this->isPropertyAvailable("Formula")) {
            return null;
        }
        return $this->getProperty("Formula");
    }
    /**
     * Specifies 
     * the formula for the field (2).It MUST 
     * NOT be empty. 
     * @var string
     */
    public function setFormula($value)
    {
        $this->setProperty("Formula", $value, true);
    }
    /**
     * Specifies 
     * the output format for the field (2). It MUST be 
     * one of the following values: Text, Number, Integer, Currency, Boolean, or 
     * DateTime.
     * @return integer
     */
    public function getOutputType()
    {
        if (!$this->isPropertyAvailable("OutputType")) {
            return null;
        }
        return $this->getProperty("OutputType");
    }
    /**
     * Specifies 
     * the output format for the field (2). It MUST be 
     * one of the following values: Text, Number, Integer, Currency, Boolean, or 
     * DateTime.
     * @var integer
     */
    public function setOutputType($value)
    {
        $this->setProperty("OutputType", $value, true);
    }
    /**
     * Gets or 
     * sets a Boolean value that determines whether values in the field are displayed 
     * as percentages.
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
     * sets a Boolean value that determines whether values in the field are displayed 
     * as percentages.
     * @var bool
     */
    public function setShowAsPercentage($value)
    {
        $this->setProperty("ShowAsPercentage", $value, true);
    }
}