<?php

/**
 * Generated 2019-11-17T18:33:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\SiteHealth;

use Office365\Runtime\ClientObject;

/**
 * Specifies 
 * a summary of the results of running a set of site collection 
 * health rules.<214>
 */
class SiteHealthSummary extends ClientObject
{
    /**
     * @return integer
     */
    public function getFailedErrorCount()
    {
        if (!$this->isPropertyAvailable("FailedErrorCount")) {
            return null;
        }
        return $this->getProperty("FailedErrorCount");
    }
    /**
     * @var integer
     */
    public function setFailedErrorCount($value)
    {
        $this->setProperty("FailedErrorCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getFailedWarningCount()
    {
        if (!$this->isPropertyAvailable("FailedWarningCount")) {
            return null;
        }
        return $this->getProperty("FailedWarningCount");
    }
    /**
     * @var integer
     */
    public function setFailedWarningCount($value)
    {
        $this->setProperty("FailedWarningCount", $value, true);
    }
    /**
     * @return integer
     */
    public function getPassedCount()
    {
        if (!$this->isPropertyAvailable("PassedCount")) {
            return null;
        }
        return $this->getProperty("PassedCount");
    }
    /**
     * @var integer
     */
    public function setPassedCount($value)
    {
        $this->setProperty("PassedCount", $value, true);
    }
}