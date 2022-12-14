<?php

/**
 * Generated 2019-11-17T17:00:44+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;

/**
 * Specifies 
 * a field 
 * (2) that contains rating scale values for a survey 
 * list. To set properties, call the Update method (section 3.2.5.54.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldRatingScale extends ClientObject
{
    /**
     * @return integer
     */
    public function getGridEndNumber()
    {
        if (!$this->isPropertyAvailable("GridEndNumber")) {
            return null;
        }
        return $this->getProperty("GridEndNumber");
    }
    /**
     * @var integer
     */
    public function setGridEndNumber($value)
    {
        $this->setProperty("GridEndNumber", $value, true);
    }
    /**
     * @return string
     */
    public function getGridNAOptionText()
    {
        if (!$this->isPropertyAvailable("GridNAOptionText")) {
            return null;
        }
        return $this->getProperty("GridNAOptionText");
    }
    /**
     * @var string
     */
    public function setGridNAOptionText($value)
    {
        $this->setProperty("GridNAOptionText", $value, true);
    }
    /**
     * @return integer
     */
    public function getGridStartNumber()
    {
        if (!$this->isPropertyAvailable("GridStartNumber")) {
            return null;
        }
        return $this->getProperty("GridStartNumber");
    }
    /**
     * @var integer
     */
    public function setGridStartNumber($value)
    {
        $this->setProperty("GridStartNumber", $value, true);
    }
    /**
     * @return string
     */
    public function getGridTextRangeAverage()
    {
        if (!$this->isPropertyAvailable("GridTextRangeAverage")) {
            return null;
        }
        return $this->getProperty("GridTextRangeAverage");
    }
    /**
     * @var string
     */
    public function setGridTextRangeAverage($value)
    {
        $this->setProperty("GridTextRangeAverage", $value, true);
    }
    /**
     * @return string
     */
    public function getGridTextRangeHigh()
    {
        if (!$this->isPropertyAvailable("GridTextRangeHigh")) {
            return null;
        }
        return $this->getProperty("GridTextRangeHigh");
    }
    /**
     * @var string
     */
    public function setGridTextRangeHigh($value)
    {
        $this->setProperty("GridTextRangeHigh", $value, true);
    }
    /**
     * @return string
     */
    public function getGridTextRangeLow()
    {
        if (!$this->isPropertyAvailable("GridTextRangeLow")) {
            return null;
        }
        return $this->getProperty("GridTextRangeLow");
    }
    /**
     * @var string
     */
    public function setGridTextRangeLow($value)
    {
        $this->setProperty("GridTextRangeLow", $value, true);
    }
    /**
     * @return integer
     */
    public function getRangeCount()
    {
        if (!$this->isPropertyAvailable("RangeCount")) {
            return null;
        }
        return $this->getProperty("RangeCount");
    }
    /**
     * @var integer
     */
    public function setRangeCount($value)
    {
        $this->setProperty("RangeCount", $value, true);
    }
}