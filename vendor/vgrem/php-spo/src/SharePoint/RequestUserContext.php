<?php

/**
 * Generated 2019-11-17T18:22:48+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

/**
 * The class 
 * that represents the user context for the present request. Typically found under 
 * /_api/me
 */
class RequestUserContext extends ClientObject
{
    /**
     * @return User
     */
    public function getUser()
    {
        if (!$this->isPropertyAvailable("User")) {
            $this->setProperty("User", new User($this->getContext(),
                new ResourcePath("User", $this->getResourcePath())));
        }
        return $this->getProperty("User");
    }
    /**
     * @return RequestUserContext
     */
    public function getCurrent()
    {
        if (!$this->isPropertyAvailable("Current")) {
            $this->setProperty("Current",
                new RequestUserContext($this->getContext(), new ResourcePath("Current", $this->getResourcePath())));
        }
        return $this->getProperty("Current");
    }
}