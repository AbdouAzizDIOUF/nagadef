<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;


use Office365\Runtime\ClientObject;


class PointPublishingDocProps extends ClientObject
{
    /**
     * @return string
     */
    public function getAuthor()
    {
        if (!$this->isPropertyAvailable("Author")) {
            return null;
        }
        return $this->getProperty("Author");
    }
    /**
     * @var string
     */
    public function setAuthor($value)
    {
        $this->setProperty("Author", $value, true);
    }
    /**
     * @return string
     */
    public function getContentTypeId()
    {
        if (!$this->isPropertyAvailable("ContentTypeId")) {
            return null;
        }
        return $this->getProperty("ContentTypeId");
    }
    /**
     * @var string
     */
    public function setContentTypeId($value)
    {
        $this->setProperty("ContentTypeId", $value, true);
    }
    /**
     * @return string
     */
    public function getDocLibraryUrl()
    {
        if (!$this->isPropertyAvailable("DocLibraryUrl")) {
            return null;
        }
        return $this->getProperty("DocLibraryUrl");
    }
    /**
     * @var string
     */
    public function setDocLibraryUrl($value)
    {
        $this->setProperty("DocLibraryUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getFileType()
    {
        if (!$this->isPropertyAvailable("FileType")) {
            return null;
        }
        return $this->getProperty("FileType");
    }
    /**
     * @var string
     */
    public function setFileType($value)
    {
        $this->setProperty("FileType", $value, true);
    }
    /**
     * @return string
     */
    public function getModified()
    {
        if (!$this->isPropertyAvailable("Modified")) {
            return null;
        }
        return $this->getProperty("Modified");
    }
    /**
     * @var string
     */
    public function setModified($value)
    {
        $this->setProperty("Modified", $value, true);
    }
    /**
     * @return string
     */
    public function getServerRedirectedEmbedUrl()
    {
        if (!$this->isPropertyAvailable("ServerRedirectedEmbedUrl")) {
            return null;
        }
        return $this->getProperty("ServerRedirectedEmbedUrl");
    }
    /**
     * @var string
     */
    public function setServerRedirectedEmbedUrl($value)
    {
        $this->setProperty("ServerRedirectedEmbedUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getServerRedirectedPreviewUrl()
    {
        if (!$this->isPropertyAvailable("ServerRedirectedPreviewUrl")) {
            return null;
        }
        return $this->getProperty("ServerRedirectedPreviewUrl");
    }
    /**
     * @var string
     */
    public function setServerRedirectedPreviewUrl($value)
    {
        $this->setProperty("ServerRedirectedPreviewUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteId()
    {
        if (!$this->isPropertyAvailable("SiteId")) {
            return null;
        }
        return $this->getProperty("SiteId");
    }
    /**
     * @var string
     */
    public function setSiteId($value)
    {
        $this->setProperty("SiteId", $value, true);
    }
    /**
     * @return string
     */
    public function getSiteTitle()
    {
        if (!$this->isPropertyAvailable("SiteTitle")) {
            return null;
        }
        return $this->getProperty("SiteTitle");
    }
    /**
     * @var string
     */
    public function setSiteTitle($value)
    {
        $this->setProperty("SiteTitle", $value, true);
    }
    /**
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * @return string
     */
    public function getUniqueId()
    {
        if (!$this->isPropertyAvailable("UniqueId")) {
            return null;
        }
        return $this->getProperty("UniqueId");
    }
    /**
     * @var string
     */
    public function setUniqueId($value)
    {
        $this->setProperty("UniqueId", $value, true);
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
