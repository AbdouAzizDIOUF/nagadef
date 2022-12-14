<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\UserProfiles;

use Office365\SharePoint\BaseEntity;


class UserProfilePropertiesForUser extends BaseEntity
{
    /**
     * @return string
     */
    public function getAccountName()
    {
        if (!$this->isPropertyAvailable("AccountName")) {
            return null;
        }
        return $this->getProperty("AccountName");
    }
    /**
     * @var string
     */
    public function setAccountName($value)
    {
        $this->setProperty("AccountName", $value, true);
    }
}
