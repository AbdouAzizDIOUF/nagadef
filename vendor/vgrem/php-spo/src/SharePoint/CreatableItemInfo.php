<?php

/**
 * Generated 2019-10-12T15:24:30+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Information 
 * on a creatable item: what the item is and where to go to create it. 
 * Alternatively, the information provided here can be used to call CreateDocument 
 * (section 3.2.5.79.2.2.9) or CreateDocumentAndGetEditLink 
 * (section 3.2.5.79.2.1.13).
 */
class CreatableItemInfo extends ClientValue
{
    /** 
     * The 
     * enumeration value of this item's type, corresponding to DocumentTemplateType 
     * (section 3.2.5.288).
     * @var integer
     */
    public $DocumentTemplate;
    /** 
     * The file 
     * extension of the item to be created.
     * @var string
     */
    public $FileExtension;
    /** 
     * The name 
     * of the item's type (e.g. Word or PowerPoint).
     * @var string
     */
    public $ItemType;
}