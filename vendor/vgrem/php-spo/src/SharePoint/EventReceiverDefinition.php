<?php

/**
 * Generated 2019-11-17T14:33:10+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Abstract 
 * base class that defines general properties of an event receiver.<205>
 */
class EventReceiverDefinition extends ClientObject
{
    /**
     * Specifies 
     * the strong 
     * name of the assembly that is used for the event receiver.
     * @return string
     */
    public function getReceiverAssembly()
    {
        if (!$this->isPropertyAvailable("ReceiverAssembly")) {
            return null;
        }
        return $this->getProperty("ReceiverAssembly");
    }
    /**
     * Specifies 
     * the strong 
     * name of the assembly that is used for the event receiver.
     * @var string
     */
    public function setReceiverAssembly($value)
    {
        $this->setProperty("ReceiverAssembly", $value, true);
    }
    /**
     * Specifies 
     * a string that represents the class that is used for receiving events.
     * @return string
     */
    public function getReceiverClass()
    {
        if (!$this->isPropertyAvailable("ReceiverClass")) {
            return null;
        }
        return $this->getProperty("ReceiverClass");
    }
    /**
     * Specifies 
     * a string that represents the class that is used for receiving events.
     * @var string
     */
    public function setReceiverClass($value)
    {
        $this->setProperty("ReceiverClass", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the event receiver 
     * definition.
     * @return string
     */
    public function getReceiverId()
    {
        if (!$this->isPropertyAvailable("ReceiverId")) {
            return null;
        }
        return $this->getProperty("ReceiverId");
    }
    /**
     * Specifies 
     * the identifier of the event receiver 
     * definition.
     * @var string
     */
    public function setReceiverId($value)
    {
        $this->setProperty("ReceiverId", $value, true);
    }
    /**
     * Specifies 
     * the name of the event receiver.
     * @return string
     */
    public function getReceiverName()
    {
        if (!$this->isPropertyAvailable("ReceiverName")) {
            return null;
        }
        return $this->getProperty("ReceiverName");
    }
    /**
     * Specifies 
     * the name of the event receiver.
     * @var string
     */
    public function setReceiverName($value)
    {
        $this->setProperty("ReceiverName", $value, true);
    }
    /**
     * Specifies 
     * an integer that represents the relative sequence of the event.
     * @return integer
     */
    public function getSequenceNumber()
    {
        if (!$this->isPropertyAvailable("SequenceNumber")) {
            return null;
        }
        return $this->getProperty("SequenceNumber");
    }
    /**
     * Specifies 
     * an integer that represents the relative sequence of the event.
     * @var integer
     */
    public function setSequenceNumber($value)
    {
        $this->setProperty("SequenceNumber", $value, true);
    }
    /**
     * Specifies 
     * the synchronization of actions of this event receiver 
     * (section 3.2.5.204).
     * @return integer
     */
    public function getSynchronization()
    {
        if (!$this->isPropertyAvailable("Synchronization")) {
            return null;
        }
        return $this->getProperty("Synchronization");
    }
    /**
     * Specifies 
     * the synchronization of actions of this event receiver 
     * (section 3.2.5.204).
     * @var integer
     */
    public function setSynchronization($value)
    {
        $this->setProperty("Synchronization", $value, true);
    }
    /**
     * Specifies 
     * the type of event for the event receiver 
     * (section 3.2.5.205).
     * @return integer
     */
    public function getEventType()
    {
        if (!$this->isPropertyAvailable("EventType")) {
            return null;
        }
        return $this->getProperty("EventType");
    }
    /**
     * Specifies 
     * the type of event for the event receiver 
     * (section 3.2.5.205).
     * @var integer
     */
    public function setEventType($value)
    {
        $this->setProperty("EventType", $value, true);
    }
    /**
     * Specifies 
     * the URL 
     * of a web service that is used as an event receiver.
     * @return string
     */
    public function getReceiverUrl()
    {
        if (!$this->isPropertyAvailable("ReceiverUrl")) {
            return null;
        }
        return $this->getProperty("ReceiverUrl");
    }
    /**
     * Specifies 
     * the URL 
     * of a web service that is used as an event receiver.
     * @var string
     */
    public function setReceiverUrl($value)
    {
        $this->setProperty("ReceiverUrl", $value, true);
    }
}