<?php

/**
 * Generated 2019-10-12T19:32:10+00:00 16.0.19402.12016
 */
namespace Office365\SharePoint\CompliancePolicy;

use Office365\Runtime\ClientValue;

class ComplianceTag extends ClientValue
{
    /**
     * @var bool
     */
    public $AcceptMessagesOnlyFromSendersOrMembers;
    /**
     * @var string
     */
    public $AccessType;
    /**
     * @var string
     */
    public $AllowAccessFromUnmanagedDevice;
    /**
     * @var bool
     */
    public $AutoDelete;
    /**
     * @var bool
     */
    public $BlockDelete;
    /**
     * @var bool
     */
    public $BlockEdit;
    /**
     * @var bool
     */
    public $ContainsSiteLabel;
    /**
     * @var string
     */
    public $DisplayName;
    /**
     * @var string
     */
    public $EncryptionRMSTemplateId;
    /**
     * @var bool
     */
    public $HasRetentionAction;
    /**
     * @var bool
     */
    public $IsEventTag;
    /**
     * @var string
     */
    public $Notes;
    /**
     * @var bool
     */
    public $RequireSenderAuthenticationEnabled;
    /**
     * @var string
     */
    public $ReviewerEmail;
    /**
     * @var string
     */
    public $SharingCapabilities;
    /**
     * @var bool
     */
    public $SuperLock;
    /**
     * @var integer
     */
    public $TagDuration;
    /**
     * @var string
     */
    public $TagId;
    /**
     * @var string
     */
    public $TagName;
    /**
     * @var string
     */
    public $TagRetentionBasedOn;
}