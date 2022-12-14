<?php

/**
 * Generated 2021-05-05T14:47:20+00:00 16.0.21221.12006
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * the parameters that are used to retrieve filter data.
 */
class RenderListFilterDataParameters extends ClientValue
{
    /**
     * This 
     * parameter indicates whether field specific list filter html is excluded from 
     * rendering.
     * @var bool
     */
    public $ExcludeFieldFilteringHtml;
    /**
     * The field 
     * internal name whose filter data is returned.
     * @var string
     */
    public $FieldInternalName;
    /**
     * The 
     * overrideScope for which the field filter data is returned. The string values 
     * come from SPView.ConvertStringToViewScope.
     * @var string
     */
    public $OverrideScope;
    /**
     * The 
     * processQString for which the field filter data is returned.
     * @var string
     */
    public $ProcessQStringToCAML;
    /**
     * The View 
     * ID (GUID) for the view from which to retrieve filter data.
     * @var string
     */
    public $ViewId;
    /**
     * @var string
     */
    public $ViewXml;
}