<?php

/**
 * Generated 2020-01-12T21:40:05+00:00 16.0.19527.12070
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

/**
 * Represents 
 * a Lookup Field that points to a given list on a Web site.
 */
class RelatedField extends ClientObject
{
    /**
     * @return string
     */
    public function getFieldId()
    {
        if (!$this->isPropertyAvailable("FieldId")) {
            return null;
        }
        return $this->getProperty("FieldId");
    }
    /**
     * @var string
     */
    public function setFieldId($value)
    {
        $this->setProperty("FieldId", $value, true);
    }
    /**
     * @return string
     */
    public function getListId()
    {
        if (!$this->isPropertyAvailable("ListId")) {
            return null;
        }
        return $this->getProperty("ListId");
    }
    /**
     * @var string
     */
    public function setListId($value)
    {
        $this->setProperty("ListId", $value, true);
    }
    /**
     * @return integer
     */
    public function getRelationshipDeleteBehavior()
    {
        if (!$this->isPropertyAvailable("RelationshipDeleteBehavior")) {
            return null;
        }
        return $this->getProperty("RelationshipDeleteBehavior");
    }
    /**
     * @var integer
     */
    public function setRelationshipDeleteBehavior($value)
    {
        $this->setProperty("RelationshipDeleteBehavior", $value, true);
    }
    /**
     * @return string
     */
    public function getWebId()
    {
        if (!$this->isPropertyAvailable("WebId")) {
            return null;
        }
        return $this->getProperty("WebId");
    }
    /**
     * @var string
     */
    public function setWebId($value)
    {
        $this->setProperty("WebId", $value, true);
    }
    /**
     * Specifies 
     * the List that the corresponding Lookup Field looks up to.It MUST 
     * NOT be NULL. 
     * @return SPList
     */
    public function getLookupList()
    {
        if (!$this->isPropertyAvailable("LookupList")) {
            $this->setProperty("LookupList", new SPList($this->getContext(),
                new ResourcePath("LookupList", $this->getResourcePath())));
        }
        return $this->getProperty("LookupList");
    }
}
