<?php

/**
 * Generated 2020-05-26T22:00:28+00:00 16.0.20113.12008
 */
namespace Office365\SharePoint;

use Office365\Runtime\ResourcePath;
/**
 * Represents 
 * an alert, which generates periodic e-mail notifications sent to a user about 
 * the list, list item, document, or document library to which the alert applies. 
 * SPAlert provides information about the alert, such as which alert template is 
 * used, the alert frequency, and the UserID of the user who created the alert.The AlertTime, ItemID, ListID and ListUrl properties are not 
 * included in the default scalar property set 
 * for this type.
 */
class Alert extends BaseEntity
{
    /**
     * Gets or 
     * sets the time interval for sending the alert.
     * @return integer
     */
    public function getAlertFrequency()
    {
        if (!$this->isPropertyAvailable("AlertFrequency")) {
            return null;
        }
        return $this->getProperty("AlertFrequency");
    }
    /**
     * Gets or 
     * sets the time interval for sending the alert.
     * @var integer
     */
    public function setAlertFrequency($value)
    {
        $this->setProperty("AlertFrequency", $value, true);
    }
    /**
     * Gets the 
     * string representing the alert template name.
     * @return string
     */
    public function getAlertTemplateName()
    {
        if (!$this->isPropertyAvailable("AlertTemplateName")) {
            return null;
        }
        return $this->getProperty("AlertTemplateName");
    }
    /**
     * Gets the 
     * string representing the alert template name.
     * @var string
     */
    public function setAlertTemplateName($value)
    {
        $this->setProperty("AlertTemplateName", $value, true);
    }
    /**
     * Gets or 
     * sets the date and time for sending the alert.
     * @return string
     */
    public function getAlertTime()
    {
        if (!$this->isPropertyAvailable("AlertTime")) {
            return null;
        }
        return $this->getProperty("AlertTime");
    }
    /**
     * Gets or 
     * sets the date and time for sending the alert.
     * @var string
     */
    public function setAlertTime($value)
    {
        $this->setProperty("AlertTime", $value, true);
    }
    /**
     * Gets the 
     * type of object to which the alert applies, which can be a list or document 
     * library, a list item or document, or a custom object.
     * @return integer
     */
    public function getAlertType()
    {
        if (!$this->isPropertyAvailable("AlertType")) {
            return null;
        }
        return $this->getProperty("AlertType");
    }
    /**
     * Gets the 
     * type of object to which the alert applies, which can be a list or document 
     * library, a list item or document, or a custom object.
     * @var integer
     */
    public function setAlertType($value)
    {
        $this->setProperty("AlertType", $value, true);
    }
    /**
     * Gets or 
     * sets a Boolean value that causes daily and weekly alerts to trigger, even if 
     * there is no matching event.
     * @return bool
     */
    public function getAlwaysNotify()
    {
        if (!$this->isPropertyAvailable("AlwaysNotify")) {
            return null;
        }
        return $this->getProperty("AlwaysNotify");
    }
    /**
     * Gets or 
     * sets a Boolean value that causes daily and weekly alerts to trigger, even if 
     * there is no matching event.
     * @var bool
     */
    public function setAlwaysNotify($value)
    {
        $this->setProperty("AlwaysNotify", $value, true);
    }
    /**
     * The 
     * DeliveryChannels of the alert, could be any combination of Email, Sms.
     * @return integer
     */
    public function getDeliveryChannels()
    {
        if (!$this->isPropertyAvailable("DeliveryChannels")) {
            return null;
        }
        return $this->getProperty("DeliveryChannels");
    }
    /**
     * The 
     * DeliveryChannels of the alert, could be any combination of Email, Sms.
     * @var integer
     */
    public function setDeliveryChannels($value)
    {
        $this->setProperty("DeliveryChannels", $value, true);
    }
    /**
     * Gets or 
     * sets the type of event to which the alert applies.
     * @return integer
     */
    public function getEventType()
    {
        if (!$this->isPropertyAvailable("EventType")) {
            return null;
        }
        return $this->getProperty("EventType");
    }
    /**
     * Gets or 
     * sets the type of event to which the alert applies.
     * @var integer
     */
    public function setEventType($value)
    {
        $this->setProperty("EventType", $value, true);
    }
    /**
     * Gets or 
     * sets the syntax query in Collaborative Application Markup Language (CAML) for a 
     * filter to apply to the alert.
     * @return string
     */
    public function getFilter()
    {
        if (!$this->isPropertyAvailable("Filter")) {
            return null;
        }
        return $this->getProperty("Filter");
    }
    /**
     * Gets or 
     * sets the syntax query in Collaborative Application Markup Language (CAML) for a 
     * filter to apply to the alert.
     * @var string
     */
    public function setFilter($value)
    {
        $this->setProperty("Filter", $value, true);
    }
    /**
     * Gets the 
     * GUID that identifies the alert.
     * @return string
     */
    public function getID()
    {
        if (!$this->isPropertyAvailable("ID")) {
            return null;
        }
        return $this->getProperty("ID");
    }
    /**
     * Gets the 
     * GUID that identifies the alert.
     * @var string
     */
    public function setID($value)
    {
        $this->setProperty("ID", $value, true);
    }
    /**
     * Gets the 
     * integer that identifies the list item or document to which an alert applies in 
     * the parent collection of list items.
     * @return integer
     */
    public function getItemID()
    {
        if (!$this->isPropertyAvailable("ItemID")) {
            return null;
        }
        return $this->getProperty("ItemID");
    }
    /**
     * Gets the 
     * integer that identifies the list item or document to which an alert applies in 
     * the parent collection of list items.
     * @var integer
     */
    public function setItemID($value)
    {
        $this->setProperty("ItemID", $value, true);
    }
    /**
     * Gets the 
     * GUID of the list or document library to which the alert applies.
     * @return string
     */
    public function getListID()
    {
        if (!$this->isPropertyAvailable("ListID")) {
            return null;
        }
        return $this->getProperty("ListID");
    }
    /**
     * Gets the 
     * GUID of the list or document library to which the alert applies.
     * @var string
     */
    public function setListID($value)
    {
        $this->setProperty("ListID", $value, true);
    }
    /**
     * Gets the 
     * site-relative URL of the list to which the alert applies.
     * @return string
     */
    public function getListUrl()
    {
        if (!$this->isPropertyAvailable("ListUrl")) {
            return null;
        }
        return $this->getProperty("ListUrl");
    }
    /**
     * Gets the 
     * site-relative URL of the list to which the alert applies.
     * @var string
     */
    public function setListUrl($value)
    {
        $this->setProperty("ListUrl", $value, true);
    }
    /**
     * @return array
     */
    public function getProperties()
    {
        if (!$this->isPropertyAvailable("Properties")) {
            return null;
        }
        return $this->getProperty("Properties");
    }
    /**
     * @var array
     */
    public function setProperties($value)
    {
        $this->setProperty("Properties", $value, true);
    }
    /**
     * Gets or 
     * sets the status of the alert.
     * @return integer
     */
    public function getStatus()
    {
        if (!$this->isPropertyAvailable("Status")) {
            return null;
        }
        return $this->getProperty("Status");
    }
    /**
     * Gets or 
     * sets the status of the alert.
     * @var integer
     */
    public function setStatus($value)
    {
        $this->setProperty("Status", $value, true);
    }
    /**
     * Gets or 
     * sets the title of the alert as displayed in the user interface.
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * Gets or 
     * sets the title of the alert as displayed in the user interface.
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * Gets the 
     * ID of the user who created the alert.
     * @return integer
     */
    public function getUserId()
    {
        if (!$this->isPropertyAvailable("UserId")) {
            return null;
        }
        return $this->getProperty("UserId");
    }
    /**
     * Gets the 
     * ID of the user who created the alert.
     * @var integer
     */
    public function setUserId($value)
    {
        $this->setProperty("UserId", $value, true);
    }
    /**
     * Gets the 
     * integer that identifies the list item or document to which an alert applies in 
     * the parent collection of list items.
     * @return ListItem
     */
    public function getItem()
    {
        if (!$this->isPropertyAvailable("Item")) {
            $this->setProperty("Item", new ListItem($this->getContext(), new ResourcePath("Item", $this->getResourcePath())));
        }
        return $this->getProperty("Item");
    }
    /**
     * Gets the 
     * ID of the user who created the alert.
     * @return User
     */
    public function getUser()
    {
        if (!$this->isPropertyAvailable("User")) {
            $this->setProperty("User", new User($this->getContext(), new ResourcePath("User", $this->getResourcePath())));
        }
        return $this->getProperty("User");
    }
    /**
     * Gets the 
     * GUID of the list or document library to which the alert applies.
     * @return SPList
     */
    public function getList()
    {
        if (!$this->isPropertyAvailable("List")) {
            $this->setProperty("List", new SPList($this->getContext(), new ResourcePath("List", $this->getResourcePath())));
        }
        return $this->getProperty("List");
    }
}