<?php

/**
 * Generated 2019-11-16T20:01:10+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies a 
 * field 
 * (2) that contains a URI. To set 
 * properties, call the Update method (section 3.2.5.59.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldUrl extends Field
{
    /**
     * Specifies 
     * the display format for the value in the field (2).
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
     * Specifies 
     * the display format for the value in the field (2).
     * @var integer
     */
    public function setDisplayFormat($value)
    {
        $this->setProperty("DisplayFormat", $value, true);
    }
}