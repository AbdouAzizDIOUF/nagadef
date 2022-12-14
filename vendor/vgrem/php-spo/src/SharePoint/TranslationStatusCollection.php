<?php

/**
 * Generated 2019-11-17T18:22:48+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;


class TranslationStatusCollection extends ClientObject
{
    /**
     * @return array
     */
    public function getUntranslatedLanguages()
    {
        if (!$this->isPropertyAvailable("UntranslatedLanguages")) {
            return null;
        }
        return $this->getProperty("UntranslatedLanguages");
    }
    /**
     * @var array
     */
    public function setUntranslatedLanguages($value)
    {
        $this->setProperty("UntranslatedLanguages", $value, true);
    }
    /**
     * @return TranslationStatusCollection
     */
    public function getItems()
    {
        if (!$this->isPropertyAvailable("Items")) {
            return null;
        }
        return $this->getProperty("Items");
    }
    /**
     * @var TranslationStatusCollection
     */
    public function setItems($value)
    {
        $this->setProperty("Items", $value, true);
    }
}