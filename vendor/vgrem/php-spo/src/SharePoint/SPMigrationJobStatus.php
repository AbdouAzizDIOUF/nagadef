<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;


class SPMigrationJobStatus extends ClientObject
{
    /**
     * @return string
     */
    public function getJobId()
    {
        if (!$this->isPropertyAvailable("JobId")) {
            return null;
        }
        return $this->getProperty("JobId");
    }
    /**
     * @var string
     */
    public function setJobId($value)
    {
        $this->setProperty("JobId", $value, true);
    }
    /**
     * @return integer
     */
    public function getJobState()
    {
        if (!$this->isPropertyAvailable("JobState")) {
            return null;
        }
        return $this->getProperty("JobState");
    }
    /**
     * @var integer
     */
    public function setJobState($value)
    {
        $this->setProperty("JobState", $value, true);
    }
}