<?php

/**
 * Generated 2019-11-17T16:35:02+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;


class SPDataLeakagePreventionStatusInfo extends ClientObject
{
    /**
     * @return bool
     */
    public function getContainsConfidentialInfo()
    {
        if (!$this->isPropertyAvailable("ContainsConfidentialInfo")) {
            return null;
        }
        return $this->getProperty("ContainsConfidentialInfo");
    }
    /**
     * @var bool
     */
    public function setContainsConfidentialInfo($value)
    {
        $this->setProperty("ContainsConfidentialInfo", $value, true);
    }
    /**
     * @return string
     */
    public function getContainsConfidentialInfoLearnMoreUrl()
    {
        if (!$this->isPropertyAvailable("ContainsConfidentialInfoLearnMoreUrl")) {
            return null;
        }
        return $this->getProperty("ContainsConfidentialInfoLearnMoreUrl");
    }
    /**
     * @var string
     */
    public function setContainsConfidentialInfoLearnMoreUrl($value)
    {
        $this->setProperty("ContainsConfidentialInfoLearnMoreUrl", $value, true);
    }
    /**
     * @return bool
     */
    public function getExternalSharingTipsEnabled()
    {
        if (!$this->isPropertyAvailable("ExternalSharingTipsEnabled")) {
            return null;
        }
        return $this->getProperty("ExternalSharingTipsEnabled");
    }
    /**
     * @var bool
     */
    public function setExternalSharingTipsEnabled($value)
    {
        $this->setProperty("ExternalSharingTipsEnabled", $value, true);
    }
    /**
     * @return string
     */
    public function getExternalSharingTipsLearnMoreUrl()
    {
        if (!$this->isPropertyAvailable("ExternalSharingTipsLearnMoreUrl")) {
            return null;
        }
        return $this->getProperty("ExternalSharingTipsLearnMoreUrl");
    }
    /**
     * @var string
     */
    public function setExternalSharingTipsLearnMoreUrl($value)
    {
        $this->setProperty("ExternalSharingTipsLearnMoreUrl", $value, true);
    }
}