<?php

/**
 * Generated 2019-11-16T20:01:10+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a computed 
 * field. To set the properties of this class, call the Update 
 * method (section 3.2.5.42.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldComputed extends Field
{
    /**
     * Specifies 
     * whether a lookup field can 
     * reference the field (2).
     * @return bool
     */
    public function getEnableLookup()
    {
        if (!$this->isPropertyAvailable("EnableLookup")) {
            return null;
        }
        return $this->getProperty("EnableLookup");
    }
    /**
     * Specifies 
     * whether a lookup field can 
     * reference the field (2).
     * @var bool
     */
    public function setEnableLookup($value)
    {
        $this->setProperty("EnableLookup", $value, true);
    }
}