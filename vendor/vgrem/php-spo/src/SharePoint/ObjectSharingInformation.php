<?php

/**
 * Generated 2019-11-16T19:38:03+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
/**
 * Provides 
 * information about the sharing state of a securable object.<228>
 */
class ObjectSharingInformation extends ClientObject
{
    /**
     * Provides 
     * the URL 
     * that allows an anonymous user to edit the securable object.If such a 
     * URL is not available, this property will provide an empty string.
     * @return string
     */
    public function getAnonymousEditLink()
    {
        if (!$this->isPropertyAvailable("AnonymousEditLink")) {
            return null;
        }
        return $this->getProperty("AnonymousEditLink");
    }
    /**
     * Provides 
     * the URL 
     * that allows an anonymous user to edit the securable object.If such a 
     * URL is not available, this property will provide an empty string.
     * @var string
     */
    public function setAnonymousEditLink($value)
    {
        $this->setProperty("AnonymousEditLink", $value, true);
    }
    /**
     * Provides 
     * the URL 
     * that allows an anonymous user to view the securable object.If such a 
     * URL is not available, this property will provide an empty string.
     * @return string
     */
    public function getAnonymousViewLink()
    {
        if (!$this->isPropertyAvailable("AnonymousViewLink")) {
            return null;
        }
        return $this->getProperty("AnonymousViewLink");
    }
    /**
     * Provides 
     * the URL 
     * that allows an anonymous user to view the securable object.If such a 
     * URL is not available, this property will provide an empty string.
     * @var string
     */
    public function setAnonymousViewLink($value)
    {
        $this->setProperty("AnonymousViewLink", $value, true);
    }
    /**
     * Indicates 
     * whether the current securable object can 
     * be shared.
     * @return bool
     */
    public function getCanBeShared()
    {
        if (!$this->isPropertyAvailable("CanBeShared")) {
            return null;
        }
        return $this->getProperty("CanBeShared");
    }
    /**
     * Indicates 
     * whether the current securable object can 
     * be shared.
     * @var bool
     */
    public function setCanBeShared($value)
    {
        $this->setProperty("CanBeShared", $value, true);
    }
    /**
     * Indicates 
     * whether the current securable object can 
     * be unshared.
     * @return bool
     */
    public function getCanBeUnshared()
    {
        if (!$this->isPropertyAvailable("CanBeUnshared")) {
            return null;
        }
        return $this->getProperty("CanBeUnshared");
    }
    /**
     * Indicates 
     * whether the current securable object can 
     * be unshared.
     * @var bool
     */
    public function setCanBeUnshared($value)
    {
        $this->setProperty("CanBeUnshared", $value, true);
    }
    /**
     * Specifies 
     * whether the current user is allowed to change the permissions of the securable 
     * object.
     * @return bool
     */
    public function getCanManagePermissions()
    {
        if (!$this->isPropertyAvailable("CanManagePermissions")) {
            return null;
        }
        return $this->getProperty("CanManagePermissions");
    }
    /**
     * Specifies 
     * whether the current user is allowed to change the permissions of the securable 
     * object.
     * @var bool
     */
    public function setCanManagePermissions($value)
    {
        $this->setProperty("CanManagePermissions", $value, true);
    }
    /**
     * Provides 
     * information about whether there are any pending access requests for the securable 
     * object.This 
     * information is only provided if the current user has sufficient permissions 
     * to view any pending access requests. If the current user does not have such 
     * permissions, this property will return false.
     * @return bool
     */
    public function getHasPendingAccessRequests()
    {
        if (!$this->isPropertyAvailable("HasPendingAccessRequests")) {
            return null;
        }
        return $this->getProperty("HasPendingAccessRequests");
    }
    /**
     * Provides 
     * information about whether there are any pending access requests for the securable 
     * object.This 
     * information is only provided if the current user has sufficient permissions 
     * to view any pending access requests. If the current user does not have such 
     * permissions, this property will return false.
     * @var bool
     */
    public function setHasPendingAccessRequests($value)
    {
        $this->setProperty("HasPendingAccessRequests", $value, true);
    }
    /**
     * Indicates 
     * whether the object sharing information contains permissions 
     * information in addition to the identities of the users who have access to the securable 
     * object.
     * @return bool
     */
    public function getHasPermissionLevels()
    {
        if (!$this->isPropertyAvailable("HasPermissionLevels")) {
            return null;
        }
        return $this->getProperty("HasPermissionLevels");
    }
    /**
     * Indicates 
     * whether the object sharing information contains permissions 
     * information in addition to the identities of the users who have access to the securable 
     * object.
     * @var bool
     */
    public function setHasPermissionLevels($value)
    {
        $this->setProperty("HasPermissionLevels", $value, true);
    }
    /**
     * Indicates 
     * whether the current selection is a folder.
     * @return bool
     */
    public function getIsFolder()
    {
        if (!$this->isPropertyAvailable("IsFolder")) {
            return null;
        }
        return $this->getProperty("IsFolder");
    }
    /**
     * Indicates 
     * whether the current selection is a folder.
     * @var bool
     */
    public function setIsFolder($value)
    {
        $this->setProperty("IsFolder", $value, true);
    }
    /**
     * Specifies 
     * whether the securable object is 
     * shared with the user making the current request.
     * @return bool
     */
    public function getIsSharedWithCurrentUser()
    {
        if (!$this->isPropertyAvailable("IsSharedWithCurrentUser")) {
            return null;
        }
        return $this->getProperty("IsSharedWithCurrentUser");
    }
    /**
     * Specifies 
     * whether the securable object is 
     * shared with the user making the current request.
     * @var bool
     */
    public function setIsSharedWithCurrentUser($value)
    {
        $this->setProperty("IsSharedWithCurrentUser", $value, true);
    }
    /**
     * Specifies 
     * whether the securable object can 
     * be accessed by an anonymous user.
     * @return bool
     */
    public function getIsSharedWithGuest()
    {
        if (!$this->isPropertyAvailable("IsSharedWithGuest")) {
            return null;
        }
        return $this->getProperty("IsSharedWithGuest");
    }
    /**
     * Specifies 
     * whether the securable object can 
     * be accessed by an anonymous user.
     * @var bool
     */
    public function setIsSharedWithGuest($value)
    {
        $this->setProperty("IsSharedWithGuest", $value, true);
    }
    /**
     * Specifies 
     * whether the securable object is 
     * shared with at least 30 users or with at least one security group.
     * @return bool
     */
    public function getIsSharedWithMany()
    {
        if (!$this->isPropertyAvailable("IsSharedWithMany")) {
            return null;
        }
        return $this->getProperty("IsSharedWithMany");
    }
    /**
     * Specifies 
     * whether the securable object is 
     * shared with at least 30 users or with at least one security group.
     * @var bool
     */
    public function setIsSharedWithMany($value)
    {
        $this->setProperty("IsSharedWithMany", $value, true);
    }
    /**
     * Specifies 
     * whether the securable object is 
     * shared with at least one security group.
     * @return bool
     */
    public function getIsSharedWithSecurityGroup()
    {
        if (!$this->isPropertyAvailable("IsSharedWithSecurityGroup")) {
            return null;
        }
        return $this->getProperty("IsSharedWithSecurityGroup");
    }
    /**
     * Specifies 
     * whether the securable object is 
     * shared with at least one security group.
     * @var bool
     */
    public function setIsSharedWithSecurityGroup($value)
    {
        $this->setProperty("IsSharedWithSecurityGroup", $value, true);
    }
    /**
     * Provides a 
     * URL 
     * to a location that describes any access requests present in the site (2).This 
     * information is only provided if the current user has sufficient permissions 
     * to view any pending access requests. If the current user does not have such 
     * permissions, this property will return an empty string.
     * @return string
     */
    public function getPendingAccessRequestsLink()
    {
        if (!$this->isPropertyAvailable("PendingAccessRequestsLink")) {
            return null;
        }
        return $this->getProperty("PendingAccessRequestsLink");
    }
    /**
     * Provides a 
     * URL 
     * to a location that describes any access requests present in the site (2).This 
     * information is only provided if the current user has sufficient permissions 
     * to view any pending access requests. If the current user does not have such 
     * permissions, this property will return an empty string.
     * @var string
     */
    public function setPendingAccessRequestsLink($value)
    {
        $this->setProperty("PendingAccessRequestsLink", $value, true);
    }
    /**
     * Indicates 
     * the number of files under the directory if the current selection is a directory 
     * (IsFolder is true).
     * @return integer
     */
    public function getTotalFileCount()
    {
        if (!$this->isPropertyAvailable("TotalFileCount")) {
            return null;
        }
        return $this->getProperty("TotalFileCount");
    }
    /**
     * Indicates 
     * the number of files under the directory if the current selection is a directory 
     * (IsFolder is true).
     * @var integer
     */
    public function setTotalFileCount($value)
    {
        $this->setProperty("TotalFileCount", $value, true);
    }
}