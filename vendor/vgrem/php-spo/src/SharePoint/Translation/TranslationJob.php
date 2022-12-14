<?php

/**
 * Generated 2019-11-17T18:33:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Translation;

use Office365\Runtime\ClientObject;


class TranslationJob extends ClientObject
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
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * @var string
     */
    public function setName($value)
    {
        $this->setProperty("Name", $value, true);
    }
    /**
     * @return integer
     */
    public function getOutputSaveBehavior()
    {
        if (!$this->isPropertyAvailable("OutputSaveBehavior")) {
            return null;
        }
        return $this->getProperty("OutputSaveBehavior");
    }
    /**
     * @var integer
     */
    public function setOutputSaveBehavior($value)
    {
        $this->setProperty("OutputSaveBehavior", $value, true);
    }
}