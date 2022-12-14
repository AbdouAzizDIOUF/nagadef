<?php

/**
 * Generated 2019-11-17T18:22:48+00:00 16.0.19506.12022
 */
namespace Office365\SharePoint;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;

/**
 * Specifies 
 * the locale settings of a site (2).<222>
 */
class RegionalSettings extends ClientObject
{
    /**
     * @return string
     */
    public function getAM()
    {
        if (!$this->isPropertyAvailable("AM")) {
            return null;
        }
        return $this->getProperty("AM");
    }
    /**
     * @var string
     */
    public function setAM($value)
    {
        $this->setProperty("AM", $value, true);
    }
    /**
     * @return integer
     */
    public function getCollationLCID()
    {
        if (!$this->isPropertyAvailable("CollationLCID")) {
            return null;
        }
        return $this->getProperty("CollationLCID");
    }
    /**
     * @var integer
     */
    public function setCollationLCID($value)
    {
        $this->setProperty("CollationLCID", $value, true);
    }
    /**
     * @return integer
     */
    public function getDateFormat()
    {
        if (!$this->isPropertyAvailable("DateFormat")) {
            return null;
        }
        return $this->getProperty("DateFormat");
    }
    /**
     * @var integer
     */
    public function setDateFormat($value)
    {
        $this->setProperty("DateFormat", $value, true);
    }
    /**
     * @return string
     */
    public function getDateSeparator()
    {
        if (!$this->isPropertyAvailable("DateSeparator")) {
            return null;
        }
        return $this->getProperty("DateSeparator");
    }
    /**
     * @var string
     */
    public function setDateSeparator($value)
    {
        $this->setProperty("DateSeparator", $value, true);
    }
    /**
     * @return string
     */
    public function getDecimalSeparator()
    {
        if (!$this->isPropertyAvailable("DecimalSeparator")) {
            return null;
        }
        return $this->getProperty("DecimalSeparator");
    }
    /**
     * @var string
     */
    public function setDecimalSeparator($value)
    {
        $this->setProperty("DecimalSeparator", $value, true);
    }
    /**
     * @return string
     */
    public function getDigitGrouping()
    {
        if (!$this->isPropertyAvailable("DigitGrouping")) {
            return null;
        }
        return $this->getProperty("DigitGrouping");
    }
    /**
     * @var string
     */
    public function setDigitGrouping($value)
    {
        $this->setProperty("DigitGrouping", $value, true);
    }
    /**
     * @return integer
     */
    public function getFirstDayOfWeek()
    {
        if (!$this->isPropertyAvailable("FirstDayOfWeek")) {
            return null;
        }
        return $this->getProperty("FirstDayOfWeek");
    }
    /**
     * @var integer
     */
    public function setFirstDayOfWeek($value)
    {
        $this->setProperty("FirstDayOfWeek", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsEastAsia()
    {
        if (!$this->isPropertyAvailable("IsEastAsia")) {
            return null;
        }
        return $this->getProperty("IsEastAsia");
    }
    /**
     * @var bool
     */
    public function setIsEastAsia($value)
    {
        $this->setProperty("IsEastAsia", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsRightToLeft()
    {
        if (!$this->isPropertyAvailable("IsRightToLeft")) {
            return null;
        }
        return $this->getProperty("IsRightToLeft");
    }
    /**
     * @var bool
     */
    public function setIsRightToLeft($value)
    {
        $this->setProperty("IsRightToLeft", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsUIRightToLeft()
    {
        if (!$this->isPropertyAvailable("IsUIRightToLeft")) {
            return null;
        }
        return $this->getProperty("IsUIRightToLeft");
    }
    /**
     * @var bool
     */
    public function setIsUIRightToLeft($value)
    {
        $this->setProperty("IsUIRightToLeft", $value, true);
    }
    /**
     * @return string
     */
    public function getListSeparator()
    {
        if (!$this->isPropertyAvailable("ListSeparator")) {
            return null;
        }
        return $this->getProperty("ListSeparator");
    }
    /**
     * @var string
     */
    public function setListSeparator($value)
    {
        $this->setProperty("ListSeparator", $value, true);
    }
    /**
     * @return integer
     */
    public function getLocaleId()
    {
        if (!$this->isPropertyAvailable("LocaleId")) {
            return null;
        }
        return $this->getProperty("LocaleId");
    }
    /**
     * @var integer
     */
    public function setLocaleId($value)
    {
        $this->setProperty("LocaleId", $value, true);
    }
    /**
     * @return string
     */
    public function getNegativeSign()
    {
        if (!$this->isPropertyAvailable("NegativeSign")) {
            return null;
        }
        return $this->getProperty("NegativeSign");
    }
    /**
     * @var string
     */
    public function setNegativeSign($value)
    {
        $this->setProperty("NegativeSign", $value, true);
    }
    /**
     * @return integer
     */
    public function getNegNumberMode()
    {
        if (!$this->isPropertyAvailable("NegNumberMode")) {
            return null;
        }
        return $this->getProperty("NegNumberMode");
    }
    /**
     * @var integer
     */
    public function setNegNumberMode($value)
    {
        $this->setProperty("NegNumberMode", $value, true);
    }
    /**
     * @return string
     */
    public function getPM()
    {
        if (!$this->isPropertyAvailable("PM")) {
            return null;
        }
        return $this->getProperty("PM");
    }
    /**
     * @var string
     */
    public function setPM($value)
    {
        $this->setProperty("PM", $value, true);
    }
    /**
     * @return string
     */
    public function getPositiveSign()
    {
        if (!$this->isPropertyAvailable("PositiveSign")) {
            return null;
        }
        return $this->getProperty("PositiveSign");
    }
    /**
     * @var string
     */
    public function setPositiveSign($value)
    {
        $this->setProperty("PositiveSign", $value, true);
    }
    /**
     * @return bool
     */
    public function getShowWeeks()
    {
        if (!$this->isPropertyAvailable("ShowWeeks")) {
            return null;
        }
        return $this->getProperty("ShowWeeks");
    }
    /**
     * @var bool
     */
    public function setShowWeeks($value)
    {
        $this->setProperty("ShowWeeks", $value, true);
    }
    /**
     * @return string
     */
    public function getThousandSeparator()
    {
        if (!$this->isPropertyAvailable("ThousandSeparator")) {
            return null;
        }
        return $this->getProperty("ThousandSeparator");
    }
    /**
     * @var string
     */
    public function setThousandSeparator($value)
    {
        $this->setProperty("ThousandSeparator", $value, true);
    }
    /**
     * @return bool
     */
    public function getTime24()
    {
        if (!$this->isPropertyAvailable("Time24")) {
            return null;
        }
        return $this->getProperty("Time24");
    }
    /**
     * @var bool
     */
    public function setTime24($value)
    {
        $this->setProperty("Time24", $value, true);
    }
    /**
     * @return integer
     */
    public function getTimeMarkerPosition()
    {
        if (!$this->isPropertyAvailable("TimeMarkerPosition")) {
            return null;
        }
        return $this->getProperty("TimeMarkerPosition");
    }
    /**
     * @var integer
     */
    public function setTimeMarkerPosition($value)
    {
        $this->setProperty("TimeMarkerPosition", $value, true);
    }
    /**
     * @return string
     */
    public function getTimeSeparator()
    {
        if (!$this->isPropertyAvailable("TimeSeparator")) {
            return null;
        }
        return $this->getProperty("TimeSeparator");
    }
    /**
     * @var string
     */
    public function setTimeSeparator($value)
    {
        $this->setProperty("TimeSeparator", $value, true);
    }
    /**
     * @return LanguageCollection
     */
    public function getInstalledLanguages()
    {
        if (!$this->isPropertyAvailable("InstalledLanguages")) {
            $this->setProperty("InstalledLanguages", new LanguageCollection($this->getContext(),
                new ResourcePath("InstalledLanguages", $this->getResourcePath())));
        }
        return $this->getProperty("InstalledLanguages");
    }
    /**
     * @return TimeZone
     */
    public function getTimeZone()
    {
        if (!$this->isPropertyAvailable("TimeZone")) {
            $this->setProperty("TimeZone", new TimeZone($this->getContext(),
                new ResourcePath("TimeZone", $this->getResourcePath())));
        }
        return $this->getProperty("TimeZone");
    }
}