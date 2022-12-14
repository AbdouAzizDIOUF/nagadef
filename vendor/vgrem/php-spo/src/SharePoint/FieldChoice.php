<?php

/**
 * Generated 2019-11-16T20:01:10+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Represents 
 * a choice field (2). To set 
 * properties on this class, call the Update method (section 3.2.5.40.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldChoice extends Field
{
    /**
     * Specifies 
     * whether to display the choice field (2) as radio 
     * buttons or as a drop-down list.
     * @return integer
     */
    public function getEditFormat()
    {
        if (!$this->isPropertyAvailable("EditFormat")) {
            return null;
        }
        return $this->getProperty("EditFormat");
    }
    /**
     * Specifies 
     * whether to display the choice field (2) as radio 
     * buttons or as a drop-down list.
     * @var integer
     */
    public function setEditFormat($value)
    {
        $this->setProperty("EditFormat", $value, true);
    }
}