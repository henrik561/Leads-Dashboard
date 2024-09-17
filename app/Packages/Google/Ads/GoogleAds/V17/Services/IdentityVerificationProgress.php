<?php

// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v17/services/identity_verification_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Information regarding the verification progress for a verification program
 * type.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.IdentityVerificationProgress</code>
 */
class IdentityVerificationProgress extends \Google\Protobuf\Internal\Message
{
    /**
     * Current Status (PENDING_USER_ACTION, SUCCESS, FAILURE etc)
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.IdentityVerificationProgramStatusEnum.IdentityVerificationProgramStatus program_status = 1;</code>
     */
    protected $program_status = 0;

    /**
     * The timestamp when the action url will expire in "yyyy-MM-dd HH:mm:ss"
     * format.
     *
     * Generated from protobuf field <code>string invitation_link_expiration_time = 2;</code>
     */
    protected $invitation_link_expiration_time = '';

    /**
     * Action URL for user to complete verification for the given verification
     * program type.
     *
     * Generated from protobuf field <code>string action_url = 3;</code>
     */
    protected $action_url = '';

    /**
     * Constructor.
     *
     * @param  array  $data  {
     *                       Optional. Data for populating the Message object.
     *
     * @type int $program_status
     *           Current Status (PENDING_USER_ACTION, SUCCESS, FAILURE etc)
     * @type string $invitation_link_expiration_time
     *              The timestamp when the action url will expire in "yyyy-MM-dd HH:mm:ss"
     *              format.
     * @type string $action_url
     *              Action URL for user to complete verification for the given verification
     *              program type.
     *              }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\IdentityVerificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Current Status (PENDING_USER_ACTION, SUCCESS, FAILURE etc)
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.IdentityVerificationProgramStatusEnum.IdentityVerificationProgramStatus program_status = 1;</code>
     *
     * @return int
     */
    public function getProgramStatus()
    {
        return $this->program_status;
    }

    /**
     * Current Status (PENDING_USER_ACTION, SUCCESS, FAILURE etc)
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.IdentityVerificationProgramStatusEnum.IdentityVerificationProgramStatus program_status = 1;</code>
     *
     * @param  int  $var
     * @return $this
     */
    public function setProgramStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\IdentityVerificationProgramStatusEnum\IdentityVerificationProgramStatus::class);
        $this->program_status = $var;

        return $this;
    }

    /**
     * The timestamp when the action url will expire in "yyyy-MM-dd HH:mm:ss"
     * format.
     *
     * Generated from protobuf field <code>string invitation_link_expiration_time = 2;</code>
     *
     * @return string
     */
    public function getInvitationLinkExpirationTime()
    {
        return $this->invitation_link_expiration_time;
    }

    /**
     * The timestamp when the action url will expire in "yyyy-MM-dd HH:mm:ss"
     * format.
     *
     * Generated from protobuf field <code>string invitation_link_expiration_time = 2;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setInvitationLinkExpirationTime($var)
    {
        GPBUtil::checkString($var, true);
        $this->invitation_link_expiration_time = $var;

        return $this;
    }

    /**
     * Action URL for user to complete verification for the given verification
     * program type.
     *
     * Generated from protobuf field <code>string action_url = 3;</code>
     *
     * @return string
     */
    public function getActionUrl()
    {
        return $this->action_url;
    }

    /**
     * Action URL for user to complete verification for the given verification
     * program type.
     *
     * Generated from protobuf field <code>string action_url = 3;</code>
     *
     * @param  string  $var
     * @return $this
     */
    public function setActionUrl($var)
    {
        GPBUtil::checkString($var, true);
        $this->action_url = $var;

        return $this;
    }
}
