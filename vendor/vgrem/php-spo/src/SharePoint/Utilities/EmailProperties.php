<?php

/**
 * Generated 2020-05-26T21:58:14+00:00 16.0.20113.12008
 */
namespace Office365\SharePoint\Utilities;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * the definition of the email to send which includes both the message fields and 
 * body.<215>
 */
class EmailProperties extends ClientValue
{
    /**
     * Specifies 
     * the email headers collection that corresponds to any additional fields of the 
     * message.
     * @var array
     */
    public $AdditionalHeaders;
    /**
     * Accessibility: Read/WriteSpecifies 
     * the blind 
     * carbon copy (bcc) recipients of the email.
     * @var array
     */
    public $BCC;
    /**
     * Specifies 
     * the message 
     * body to send.
     * @var string
     */
    public $Body;
    /**
     * Accessibility: Read/WriteSpecifies 
     * the blind 
     * carbon copy (bcc) recipients of the email.
     * @var array
     */
    public $CC;
    /**
     * Specifies 
     * the From field of the email.
     * @var string
     */
    public $From;
    /**
     * Specifies 
     * the Subject field of the e-mail.
     * @var string
     */
    public $Subject;
    /**
     * Accessibility: Read/WriteSpecifies 
     * the To field of the email.
     * @var array
     */
    public $To;
}