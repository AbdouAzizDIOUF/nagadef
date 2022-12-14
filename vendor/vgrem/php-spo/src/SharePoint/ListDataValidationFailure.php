<?php

/**
 * Generated 2019-10-12T18:54:53+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * This class 
 * describes a specific validation failure during a list item insert or update.
 */
class ListDataValidationFailure extends ClientValue
{
    /**
     * This 
     * property contains the list's title when the ValidationType property is 
     * SPValidationType.UserFormulaItem; otherwise, it contains the field display 
     * name.
     * @var string
     */
    public $DisplayName;
    /**
     * If the 
     * Reason property is SPReason.DataFailure, then this property contains the validation 
     * message provided by the formula author when the ValidationType property is 
     * SPValidationType.UserFormulaItem or SPValidationType.UserFormulaField. For 
     * other SPValidationTypes, a static message is provided. If the Reason property 
     * is SPReason.FormulaError, then this property contains a static message 
     * indicating that the formula evaluated to an error (such as #REF!, #DIV/0!, 
     * #NAME!, etc.).
     * @var string
     */
    public $Message;
    /**
     * This 
     * property contains the list's title when the ValidationType property is 
     * SPValidationType.UserFormulaItem; otherwise, it contains the field display 
     * name.
     * @var string
     */
    public $Name;
    /**
     * This property 
     * describes the reason for the failure.
     * @var integer
     */
    public $Reason;
    /**
     * This 
     * property describes the type of validation that triggered this failure.
     * @var integer
     */
    public $ValidationType;
}