<?php

/**
 * Generated 2019-10-12T18:42:56+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Contains 
 * properties relevant to a given app.
 */
class AppProperties extends ClientValue
{
    /**
     * Returns 
     * true if a settings link is enabled.
     * @var bool
     */
    public $AppSettingsEnabled;
    /**
     * A 
     * description of the app.
     * @var string
     */
    public $Description;
    /**
     * A path to 
     * the EULA for the app.
     * @var string
     */
    public $EulaUrl;
    /**
     * True if 
     * the user is not authenticated.
     * @var bool
     */
    public $IsAnonymous;
    /**
     * True if 
     * the app is disabled.
     * @var bool
     */
    public $IsDisabled;
    /**
     * True is 
     * the app deployment is managed.
     * @var bool
     */
    public $ManagedDeploymentEnabled;
    /**
     * True if 
     * user can manage the app permissions.
     * @var bool
     */
    public $ManagePermissionsEnabled;
    /**
     * True if 
     * the user is able to manage the license seats.
     * @var bool
     */
    public $ManageSeatsEnabled;
    /**
     * True is 
     * app analytics data is available.
     * @var bool
     */
    public $MonitoringEnabled;
    /**
     * The 
     * publisher of the app.
     * @var string
     */
    public $Publisher;
    /**
     * Whether 
     * the user can remove the app.
     * @var bool
     */
    public $RemoveEnabled;
    /**
     * True if 
     * app can be sideloaded.
     * @var bool
     */
    public $SideLoadEnabled;
    /**
     * A custom 
     * url, if available, to access app settings.
     * @var string
     */
    public $SupportUrl;
    /**
     * True if 
     * the app is viewable in the app marketplace.
     * @var bool
     */
    public $ViewInMarketPlaceEnabled;
}