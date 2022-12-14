<?php

/**
 * Generated 2019-11-16T20:28:28+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint\WebParts;

use Office365\SharePoint\BaseEntity;

/**
 * Represents 
 * a Web Part on a Web Part 
 * Page. 
 */
class WebPart extends BaseEntity
{
    /**
     * Gets or 
     * sets the export mode of a Web Part.
     * @return integer
     */
    public function getExportMode()
    {
        if (!$this->isPropertyAvailable("ExportMode")) {
            return null;
        }
        return $this->getProperty("ExportMode");
    }
    /**
     * Gets or 
     * sets the export mode of a Web Part.
     * @var integer
     */
    public function setExportMode($value)
    {
        $this->setProperty("ExportMode", $value, true);
    }
    /**
     * Specifies 
     * whether a Web Part is 
     * displayed on a Web Part Page.If 
     * "true", the Web Part MUST be hidden. Web Parts that are hidden MUST 
     * NOT be displayed on the page to the end user, but SHOULD still participate 
     * normally in the rendering of the page. The default value is "false".
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
     * whether a Web Part is 
     * displayed on a Web Part Page.If 
     * "true", the Web Part MUST be hidden. Web Parts that are hidden MUST 
     * NOT be displayed on the page to the end user, but SHOULD still participate 
     * normally in the rendering of the page. The default value is "false".
     * @var bool
     */
    public function setHidden($value)
    {
        $this->setProperty("Hidden", $value, true);
    }
    /**
     * Specifies 
     * whether a Web Part is 
     * currently closed on a Web Part Page.If 
     * "true", the Web Part is closed. Web Parts that are closed MUST NOT be 
     * displayed on the page, and MUST NOT participate normally in the rendering of 
     * the page. The default value is "false".To open or close a Web Part, see WebPartDefinition.OpenWebPart, 
     * as specified in section 3.2.5.149.2.1.4, 
     * and WebPartDefinition.CloseWebPart, as specified in section 3.2.5.149.2.1.1.
     * @return bool
     */
    public function getIsClosed()
    {
        if (!$this->isPropertyAvailable("IsClosed")) {
            return null;
        }
        return $this->getProperty("IsClosed");
    }
    /**
     * Specifies 
     * whether a Web Part is 
     * currently closed on a Web Part Page.If 
     * "true", the Web Part is closed. Web Parts that are closed MUST NOT be 
     * displayed on the page, and MUST NOT participate normally in the rendering of 
     * the page. The default value is "false".To open or close a Web Part, see WebPartDefinition.OpenWebPart, 
     * as specified in section 3.2.5.149.2.1.4, 
     * and WebPartDefinition.CloseWebPart, as specified in section 3.2.5.149.2.1.1.
     * @var bool
     */
    public function setIsClosed($value)
    {
        $this->setProperty("IsClosed", $value, true);
    }
    /**
     * Specifies 
     * a string that is concatenated with the Title property value to form a 
     * complete title for a Web Part. The 
     * default value is an empty string ("").
     * @return string
     */
    public function getSubtitle()
    {
        if (!$this->isPropertyAvailable("Subtitle")) {
            return null;
        }
        return $this->getProperty("Subtitle");
    }
    /**
     * Specifies 
     * a string that is concatenated with the Title property value to form a 
     * complete title for a Web Part. The 
     * default value is an empty string ("").
     * @var string
     */
    public function setSubtitle($value)
    {
        $this->setProperty("Subtitle", $value, true);
    }
    /**
     * Specifies 
     * the title of a Web Part.If this 
     * property is set to NULL, the title of the Web Part MUST instead be reset to its 
     * default value if one is specified in the Web Part's definition.
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
     * Specifies 
     * the title of a Web Part.If this 
     * property is set to NULL, the title of the Web Part MUST instead be reset to its 
     * default value if one is specified in the Web Part's definition.
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * Specifies 
     * a URL 
     * to the supplemental information about a Web Part.If this 
     * property is set to NULL, the title URL of the Web Part MUST instead be reset to 
     * its default value if one is specified in the Web Part's definition.The value of this property SHOULD be a valid URL, but the 
     * protocol server MAY accept other strings without validating them.
     * @return string
     */
    public function getTitleUrl()
    {
        if (!$this->isPropertyAvailable("TitleUrl")) {
            return null;
        }
        return $this->getProperty("TitleUrl");
    }
    /**
     * Specifies 
     * a URL 
     * to the supplemental information about a Web Part.If this 
     * property is set to NULL, the title URL of the Web Part MUST instead be reset to 
     * its default value if one is specified in the Web Part's definition.The value of this property SHOULD be a valid URL, but the 
     * protocol server MAY accept other strings without validating them.
     * @var string
     */
    public function setTitleUrl($value)
    {
        $this->setProperty("TitleUrl", $value, true);
    }
    /**
     * Specifies 
     * the index position of a Web Part within the Web Part 
     * zone.The value 
     * is the numerical order of a Web Part within the Web Part zone. The first Web 
     * Part in a Web Part zone MUST have an index value of zero.
     * @return integer
     */
    public function getZoneIndex()
    {
        if (!$this->isPropertyAvailable("ZoneIndex")) {
            return null;
        }
        return $this->getProperty("ZoneIndex");
    }
    /**
     * Specifies 
     * the index position of a Web Part within the Web Part 
     * zone.The value 
     * is the numerical order of a Web Part within the Web Part zone. The first Web 
     * Part in a Web Part zone MUST have an index value of zero.
     * @var integer
     */
    public function setZoneIndex($value)
    {
        $this->setProperty("ZoneIndex", $value, true);
    }
}