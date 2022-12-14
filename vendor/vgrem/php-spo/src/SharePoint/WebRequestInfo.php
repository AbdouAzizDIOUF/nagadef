<?php

/**
 * Generated 2019-10-12T19:04:49+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * metadata about a Hypertext Transfer Protocol 
 * (HTTP) request.<179>
 */
class WebRequestInfo extends ClientValue
{
    /**
     * The 
     * content of the request, as described in [RFC2616] 
     * section 4.3.
     * @var string
     */
    public $Body;
    /**
     * The 
     * headers of the request, as described in [RFC2616] section 
     * 4.2.
     * @var array
     */
    public $Headers;
    /**
     * The HTTP 
     * method of the request, as described in [RFC2616] 
     * section 5.1.1.It MUST 
     * NOT be empty. 
     * @var string
     */
    public $Method;
    /**
     * The target 
     * URL 
     * of the request.It MUST be 
     * a URL of absolute form. Its length MUST be equal to or less than 255. 
     * @var string
     */
    public $Url;
}