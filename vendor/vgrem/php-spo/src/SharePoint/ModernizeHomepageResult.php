<?php

/**
 * Generated 2020-04-23T09:31:03+00:00 16.0.20008.12009
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

class ModernizeHomepageResult extends ClientObject
{
    /**
     * @return bool
     */
    public function getCanModernizeHomepage()
    {
        if (!$this->isPropertyAvailable("CanModernizeHomepage")) {
            return null;
        }
        return $this->getProperty("CanModernizeHomepage");
    }
    /**
     * @var bool
     */
    public function setCanModernizeHomepage($value)
    {
        $this->setProperty("CanModernizeHomepage", $value, true);
    }
    /**
     * @return string
     */
    public function getReason()
    {
        if (!$this->isPropertyAvailable("Reason")) {
            return null;
        }
        return $this->getProperty("Reason");
    }
    /**
     * @var string
     */
    public function setReason($value)
    {
        $this->setProperty("Reason", $value, true);
    }
}