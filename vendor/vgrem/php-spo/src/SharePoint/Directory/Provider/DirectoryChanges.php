<?php

/**
 * Generated 2019-10-12T19:34:55+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\Directory\Provider;

use Office365\Runtime\ClientValue;

class DirectoryChanges extends ClientValue
{
    /**
     * @var integer
     */
    public $DirectoryObjectSubType;
    /**
     * @var integer
     */
    public $DirectoryObjectType;
    /**
     * @var string
     */
    public $Id;
    /**
     * @var array
     */
    public $LinkChanges;
    /**
     * @var array
     */
    public $PropertyChanges;
}