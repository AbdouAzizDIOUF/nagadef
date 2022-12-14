<?php

/**
 * Generated 2019-11-17T18:33:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Utilities;

use Office365\Runtime\ClientObject;

/**
 * Microsoft.SharePoint.Client.Utilities.FileHandlerWopiProperties 
 * is not applicable.<275>
 */
class FileHandlerWopiProperties extends ClientObject
{
    /**
     * @return string
     */
    public function getFileGetUrl()
    {
        if (!$this->isPropertyAvailable("FileGetUrl")) {
            return null;
        }
        return $this->getProperty("FileGetUrl");
    }
    /**
     * @var string
     */
    public function setFileGetUrl($value)
    {
        $this->setProperty("FileGetUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getFileId()
    {
        if (!$this->isPropertyAvailable("FileId")) {
            return null;
        }
        return $this->getProperty("FileId");
    }
    /**
     * @var string
     */
    public function setFileId($value)
    {
        $this->setProperty("FileId", $value, true);
    }
    /**
     * @return string
     */
    public function getFilePutUrl()
    {
        if (!$this->isPropertyAvailable("FilePutUrl")) {
            return null;
        }
        return $this->getProperty("FilePutUrl");
    }
    /**
     * @var string
     */
    public function setFilePutUrl($value)
    {
        $this->setProperty("FilePutUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getResourceId()
    {
        if (!$this->isPropertyAvailable("ResourceId")) {
            return null;
        }
        return $this->getProperty("ResourceId");
    }
    /**
     * @var string
     */
    public function setResourceId($value)
    {
        $this->setProperty("ResourceId", $value, true);
    }
}