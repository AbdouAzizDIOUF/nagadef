<?php

/**
 * Generated 2019-10-12T18:45:59+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;

class CustomActionElement extends ClientValue
{
    /**
     * The unique 
     * identifier of the client-side component associated with the custom action.
     * @var string
     */
    public $ClientSideComponentId;
    /**
     * This 
     * property is only used when a ClientSideComponentId is specified. It is 
     * optional. If non-empty, the string MUST contain a JSON object with custom 
     * initialization properties whose format and meaning are defined by the 
     * client-side component.
     * @var string
     */
    public $ClientSideComponentProperties;
    /**
     * Gets the 
     * action's command ui definition that is used to store the ribbon xml.
     * @var string
     */
    public $CommandUIExtension;
    /**
     * The unique 
     * identifier of the client-side component associated with the custom action.
     * @var string
     */
    public $Id;
    /**
     * The client 
     * side script to enabled or disable the custom action.
     * @var string
     */
    public $EnabledScript;
    /**
     * @var string
     */
    public $HostProperties;
    /**
     * Returns 
     * the URL for a thumbnail image associated with the custom action.
     * @var string
     */
    public $ImageUrl;
    /**
     * Specifies 
     * where the Custom Action will be placed in the UI.
     * @var string
     */
    public $Location;
    /**
     * Registration 
     * ID of the custom action. It can be file extension for ECB custom action, or 
     * contenttype id for content type custom action.
     * @var string
     */
    public $RegistrationId;
    /**
     * Registration 
     * type of the custom Action. Its values are defined in 
     * SPUserCustomActionRegistrationType enum.
     * @var integer
     */
    public $RegistrationType;
    /**
     * Returns 
     * true if the custom action requires site collection admin priviledge to run.
     * @var bool
     */
    public $RequireSiteAdministrator;
    /**
     * Returns 
     * the EffectiveBasePermissions object.It MUST 
     * NOT be NULL. 
     * @var BasePermissions
     */
    public $Rights;
    /**
     * Title of 
     * the custom Action.
     * @var string
     */
    public $Title;
    /**
     * Url Action 
     * of the custom Action. It could contain embedded JavaScript for the custom 
     * action.
     * @var string
     */
    public $UrlAction;
}
