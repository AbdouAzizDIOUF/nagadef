<?php

/**
 * Generated 2019-10-12T18:54:53+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * the properties of the new list item.
 */
class ListItemCreationInformationUsingPath extends ClientValue
{
    
    public $FolderPath;
    
    public $LeafName;
    /**
     * Specifies 
     * the file system object type for the item that will be created.It MUST be 
     * either FileSystemObjectType.File or FileSystemObjectType.Folder.
     * @var integer
     */
    public $UnderlyingObjectType;
}