<?php

/**
 * Generated 2019-11-16T20:01:10+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a field 
 * (2) that contains a single line of text. To set properties, call the 
 * Update method (section 3.2.5.57.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldText extends Field
{
    /**
     * Specifies 
     * the maximum number of characters allowed in the value of the field (2).Its value 
     * MUST be equal to or greater than 1. Its value MUST be equal to or less than 
     * 255. 
     * @return integer
     */
    public function getMaxLength()
    {
        if (!$this->isPropertyAvailable("MaxLength")) {
            return null;
        }
        return $this->getProperty("MaxLength");
    }
    /**
     * Specifies 
     * the maximum number of characters allowed in the value of the field (2).Its value 
     * MUST be equal to or greater than 1. Its value MUST be equal to or less than 
     * 255. 
     * @var integer
     */
    public function setMaxLength($value)
    {
        $this->setProperty("MaxLength", $value, true);
    }
}