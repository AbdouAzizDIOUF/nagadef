<?php

/**
 * Generated 2019-11-17T16:35:02+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

/**
 * Specifies 
 * a push notification subscriber.<229>
 */
class PushNotificationSubscriber extends ClientObject
{
    /**
     * @return string
     */
    public function getCustomArgs()
    {
        if (!$this->isPropertyAvailable("CustomArgs")) {
            return null;
        }
        return $this->getProperty("CustomArgs");
    }
    /**
     * @var string
     */
    public function setCustomArgs($value)
    {
        $this->setProperty("CustomArgs", $value, true);
    }
    /**
     * @return string
     */
    public function getDeviceAppInstanceId()
    {
        if (!$this->isPropertyAvailable("DeviceAppInstanceId")) {
            return null;
        }
        return $this->getProperty("DeviceAppInstanceId");
    }
    /**
     * @var string
     */
    public function setDeviceAppInstanceId($value)
    {
        $this->setProperty("DeviceAppInstanceId", $value, true);
    }
    /**
     * @return string
     */
    public function getLastModifiedTimeStamp()
    {
        if (!$this->isPropertyAvailable("LastModifiedTimeStamp")) {
            return null;
        }
        return $this->getProperty("LastModifiedTimeStamp");
    }
    /**
     * @var string
     */
    public function setLastModifiedTimeStamp($value)
    {
        $this->setProperty("LastModifiedTimeStamp", $value, true);
    }
    /**
     * @return string
     */
    public function getRegistrationTimeStamp()
    {
        if (!$this->isPropertyAvailable("RegistrationTimeStamp")) {
            return null;
        }
        return $this->getProperty("RegistrationTimeStamp");
    }
    /**
     * @var string
     */
    public function setRegistrationTimeStamp($value)
    {
        $this->setProperty("RegistrationTimeStamp", $value, true);
    }
    /**
     * @return string
     */
    public function getServiceToken()
    {
        if (!$this->isPropertyAvailable("ServiceToken")) {
            return null;
        }
        return $this->getProperty("ServiceToken");
    }
    /**
     * @var string
     */
    public function setServiceToken($value)
    {
        $this->setProperty("ServiceToken", $value, true);
    }
    /**
     * @return string
     */
    public function getSubscriberType()
    {
        if (!$this->isPropertyAvailable("SubscriberType")) {
            return null;
        }
        return $this->getProperty("SubscriberType");
    }
    /**
     * @var string
     */
    public function setSubscriberType($value)
    {
        $this->setProperty("SubscriberType", $value, true);
    }
    /**
     * @return User
     */
    public function getUser()
    {
        if (!$this->isPropertyAvailable("User")) {
            $this->setProperty("User", new User($this->getContext(), new ResourcePath("User", $this->getResourcePath())));
        }
        return $this->getProperty("User");
    }
}