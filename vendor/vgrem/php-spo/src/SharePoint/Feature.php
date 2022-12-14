<?php

/**
 * Generated 2019-11-17T14:35:07+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;


/**
 * The top 
 * level object representing a SharePoint Feature activation.The presence of a Feature object in a collection at the 
 * server farm, Web application, site collection, or Web site levels indicates 
 * that the feature is activated. Lack of a Feature object indicates that the 
 * object has not been activated.  
 * Use the Features properties of the Site (section 3.2.5.119) and Web 
 * (section 3.2.5.143) classes 
 * to get the collection of features that are activated in the server farm, Web 
 * application, site collection, or Web site. Use the Site (section 3.2.5.110.1.2.3) 
 * and Web (section 3.2.5.110.1.2.4) 
 * properties of the RequestContext (section 3.2.5.110) class to 
 * get the collection of features for the current site collection or site.The DisplayName property is not included in the default 
 * scalar property set for this type.
 */
class Feature extends Entity
{
    /**
     * Gets the 
     * GUID that identifies this feature.It MUST 
     * NOT be NULL. 
     * @return string
     */
    public function getDefinitionId()
    {
        if (!$this->isPropertyAvailable("DefinitionId")) {
            return null;
        }
        return $this->getProperty("DefinitionId");
    }
    /**
     * Gets the 
     * GUID that identifies this feature.It MUST 
     * NOT be NULL. 
     * @var string
     */
    public function setDefinitionId($value)
    {
        $this->setProperty("DefinitionId", $value, true);
    }
    /**
     * Gets the 
     * display name of this feature.
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * Gets the 
     * display name of this feature.
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
}