<?php

/**
 * Generated 2020-05-13T12:20:55+00:00 16.0.20029.12010
 */
namespace Office365\SharePoint\Publishing;

use Office365\Runtime\ClientValue;
class RuleResult extends ClientValue
{
    /**
     * @var string
     */
    public $ActionToTake;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $LearnMoreLink;
    /**
     * @var integer
     */
    public $ResultCount;
    /**
     * @var integer
     */
    public $Status;
    /**
     * @var string
     */
    public $Title;
    /**
     * @var RuleErrorDetails
     */
    public $Details;
    /**
     * @var string
     */
    public $RuleType;
}