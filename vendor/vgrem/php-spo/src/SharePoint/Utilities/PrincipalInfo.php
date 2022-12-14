<?php

/**
 * Generated 2019-10-12T20:10:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Utilities;

use Office365\Runtime\ClientValue;
/**
 * Provides 
 * access to information about a principal.
 */
class PrincipalInfo extends ClientValue
{
    /**
     * Specifies 
     * the department name of the principal.
     * @var string
     */
    public $Department;
    /**
     * Specifies 
     * the display 
     * name of the principal.
     * @var string
     */
    public $DisplayName;
    /**
     * Specifies 
     * the e-mail 
     * address of the principal.
     * @var string
     */
    public $Email;
    /**
     * Specifies 
     * the job title of the principal.
     * @var string
     */
    public $JobTitle;
    /**
     * Specifies 
     * the login 
     * name of the principal.
     * @var string
     */
    public $LoginName;
    /**
     * Specifies 
     * the number of a mobile device of the 
     * principal.
     * @var string
     */
    public $Mobile;
    /**
     * Specifies 
     * an identifier for the principal. It MUST 
     * be -1 if the principal does not belong to the current site (2).
     * @var integer
     */
    public $PrincipalId;
    /**
     * Specifies 
     * the type of principal.It MUST 
     * NOT be a combination of more than one member of the PrincipalType 
     * enumeration. It MUST NOT be PrincipalType.All.
     * @var integer
     */
    public $PrincipalType;
    /**
     * Specifies 
     * the Session 
     * Initiation Protocol (SIP) address of the principal.
     * @var string
     */
    public $SIPAddress;
}