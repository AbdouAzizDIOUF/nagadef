<?php

/**
 * Generated 2019-11-17T18:31:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;


class SubtitleFile extends ClientObject
{
    /**
     * @return string
     */
    public function getLanguage()
    {
        if (!$this->isPropertyAvailable("Language")) {
            return null;
        }
        return $this->getProperty("Language");
    }
    /**
     * @var string
     */
    public function setLanguage($value)
    {
        $this->setProperty("Language", $value, true);
    }
    /**
     * @return string
     */
    public function getNativeLanguageName()
    {
        if (!$this->isPropertyAvailable("NativeLanguageName")) {
            return null;
        }
        return $this->getProperty("NativeLanguageName");
    }
    /**
     * @var string
     */
    public function setNativeLanguageName($value)
    {
        $this->setProperty("NativeLanguageName", $value, true);
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        if (!$this->isPropertyAvailable("Url")) {
            return null;
        }
        return $this->getProperty("Url");
    }
    /**
     * @var string
     */
    public function setUrl($value)
    {
        $this->setProperty("Url", $value, true);
    }
}