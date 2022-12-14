<?php

/**
 * Generated 2019-10-12T18:54:53+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies event 
 * receiver creation information.<206>
 */
class EventReceiverDefinitionCreationInformation extends ClientValue
{
    /**
     * Specifies 
     * the strong 
     * name of the assembly that is used for receiving events.
     * @var string
     */
    public $ReceiverAssembly;
    /**
     * Specifies 
     * a string that represents the class that is used for receiving events.
     * @var string
     */
    public $ReceiverClass;
    /**
     * Specifies 
     * the name of the event receiver.
     * @var string
     */
    public $ReceiverName;
    /**
     * Specifies 
     * an integer that represents the relative sequence of the event.
     * @var integer
     */
    public $SequenceNumber;
    /**
     * Specifies 
     * the execution synchronization of the event receiver.
     * @var integer
     */
    public $Synchronization;
    /**
     * Specifies 
     * the type of event as specified by EventReceiverType (section 3.2.5.205).
     * @var integer
     */
    public $EventType;
    /**
     * Specifies 
     * the URL 
     * of a web service that is used for receiving events. 
     * @var string
     */
    public $ReceiverUrl;
}