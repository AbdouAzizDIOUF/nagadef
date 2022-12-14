<?php

/**
 * Generated 2019-11-16T17:57:50+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\Paths\ServiceOperationPath;

/**
 * Defines a 
 * single role definition, 
 * including a name, description, management properties, and a set of rights.
 */
class RoleDefinition extends Entity
{

    /**
     * Specifies 
     * the base permissions for the role definition.When 
     * assigning values to the property, use bitwise AND, OR, and XOR 
     * operators with values from the BasePermissions uint. It MUST NOT be NULL. Exceptions: Error CodeError Type NameCondition-1System.InvalidOperationExceptionSite (2) inherits 
     *   permission levels from a parent site, and 
     *   permission levels cannot be customized. 
     * @return BasePermissions
     */
    public function getBasePermissions()
    {
        if (!$this->isPropertyAvailable("BasePermissions")) {
            return null;
        }
        return $this->getProperty("BasePermissions");
    }
    /**
     * Specifies
     * the base permissions for the role definition.When
     * assigning values to the property, use bitwise AND, OR, and XOR
     * operators with values from the BasePermissions uint. It MUST NOT be NULL. Exceptions: Error CodeError Type NameCondition-1System.InvalidOperationExceptionSite (2) inherits
     *   permission levels from a parent site, and
     *   permission levels cannot be customized.
     * @var BasePermissions
     */
    public function setBasePermissions($value)
    {
        $this->setProperty("BasePermissions", $value, true);
    }
    /**
     * Specifies 
     * the description of the role definition.Its length 
     * MUST be equal to or less than 512. Exceptions: Error CodeError Type NameCondition-1System.InvalidOperationExceptionSite (2) inherits 
     *   permission levels from a parent site, and 
     *   permission levels cannot be customized.
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * Specifies
     * the description of the role definition.Its length
     * MUST be equal to or less than 512. Exceptions: Error CodeError Type NameCondition-1System.InvalidOperationExceptionSite (2) inherits
     *   permission levels from a parent site, and
     *   permission levels cannot be customized.
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * Specifies 
     * whether the role definition is 
     * displayed.
     * @return bool
     */
    public function getHidden()
    {
        if (!$this->isPropertyAvailable("Hidden")) {
            return null;
        }
        return $this->getProperty("Hidden");
    }
    /**
     * Specifies 
     * the identifier of the role definition.Its value 
     * MUST be equal to or greater than 1073741824. 
     * @return integer
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * Specifies 
     * the role 
     * definition name.It MUST 
     * NOT be NULL. It MUST NOT be empty. Its length MUST be equal to or less than 
     * 255. MUST not contain any of the following characters: 
     * /\[]:|<>+=;,?*'"@Exceptions: Error CodeError Type NameCondition-1System.InvalidOperationExceptionRole definition is inherited from a parent 
     *   site.
     * @return string
     */
    public function getName()
    {
        if (!$this->isPropertyAvailable("Name")) {
            return null;
        }
        return $this->getProperty("Name");
    }
    /**
     * Specifies 
     * the order position of the object (1) in the site 
     * collection Permission Levels page.Exceptions: 
     * Error CodeError Type NameCondition-1System.InvalidOperationExceptionThe user cannot customize permission levels in a site 
     *   (2) with inherited permission levels.
     * @return integer
     */
    public function getOrder()
    {
        if (!$this->isPropertyAvailable("Order")) {
            return null;
        }
        return $this->getProperty("Order");
    }
    /**
     * Specifies 
     * the order position of the object (1) in the site 
     * collection Permission Levels page.Exceptions: 
     * Error CodeError Type NameCondition-1System.InvalidOperationExceptionThe user cannot customize permission levels in a site 
     *   (2) with inherited permission levels.
     * @var integer
     */
    public function setOrder($value)
    {
        $this->setProperty("Order", $value, true);
    }
    /**
     * Specifies 
     * the type of the role definition.Its value 
     * MUST be equal to or greater than 0. Its value MUST be equal to or less than 5. 
     * @return integer
     */
    public function getRoleTypeKind()
    {
        if (!$this->isPropertyAvailable("RoleTypeKind")) {
            return null;
        }
        return $this->getProperty("RoleTypeKind");
    }
    /**
     * Specifies 
     * whether the role definition is 
     * displayed.
     * @var bool
     */
    public function setHidden($value)
    {
        $this->setProperty("Hidden", $value, true);
    }
    /**
     * Specifies 
     * the identifier of the role definition.Its value 
     * MUST be equal to or greater than 1073741824. 
     * @var integer
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }

    /**
     * Specifies
     * the role
     * definition name.It MUST
     * NOT be NULL. It MUST NOT be empty. Its length MUST be equal to or less than
     * 255. MUST not contain any of the following characters:
     * /\[]:|<>+=;,?*'"@Exceptions: Error CodeError Type NameCondition-1System.InvalidOperationExceptionRole definition is inherited from a parent
     *   site.
     * @return RoleDefinition
     * @var string
     */
    public function setName($value)
    {
        return $this->setProperty("Name", $value, true);
    }

    /**
     * Specifies
     * the type of the role definition.Its value
     * MUST be equal to or greater than 0. Its value MUST be equal to or less than 5.
     * @return RoleDefinition
     * @var integer
     */
    public function setRoleTypeKind($value)
    {
        return $this->setProperty("RoleTypeKind", $value, true);
    }


    public function setProperty($name, $value, $persistChanges = true)
    {
        if($name == "Id" && is_null($this->resourcePath)){
            $this->resourcePath = new ServiceOperationPath(
                "GetById",
                array($value),
                $this->parentCollection->getResourcePath());
        }
        return parent::setProperty($name, $value, $persistChanges);
    }

}