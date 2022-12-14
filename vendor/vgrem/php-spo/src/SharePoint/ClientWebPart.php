<?php

/**
 * Generated 2019-11-17T16:35:02+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Representation 
 * of a ClientWebPart. It provides with ClientWebPart metadata and methods to 
 * render it.
 */
class ClientWebPart extends BaseEntity
{
    /**
     * @return string
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
}