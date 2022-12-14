<?php

/**
 * Generated 2019-10-12T19:07:48+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientValue;
/**
 * Specifies 
 * metadata about a field (2).<199>
 */
class XmlSchemaFieldCreationInformation extends ClientValue
{
    /**
     * Specifies 
     * the control settings that are used while adding a field (2).
     * @var integer
     */
    public $Options;
    /**
     * Specifies 
     * the schema that defines the field (2).It MUST be 
     * NULL, empty, or an XML fragment that 
     * conforms to the FieldDefinition type as defined in [MS-WSSFO2] 
     * section 2.2.8.3.3 
     * or [MS-WSSFO3] 
     * section 2.2.7.3.3.
     * @var string
     */
    public $SchemaXml;
}