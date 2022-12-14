<?php

/**
 * Generated 2019-10-12T19:01:57+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Defines a 
 * query to specify which child Web sites to return 
 * from a Web site.
 */
class SubwebQuery extends ClientValue
{
    /**
     * An integer 
     * that identifies the site template used to provision this site. The value 
     * defaults to -1, which means no configuration filter is used for the query. The 
     * value MUST NOT be less than -1.
     * @var integer
     */
    public $ConfigurationFilter;
    /**
     * An integer 
     * that identifies the template used in the site definition to define the base 
     * structure of this site. The value defaults to -1, which means no web template 
     * filter is used for the query. The value MUST NOT be less than -1.
     * @var integer
     */
    public $WebTemplateFilter;
}