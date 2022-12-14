<?php

/**
 * Generated 2019-10-12T19:01:57+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;

class TenantAppInformation extends ClientValue
{
    /**
     * The OAuth Id of an app.
     * @var string
     */
    public $AppPrincipalId;
    /**
     * The full URL of an app’s web.
     * @var string
     */
    public $AppWebFullUrl;
    /**
     * The creation time of an app.
     * @var string
     */
    public $CreationTime;
    /**
     * The absolute URL of an app’s icon.
     * @var string
     */
    public $IconAbsoluteUrl;
    /**
     * The absolute fallback URL of an app’s icon.
     * @var string
     */
    public $IconFallbackAbsoluteUrl;
    /**
     * The Id of an app.
     * @var string
     */
    public $Id;
    /**
     * The launch URL of an app.
     * @var string
     */
    public $LaunchUrl;
    /**
     * The fingerprint of an app’s package.
     * @var string
     */
    public $PackageFingerprint;
    /**
     * The product Id of an app.
     * @var string
     */
    public $ProductId;
    /**
     * The URL of the remote host of an app.
     * @var string
     */
    public $RemoteAppUrl;
    /**
     * The status of the app instance as 
     * defined in section 3.2.5.238.
     * @var integer
     */
    public $Status;
    /**
     * The title of an app.
     * @var string
     */
    public $Title;
}