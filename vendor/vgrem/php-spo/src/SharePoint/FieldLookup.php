<?php

/**
 * Generated 2019-11-16T20:01:10+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Represents 
 * a lookup 
 * field. The field value for this class is contained in FieldLookupValue 
 * (section 3.2.5.50).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldLookup extends Field
{
    /**
     * Specifies 
     * whether the lookup field allows 
     * multiple values.
     * @return bool
     */
    public function getAllowMultipleValues()
    {
        if (!$this->isPropertyAvailable("AllowMultipleValues")) {
            return null;
        }
        return $this->getProperty("AllowMultipleValues");
    }
    /**
     * Specifies 
     * whether the lookup field allows 
     * multiple values.
     * @var bool
     */
    public function setAllowMultipleValues($value)
    {
        $this->setProperty("AllowMultipleValues", $value, true);
    }
    /**
     * Accessibility: Read Only
     * @return array
     */
    public function getDependentLookupInternalNames()
    {
        if (!$this->isPropertyAvailable("DependentLookupInternalNames")) {
            return null;
        }
        return $this->getProperty("DependentLookupInternalNames");
    }
    /**
     * Accessibility: Read Only
     * @var array
     */
    public function setDependentLookupInternalNames($value)
    {
        $this->setProperty("DependentLookupInternalNames", $value, true);
    }
    /**
     * Check 
     * whether a lookup field is a dependent lookup field.
     * @return bool
     */
    public function getIsDependentLookup()
    {
        if (!$this->isPropertyAvailable("IsDependentLookup")) {
            return null;
        }
        return $this->getProperty("IsDependentLookup");
    }
    /**
     * Check 
     * whether a lookup field is a dependent lookup field.
     * @var bool
     */
    public function setIsDependentLookup($value)
    {
        $this->setProperty("IsDependentLookup", $value, true);
    }
    /**
     * Specifies 
     * whether the lookup field is a relationship 
     * lookup field. It determines whether this lookup field is returned by 
     * Microsoft.SharePoint.Client.List.GetRelatedField.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that the field 
     *   (2) belongs to is an external list.
     * @return bool
     */
    public function getIsRelationship()
    {
        if (!$this->isPropertyAvailable("IsRelationship")) {
            return null;
        }
        return $this->getProperty("IsRelationship");
    }
    /**
     * Specifies 
     * whether the lookup field is a relationship 
     * lookup field. It determines whether this lookup field is returned by 
     * Microsoft.SharePoint.Client.List.GetRelatedField.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that the field 
     *   (2) belongs to is an external list.
     * @var bool
     */
    public function setIsRelationship($value)
    {
        $this->setProperty("IsRelationship", $value, true);
    }
    /**
     * Specifies 
     * the internal name of the field (2) in the 
     * target list, used to 
     * display lookup values.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that this field (2) belongs to is an external 
     *   list.
     * @return string
     */
    public function getLookupField()
    {
        if (!$this->isPropertyAvailable("LookupField")) {
            return null;
        }
        return $this->getProperty("LookupField");
    }
    /**
     * Specifies 
     * the internal name of the field (2) in the 
     * target list, used to 
     * display lookup values.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that this field (2) belongs to is an external 
     *   list.
     * @var string
     */
    public function setLookupField($value)
    {
        $this->setProperty("LookupField", $value, true);
    }
    /**
     * Specifies 
     * the list 
     * identifier of the target list that contains 
     * the lookup 
     * field.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that this field (2) belongs 
     *   to is an external list.
     * @return string
     */
    public function getLookupList()
    {
        if (!$this->isPropertyAvailable("LookupList")) {
            return null;
        }
        return $this->getProperty("LookupList");
    }
    /**
     * Specifies 
     * the list 
     * identifier of the target list that contains 
     * the lookup 
     * field.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that this field (2) belongs 
     *   to is an external list.
     * @var string
     */
    public function setLookupList($value)
    {
        $this->setProperty("LookupList", $value, true);
    }
    /**
     * Specifies 
     * the GUID that identifies the site (2) containing 
     * the list 
     * that contains the field (2) used as 
     * the lookup values.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that this field (2) belongs to is an external 
     *   list.
     * @return string
     */
    public function getLookupWebId()
    {
        if (!$this->isPropertyAvailable("LookupWebId")) {
            return null;
        }
        return $this->getProperty("LookupWebId");
    }
    /**
     * Specifies 
     * the GUID that identifies the site (2) containing 
     * the list 
     * that contains the field (2) used as 
     * the lookup values.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that this field (2) belongs to is an external 
     *   list.
     * @var string
     */
    public function setLookupWebId($value)
    {
        $this->setProperty("LookupWebId", $value, true);
    }
    /**
     * Specifies 
     * the primary 
     * lookup field identifier if this is a dependent lookup field. 
     * Otherwise, it is an empty string.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionWhen the list that this field 
     *   (2) belongs to is an external list.
     * @return string
     */
    public function getPrimaryFieldId()
    {
        if (!$this->isPropertyAvailable("PrimaryFieldId")) {
            return null;
        }
        return $this->getProperty("PrimaryFieldId");
    }
    /**
     * Specifies 
     * the primary 
     * lookup field identifier if this is a dependent lookup field. 
     * Otherwise, it is an empty string.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionWhen the list that this field 
     *   (2) belongs to is an external list.
     * @var string
     */
    public function setPrimaryFieldId($value)
    {
        $this->setProperty("PrimaryFieldId", $value, true);
    }
    /**
     * Gets or 
     * sets a value that specifies the relationship delete behavior 
     * of the lookup field.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that the field 
     *   (2) belongs to is an external list.
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
     * Gets or 
     * sets a value that specifies the relationship delete behavior 
     * of the lookup field.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe list that the field 
     *   (2) belongs to is an external list.
     * @var integer
     */
    public function setRelationshipDeleteBehavior($value)
    {
        $this->setProperty("RelationshipDeleteBehavior", $value, true);
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether to allow values with unlimited text 
     * in the lookup field.
     * @return bool
     */
    public function getUnlimitedLengthInDocumentLibrary()
    {
        if (!$this->isPropertyAvailable("UnlimitedLengthInDocumentLibrary")) {
            return null;
        }
        return $this->getProperty("UnlimitedLengthInDocumentLibrary");
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether to allow values with unlimited text 
     * in the lookup field.
     * @var bool
     */
    public function setUnlimitedLengthInDocumentLibrary($value)
    {
        $this->setProperty("UnlimitedLengthInDocumentLibrary", $value, true);
    }
}