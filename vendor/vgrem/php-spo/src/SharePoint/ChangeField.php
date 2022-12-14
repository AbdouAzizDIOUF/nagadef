<?php

/**
 * Generated 2019-11-16T19:41:02+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a change on a field (2).The RelativeTime property is not included in the default 
 * scalar property set for this type.
 */
class ChangeField extends Change
{

    /**
     * Identifies 
     * the changed field (2).Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe field identifier 
     *   in the change fields (2) item of the change collection is NULL.
     * @return string
     */
    public function getFieldId()
    {
        return $this->getProperty("FieldId");
    }
    /**
     * Identifies 
     * the changed field (2).Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe field identifier 
     *   in the change fields (2) item of the change collection is NULL.
     * @var string
     */
    public function setFieldId($value)
    {
        $this->setProperty("FieldId", $value, true);
    }
    /**
     * Identifies 
     * the site 
     * (2) that contains the changed field (2).Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe site identifier in 
     *   the change fields (2) item of the change collection is NULL.
     * @return string
     */
    public function getWebId()
    {
        return $this->getProperty("WebId");
    }
    /**
     * Identifies 
     * the site 
     * (2) that contains the changed field (2).Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionThe site identifier in 
     *   the change fields (2) item of the change collection is NULL.
     * @var string
     */
    public function setWebId($value)
    {
        $this->setProperty("WebId", $value, true);
    }
}
