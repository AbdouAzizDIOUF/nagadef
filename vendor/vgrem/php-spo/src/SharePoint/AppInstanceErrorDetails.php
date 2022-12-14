<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Specifies 
 * details about the error encountered during a lifecycle operation of an app 
 * instance. 
 */
class AppInstanceErrorDetails extends ClientObject
{
    /**
     * @return string
     */
    public function getCorrelationId()
    {
        if (!$this->isPropertyAvailable("CorrelationId")) {
            return null;
        }
        return $this->getProperty("CorrelationId");
    }
    /**
     * @var string
     */
    public function setCorrelationId($value)
    {
        $this->setProperty("CorrelationId", $value, true);
    }
    /**
     * @return string
     */
    public function getErrorDetail()
    {
        if (!$this->isPropertyAvailable("ErrorDetail")) {
            return null;
        }
        return $this->getProperty("ErrorDetail");
    }
    /**
     * @var string
     */
    public function setErrorDetail($value)
    {
        $this->setProperty("ErrorDetail", $value, true);
    }
    /**
     * @return integer
     */
    public function getErrorType()
    {
        if (!$this->isPropertyAvailable("ErrorType")) {
            return null;
        }
        return $this->getProperty("ErrorType");
    }
    /**
     * @var integer
     */
    public function setErrorType($value)
    {
        $this->setProperty("ErrorType", $value, true);
    }
    /**
     * @return string
     */
    public function getErrorTypeName()
    {
        if (!$this->isPropertyAvailable("ErrorTypeName")) {
            return null;
        }
        return $this->getProperty("ErrorTypeName");
    }
    /**
     * @var string
     */
    public function setErrorTypeName($value)
    {
        $this->setProperty("ErrorTypeName", $value, true);
    }
    /**
     * @return string
     */
    public function getExceptionMessage()
    {
        if (!$this->isPropertyAvailable("ExceptionMessage")) {
            return null;
        }
        return $this->getProperty("ExceptionMessage");
    }
    /**
     * @var string
     */
    public function setExceptionMessage($value)
    {
        $this->setProperty("ExceptionMessage", $value, true);
    }
    /**
     * @return integer
     */
    public function getSource()
    {
        if (!$this->isPropertyAvailable("Source")) {
            return null;
        }
        return $this->getProperty("Source");
    }
    /**
     * @var integer
     */
    public function setSource($value)
    {
        $this->setProperty("Source", $value, true);
    }
    /**
     * @return string
     */
    public function getSourceName()
    {
        if (!$this->isPropertyAvailable("SourceName")) {
            return null;
        }
        return $this->getProperty("SourceName");
    }
    /**
     * @var string
     */
    public function setSourceName($value)
    {
        $this->setProperty("SourceName", $value, true);
    }
}
