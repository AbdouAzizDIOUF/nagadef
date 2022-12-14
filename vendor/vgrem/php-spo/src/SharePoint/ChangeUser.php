<?php

/**
 * Generated 2019-11-16T19:51:42+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a change on a user.The RelativeTime property is not included in the default 
 * scalar property set for this type.
 */
class ChangeUser extends Change
{

    /**
     * Specifies 
     * whether a user has changed from an inactive state to an active state.When a user is added to a site (2) and only 
     * has browse permissions, the 
     * user is in an inactive state. However, once the user can author list 
     * items, add documents, be 
     * assigned tasks, or make any 
     * contribution to the site (2), the user is in an active state.
     * @return bool
     */
    public function getActivate()
    {
        if (!$this->isPropertyAvailable("Activate")) {
            return null;
        }
        return $this->getProperty("Activate");
    }

    /**
     * Specifies
     * whether a user has changed from an inactive state to an active state.When a user is added to a site (2) and only
     * has browse permissions, the
     * user is in an inactive state. However, once the user can author list
     * items, add documents, be
     * assigned tasks, or make any
     * contribution to the site (2), the user is in an active state.
     * @return ChangeUser
     * @var bool
     */
    public function setActivate($value)
    {
        return $this->setProperty("Activate", $value, true);
    }
    /**
     * Uniquely 
     * identifies the changed user.
     * @return integer
     */
    public function getUserId()
    {
        if (!$this->isPropertyAvailable("UserId")) {
            return null;
        }
        return $this->getProperty("UserId");
    }
    /**
     * Uniquely 
     * identifies the changed user.
     * @var integer
     */
    public function setUserId($value)
    {
        $this->setProperty("UserId", $value, true);
    }
}
