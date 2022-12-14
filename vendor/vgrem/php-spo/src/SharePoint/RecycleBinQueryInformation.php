<?php

/**
 * Generated 2019-10-12T18:54:53+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Represents 
 * information for the recycle bin query.
 */
class RecycleBinQueryInformation extends ClientValue
{
    /**
     * Gets or 
     * sets a Boolean value that specifies whether to sort in ascending order.
     * @var bool
     */
    public $IsAscending;
    /**
     * Gets or 
     * sets the Recycle Bin state of items to return in the query.
     * @var integer
     */
    public $ItemState;
    /**
     * Gets or 
     * sets the column by which to order the Recycle Bin query.
     * @var integer
     */
    public $OrderBy;
    /**
     * Gets or 
     * sets a string used to get the next set of rows in the page.
     * @var string
     */
    public $PagingInfo;
    /**
     * Gets or 
     * sets a limit for the number of items returned in the query per page.
     * @var integer
     */
    public $RowLimit;
    /**
     * Gets or 
     * sets a Boolean value that specifies whether to get items deleted by other 
     * users.
     * @var bool
     */
    public $ShowOnlyMyItems;
}