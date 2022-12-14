<?php

/**
 * Generated 2021-03-12T16:05:00+00:00 16.0.21103.12002
 */
namespace Office365\SharePoint;

/**
 * Specifies 
 * a field 
 * (2) that can contain multiple lines of text. To set properties, call 
 * the Update method (section 3.2.5.52.2.1.5).The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class FieldMultiLineText extends Field
{
    /**
     * Specifies 
     * whether a hyperlink is allowed 
     * as a value of the field (2).
     * @return bool
     */
    public function getAllowHyperlink()
    {
        if (!$this->isPropertyAvailable("AllowHyperlink")) {
            return null;
        }
        return $this->getProperty("AllowHyperlink");
    }
    /**
     * Specifies 
     * whether a hyperlink is allowed 
     * as a value of the field (2).
     * @var bool
     */
    public function setAllowHyperlink($value)
    {
        $this->setProperty("AllowHyperlink", $value, true);
    }
    /**
     * Specifies 
     * whether all changes to the value of the field (2) are 
     * displayed in list forms.
     * @return bool
     */
    public function getAppendOnly()
    {
        if (!$this->isPropertyAvailable("AppendOnly")) {
            return null;
        }
        return $this->getProperty("AppendOnly");
    }
    /**
     * Specifies 
     * whether all changes to the value of the field (2) are 
     * displayed in list forms.
     * @var bool
     */
    public function setAppendOnly($value)
    {
        $this->setProperty("AppendOnly", $value, true);
    }
    /**
     * Specifies 
     * the number of lines of text to display for the field (2).Its value 
     * MUST be equal to or greater than 1. Its value MUST be equal to or less than 
     * 1000. 
     * @return integer
     */
    public function getNumberOfLines()
    {
        if (!$this->isPropertyAvailable("NumberOfLines")) {
            return null;
        }
        return $this->getProperty("NumberOfLines");
    }
    /**
     * Specifies 
     * the number of lines of text to display for the field (2).Its value 
     * MUST be equal to or greater than 1. Its value MUST be equal to or less than 
     * 1000. 
     * @var integer
     */
    public function setNumberOfLines($value)
    {
        $this->setProperty("NumberOfLines", $value, true);
    }
    /**
     * Specifies 
     * whether the field (2) supports a 
     * subset of rich text 
     * formatting.
     * @return bool
     */
    public function getRestrictedMode()
    {
        if (!$this->isPropertyAvailable("RestrictedMode")) {
            return null;
        }
        return $this->getProperty("RestrictedMode");
    }
    /**
     * Specifies 
     * whether the field (2) supports a 
     * subset of rich text 
     * formatting.
     * @var bool
     */
    public function setRestrictedMode($value)
    {
        $this->setProperty("RestrictedMode", $value, true);
    }
    /**
     * Specifies 
     * whether the field (2) supports rich text 
     * formatting.
     * @return bool
     */
    public function getRichText()
    {
        if (!$this->isPropertyAvailable("RichText")) {
            return null;
        }
        return $this->getProperty("RichText");
    }
    /**
     * Specifies 
     * whether the field (2) supports rich text 
     * formatting.
     * @var bool
     */
    public function setRichText($value)
    {
        $this->setProperty("RichText", $value, true);
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether to allow unlimited field length in 
     * document libraries.
     * @return bool
     */
    public function getUnlimitedLengthInDocumentLibrary()
    {
        if (!$this->isPropertyAvailable("UnlimitedLengthInDocumentLibrary")) {
            return null;
        }
        return $this->getProperty("UnlimitedLengthInDocumentLibrary");
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether to allow unlimited field length in 
     * document libraries.
     * @var bool
     */
    public function setUnlimitedLengthInDocumentLibrary($value)
    {
        $this->setProperty("UnlimitedLengthInDocumentLibrary", $value, true);
    }
    /**
     * Specifies 
     * whether an implementation-specific mechanism for linking wiki pages is 
     * supported. It MUST be "false" if RichText is 
     * "false".Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @return bool
     */
    public function getWikiLinking()
    {
        if (!$this->isPropertyAvailable("WikiLinking")) {
            return null;
        }
        return $this->getProperty("WikiLinking");
    }
    /**
     * Specifies 
     * whether an implementation-specific mechanism for linking wiki pages is 
     * supported. It MUST be "false" if RichText is 
     * "false".Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @var bool
     */
    public function setWikiLinking($value)
    {
        $this->setProperty("WikiLinking", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsLongHyperlink()
    {
        if (!$this->isPropertyAvailable("IsLongHyperlink")) {
            return null;
        }
        return $this->getProperty("IsLongHyperlink");
    }
    /**
     * @var bool
     */
    public function setIsLongHyperlink($value)
    {
        $this->setProperty("IsLongHyperlink", $value, true);
    }
}