<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;


use Office365\Runtime\ClientObject;


class PointPublishingPost extends ClientObject
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
    public function getContent()
    {
        if (!$this->isPropertyAvailable("Content")) {
            return null;
        }
        return $this->getProperty("Content");
    }
    /**
     * @var string
     */
    public function setContent($value)
    {
        $this->setProperty("Content", $value, true);
    }
    /**
     * @return string
     */
    public function getCreatedDate()
    {
        if (!$this->isPropertyAvailable("CreatedDate")) {
            return null;
        }
        return $this->getProperty("CreatedDate");
    }
    /**
     * @var string
     */
    public function setCreatedDate($value)
    {
        $this->setProperty("CreatedDate", $value, true);
    }
    /**
     * @return string
     */
    public function getFriendlyUrlFileName()
    {
        if (!$this->isPropertyAvailable("FriendlyUrlFileName")) {
            return null;
        }
        return $this->getProperty("FriendlyUrlFileName");
    }
    /**
     * @var string
     */
    public function setFriendlyUrlFileName($value)
    {
        $this->setProperty("FriendlyUrlFileName", $value, true);
    }
    /**
     * @return integer
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * @var integer
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * @return string
     */
    public function getModifiedDate()
    {
        if (!$this->isPropertyAvailable("ModifiedDate")) {
            return null;
        }
        return $this->getProperty("ModifiedDate");
    }
    /**
     * @var string
     */
    public function setModifiedDate($value)
    {
        $this->setProperty("ModifiedDate", $value, true);
    }
    /**
     * @return integer
     */
    public function getOperationType()
    {
        if (!$this->isPropertyAvailable("OperationType")) {
            return null;
        }
        return $this->getProperty("OperationType");
    }
    /**
     * @var integer
     */
    public function setOperationType($value)
    {
        $this->setProperty("OperationType", $value, true);
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
     * @return bool
     */
    public function getUserIsAuthor()
    {
        if (!$this->isPropertyAvailable("UserIsAuthor")) {
            return null;
        }
        return $this->getProperty("UserIsAuthor");
    }
    /**
     * @var bool
     */
    public function setUserIsAuthor($value)
    {
        $this->setProperty("UserIsAuthor", $value, true);
    }
    /**
     * @return string
     */
    public function getVersion()
    {
        if (!$this->isPropertyAvailable("Version")) {
            return null;
        }
        return $this->getProperty("Version");
    }
    /**
     * @var string
     */
    public function setVersion($value)
    {
        $this->setProperty("Version", $value, true);
    }
}
