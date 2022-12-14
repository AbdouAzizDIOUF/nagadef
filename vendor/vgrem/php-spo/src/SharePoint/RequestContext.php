<?php

/**
 * Generated 2020-01-12T21:00:13+00:00 16.0.19527.12070
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

/**
 * Provides 
 * basic WSS context information: site, web, list, and list item.Use this class to return context information about such 
 * objects as the current Web application, site collection, site, list, or list 
 * item.
 */
class RequestContext extends ClientObject
{
    /**
     * @return Site
     */
    public function getSite()
    {
        if (!$this->isPropertyAvailable("Site")) {
            $this->setProperty("Site", new Site($this->getContext(),
                new ResourcePath("Site", $this->getResourcePath())));
        }
        return $this->getProperty("Site");
    }
    /**
     * @return Web
     */
    public function getWeb()
    {
        if (!$this->isPropertyAvailable("Web")) {
            $this->setProperty("Web", new Web($this->getContext(),
                new ResourcePath("Web", $this->getResourcePath())));
        }
        return $this->getProperty("Web");
    }
    /**
     * @return RequestContext
     */
    public function getCurrent()
    {
        if (!$this->isPropertyAvailable("Current")) {
            $this->setProperty("Current", new RequestContext($this->getContext(),
                new ResourcePath("Current", $this->getResourcePath())));
        }
        return $this->getProperty("Current");
    }
    /**
     * Returns 
     * the list that is associated with the Windows SharePoint Services context.
     * @return SPList
     */
    public function getList()
    {
        if (!$this->isPropertyAvailable("List")) {
            $this->setProperty("List", new SPList($this->getContext(),
                new ResourcePath("List", $this->getResourcePath())));
        }
        return $this->getProperty("List");
    }
}
