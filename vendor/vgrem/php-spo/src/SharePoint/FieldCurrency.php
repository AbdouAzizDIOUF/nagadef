<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Specifies 
 * a field 
 * (2) that contains currency values. To set properties, call the 
 * Update method (section 3.2.5.43.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldCurrency extends ClientObject
{
    /**
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
     * @var integer
     */
    public function setCurrencyLocaleId($value)
    {
        $this->setProperty("CurrencyLocaleId", $value, true);
    }
}