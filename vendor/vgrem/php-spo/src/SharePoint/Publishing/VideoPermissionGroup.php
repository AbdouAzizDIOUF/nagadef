<?php

/**
 * Generated 2019-11-16T20:28:28+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientObject;

class VideoPermissionGroup extends ClientObject
{
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
}