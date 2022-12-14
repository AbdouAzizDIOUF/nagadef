<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\UserProfiles;

use Office365\Runtime\ClientObject;


class FollowedItemData extends ClientObject
{
    /**
     * @return array
     */
    public function getProperties()
    {
        if (!$this->isPropertyAvailable("Properties")) {
            return null;
        }
        return $this->getProperty("Properties");
    }
    /**
     * @var array
     */
    public function setProperties($value)
    {
        $this->setProperty("Properties", $value, true);
    }
}
