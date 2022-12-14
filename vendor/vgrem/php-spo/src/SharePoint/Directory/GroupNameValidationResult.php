<?php

/**
 * Generated 2019-10-12T19:32:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Directory;

use Office365\Runtime\ClientValue;

class GroupNameValidationResult extends ClientValue
{
    /**
     * @var GroupNameValidationResultErrorParams
     */
    public $AliasErrorDetails;
    /**
     * @var GroupNameValidationResultErrorParams
     */
    public $DisplayNameErrorDetails;
    /**
     * @var string
     */
    public $ErrorCode;
    /**
     * @var string
     */
    public $ErrorMessage;
    /**
     * @var bool
     */
    public $IsValidName;
}
