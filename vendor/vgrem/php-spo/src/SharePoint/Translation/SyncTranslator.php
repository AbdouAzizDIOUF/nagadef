<?php

/**
 * Generated 2019-11-17T18:33:00+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\Translation;

use Office365\Runtime\ClientObject;


class SyncTranslator extends ClientObject
{
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