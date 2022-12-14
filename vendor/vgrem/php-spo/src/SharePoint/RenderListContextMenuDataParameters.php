<?php

/**
 * Generated 2019-10-12T18:54:53+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * the parameters that are used for a list menu item.
 */
class RenderListContextMenuDataParameters extends ClientValue
{
    /**
     * The 
     * message that SHOULD be displayed if there is a cascade deletion warning.
     * @var string
     */
    public $CascDelWarnMessage;
    /**
     * Specifies 
     * a user 
     * custom action. 
     * @var string
     */
    public $CustomAction;
    /**
     * Specifies 
     * a special field that SHOULD be included.
     * @var string
     */
    public $Field;
    /**
     * The id of 
     * the list item whose menu information is being sought.
     * @var string
     */
    public $ID;
    /**
     * Specifies 
     * whether there is a full list search. "true" if there is a full list 
     * search; "false" otherwise.
     * @var string
     */
    public $InplaceFullListSearch;
    /**
     * Search 
     * term for a full list search.
     * @var string
     */
    public $InplaceSearchQuery;
    /**
     * Specifies 
     * whether this view is a client side rendered view.
     * @var string
     */
    public $IsCSR;
    /**
     * Specifies 
     * whether this view is an Xsl view.
     * @var string
     */
    public $IsXslView;
    /**
     * The list 
     * item id of the item whose menu information is being sought.
     * @var string
     */
    public $ItemId;
    /**
     * The URL of 
     * the view that is being displayed.
     * @var string
     */
    public $ListViewPageUrl;
    /**
     * Used to 
     * override a scope on the rendered view: SPView.Scope.
     * @var string
     */
    public $OverrideScope;
    /**
     * The folder 
     * that the view is displaying.
     * @var string
     */
    public $RootFolder;
    /**
     * Specifies 
     * whether this view is an Xsl view.
     * @var string
     */
    public $View;
    /**
     * When 
     * multiple views are on a page, this identifies one of them.
     * @var string
     */
    public $ViewCount;
}