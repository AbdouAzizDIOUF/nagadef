<?php

/**
 * Generated 2019-10-12T19:01:57+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Parameters 
 * to invite a user.
 */
class UserCreationInformation extends ClientValue
{
    /**
     * Specifies 
     * the e-mail address for the user to be created.Its length 
     * MUST be equal to or less than 255. 
     * @var string
     */
    public $Email;
    /**
     * Specifies 
     * the login name for the user to be created.It MUST 
     * NOT be NULL. It MUST NOT be empty. Its length MUST be equal to or less than 
     * 251. 
     * @var string
     */
    public $LoginName;
    /**
     * Specifies 
     * the display name for the user to be created.Its length 
     * MUST be equal to or less than 255. 
     * @var string
     */
    public $Title;
}