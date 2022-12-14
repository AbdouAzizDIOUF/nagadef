<?php

/**
 * Generated 2019-11-17T15:06:51+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Provides 
 * information about the Data Loss Protection policy on an item so it can be shown 
 * to the user.
 */
class DlpPolicyTip extends ClientObject
{
    /**
     * @return string
     */
    public function getAppliedActionsText()
    {
        if (!$this->isPropertyAvailable("AppliedActionsText")) {
            return null;
        }
        return $this->getProperty("AppliedActionsText");
    }
    /**
     * @var string
     */
    public function setAppliedActionsText($value)
    {
        $this->setProperty("AppliedActionsText", $value, true);
    }
    /**
     * @return string
     */
    public function getComplianceUrl()
    {
        if (!$this->isPropertyAvailable("ComplianceUrl")) {
            return null;
        }
        return $this->getProperty("ComplianceUrl");
    }
    /**
     * @var string
     */
    public function setComplianceUrl($value)
    {
        $this->setProperty("ComplianceUrl", $value, true);
    }
    /**
     * @return string
     */
    public function getGeneralText()
    {
        if (!$this->isPropertyAvailable("GeneralText")) {
            return null;
        }
        return $this->getProperty("GeneralText");
    }
    /**
     * @var string
     */
    public function setGeneralText($value)
    {
        $this->setProperty("GeneralText", $value, true);
    }
    /**
     * @return string
     */
    public function getLastProcessedTime()
    {
        if (!$this->isPropertyAvailable("LastProcessedTime")) {
            return null;
        }
        return $this->getProperty("LastProcessedTime");
    }
    /**
     * @var string
     */
    public function setLastProcessedTime($value)
    {
        $this->setProperty("LastProcessedTime", $value, true);
    }
    /**
     * @return array
     */
    public function getMatchedConditionDescriptions()
    {
        if (!$this->isPropertyAvailable("MatchedConditionDescriptions")) {
            return null;
        }
        return $this->getProperty("MatchedConditionDescriptions");
    }
    /**
     * @var array
     */
    public function setMatchedConditionDescriptions($value)
    {
        $this->setProperty("MatchedConditionDescriptions", $value, true);
    }
    /**
     * @return integer
     */
    public function getOverrideOptions()
    {
        if (!$this->isPropertyAvailable("OverrideOptions")) {
            return null;
        }
        return $this->getProperty("OverrideOptions");
    }
    /**
     * @var integer
     */
    public function setOverrideOptions($value)
    {
        $this->setProperty("OverrideOptions", $value, true);
    }
    /**
     * @return string
     */
    public function getTwoLetterISOLanguageName()
    {
        if (!$this->isPropertyAvailable("TwoLetterISOLanguageName")) {
            return null;
        }
        return $this->getProperty("TwoLetterISOLanguageName");
    }
    /**
     * @var string
     */
    public function setTwoLetterISOLanguageName($value)
    {
        $this->setProperty("TwoLetterISOLanguageName", $value, true);
    }
}