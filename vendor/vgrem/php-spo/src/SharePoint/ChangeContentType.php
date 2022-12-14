<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Specifies 
 * a change on a content type.The RelativeTime property is not included in the default 
 * scalar property set for this type.
 */
class ChangeContentType extends ClientObject
{
    /**
     * @return ContentTypeId
     */
    public function getContentTypeId()
    {
        if (!$this->isPropertyAvailable("ContentTypeId")) {
            return null;
        }
        return $this->getProperty("ContentTypeId");
    }
    /**
     * @var ContentTypeId
     */
    public function setContentTypeId($value)
    {
        $this->setProperty("ContentTypeId", $value, true);
    }
    /**
     * @return string
     */
    public function getWebId()
    {
        if (!$this->isPropertyAvailable("WebId")) {
            return null;
        }
        return $this->getProperty("WebId");
    }
    /**
     * @var string
     */
    public function setWebId($value)
    {
        $this->setProperty("WebId", $value, true);
    }
}