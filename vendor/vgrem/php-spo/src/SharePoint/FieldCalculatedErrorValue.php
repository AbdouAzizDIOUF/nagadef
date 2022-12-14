<?php

/**
 * Generated 2019-10-12T18:54:53+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * The value 
 * of a calculated field when the field value is actually a calculation error, 
 * such as division by zero, or overflow.
 */
class FieldCalculatedErrorValue extends ClientValue
{
    /**
     * Error 
     * message.
     * @var string
     */
    public $ErrorMessage;
}