<?php

/**
 * Generated 2019-11-17T18:33:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Utilities;

use Office365\Runtime\ClientObject;

/**
 * The status 
 * of a chunk session upload.
 */
class UploadStatus extends ClientObject
{
    /**
     * @return string
     */
    public function getExpectedContentRange()
    {
        if (!$this->isPropertyAvailable("ExpectedContentRange")) {
            return null;
        }
        return $this->getProperty("ExpectedContentRange");
    }
    /**
     * @var string
     */
    public function setExpectedContentRange($value)
    {
        $this->setProperty("ExpectedContentRange", $value, true);
    }
    /**
     * @return string
     */
    public function getExpirationDateTime()
    {
        if (!$this->isPropertyAvailable("ExpirationDateTime")) {
            return null;
        }
        return $this->getProperty("ExpirationDateTime");
    }
    /**
     * @var string
     */
    public function setExpirationDateTime($value)
    {
        $this->setProperty("ExpirationDateTime", $value, true);
    }
    /**
     * @return string
     */
    public function getUploadId()
    {
        if (!$this->isPropertyAvailable("UploadId")) {
            return null;
        }
        return $this->getProperty("UploadId");
    }
    /**
     * @var string
     */
    public function setUploadId($value)
    {
        $this->setProperty("UploadId", $value, true);
    }
}