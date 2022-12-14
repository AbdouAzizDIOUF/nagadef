<?php

/**
 * Generated 2019-11-16T19:41:02+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

/**
 * Base class 
 * for a change. installation.The RelativeTime property is not included in the default 
 * scalar property set for this type.
 */
class Change extends BaseEntity
{

    /**
     * Returns an 
     * SPChangeToken that represents the change.
     * @return ChangeToken
     */
    public function getChangeToken()
    {
        return $this->getProperty("ChangeToken");
    }

    /**
     * Returns an
     * SPChangeToken that represents the change.
     * @return self
     * @var ChangeToken
     */
    public function setChangeToken($value)
    {
        $this->setProperty("ChangeToken", $value, true);
        return $this;
    }
    /**
     * Returns an 
     * SPChangeType that indicates the type of change, including adding, updating, 
     * deleting, or renaming changes, but also moving items away from or into lists 
     * and folders.
     * @return integer
     */
    public function getChangeType()
    {
        return $this->getProperty("ChangeType");
    }
    /**
     * Returns an 
     * SPChangeType that indicates the type of change, including adding, updating, 
     * deleting, or renaming changes, but also moving items away from or into lists 
     * and folders.
     * @return self
     * @var integer
     */
    public function setChangeType($value)
    {
        $this->setProperty("ChangeType", $value, true);
        return $this;
    }
    /**
     * A string 
     * representing a relative value of time.The value is composed of two parts in the format 
     * "mode|timevalue".If Mode is 0, the timevalue MUST be the text passed through 
     * as the display text for end user display.If Mode is 1, the timevalue MUST be a relative display mode 
     * in the format “bFuture|bucket|args” using the following values:§bFuture refers to whether time is later than UtcNow§bucket indicates the type of string to output§args contains the values that will be inserted into the string 
     * referenced by the bucket
     * @return string
     */
    public function getRelativeTime()
    {
        return $this->getProperty("RelativeTime");
    }
    /**
     * A string 
     * representing a relative value of time.The value is composed of two parts in the format 
     * "mode|timevalue".If Mode is 0, the timevalue MUST be the text passed through 
     * as the display text for end user display.If Mode is 1, the timevalue MUST be a relative display mode 
     * in the format “bFuture|bucket|args” using the following values:§bFuture refers to whether time is later than UtcNow§bucket indicates the type of string to output§args contains the values that will be inserted into the string 
     * referenced by the bucket
     * @var string
     */
    public function setRelativeTime($value)
    {
        $this->setProperty("RelativeTime", $value, true);
    }
    /**
     * SiteId 
     * Returns the Id of the site of the changed item
     * @return string
     */
    public function getSiteId()
    {
        return $this->getProperty("SiteId");
    }
    /**
     * SiteId 
     * Returns the Id of the site of the changed item
     * @var string
     */
    public function setSiteId($value)
    {
        $this->setProperty("SiteId", $value, true);
    }
    /**
     * A string 
     * representing a relative value of time.The value is composed of two parts in the format 
     * "mode|timevalue".If Mode is 0, the timevalue MUST be the text passed through 
     * as the display text for end user display.If Mode is 1, the timevalue MUST be a relative display mode 
     * in the format “bFuture|bucket|args” using the following values:§bFuture refers to whether time is later than UtcNow§bucket indicates the type of string to output§args contains the values that will be inserted into the string 
     * referenced by the bucket
     * @return string
     */
    public function getTime()
    {
        return $this->getProperty("Time");
    }
    /**
     * A string 
     * representing a relative value of time.The value is composed of two parts in the format 
     * "mode|timevalue".If Mode is 0, the timevalue MUST be the text passed through 
     * as the display text for end user display.If Mode is 1, the timevalue MUST be a relative display mode 
     * in the format “bFuture|bucket|args” using the following values:§bFuture refers to whether time is later than UtcNow§bucket indicates the type of string to output§args contains the values that will be inserted into the string 
     * referenced by the bucket
     * @var string
     * @return self
     */
    public function setTime($value)
    {
        $this->setProperty("Time", $value, true);
        return $this;
    }
}
