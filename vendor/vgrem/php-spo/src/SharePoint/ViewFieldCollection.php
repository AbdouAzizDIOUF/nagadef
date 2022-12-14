<?php

/**
 * Generated 2019-11-16T19:13:59+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * the collection of fields (2) in a list view.
 */
class ViewFieldCollection extends BaseEntity
{



    /**
     * Specifies 
     * the XML 
     * schema that represents the collection.It MUST 
     * NOT be NULL. It MUST be an XML fragment that 
     * conforms to the following XML schema: 
     * <xs:sequence><xs:element name="FieldRef" 
     * type="FieldRefDefinitionView" minOccurs="0" 
     * maxOccurs="unbounded" /></xs:sequence>FieldRefDefinitionView is specified in [MS-WSSCAML] 
     * section 2.3.2.19.
     * @return string
     */
    public function getSchemaXml()
    {
        if (!$this->isPropertyAvailable("SchemaXml")) {
            return null;
        }
        return $this->getProperty("SchemaXml");
    }
    /**
     * Specifies 
     * the XML 
     * schema that represents the collection.It MUST 
     * NOT be NULL. It MUST be an XML fragment that 
     * conforms to the following XML schema: 
     * <xs:sequence><xs:element name="FieldRef" 
     * type="FieldRefDefinitionView" minOccurs="0" 
     * maxOccurs="unbounded" /></xs:sequence>FieldRefDefinitionView is specified in [MS-WSSCAML] 
     * section 2.3.2.19.
     * @var string
     */
    public function setSchemaXml($value)
    {
        $this->setProperty("SchemaXml", $value, true);
    }
    /**
     * @return array
     */
    public function getItems()
    {
        return $this->getProperty("Items");
    }
    /**
     * @var array
     */
    public function setItems($value)
    {
        $this->setProperty("Items", $value, true);
    }
}