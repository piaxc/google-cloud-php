<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ReplaceArtifact.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.ReplaceArtifactRequest</code>
 */
class ReplaceArtifactRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The artifact to replace.
     * The `name` field is used to identify the artifact to replace.
     * Format: {parent}/artifacts/&#42;
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Artifact artifact = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $artifact = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApigeeRegistry\V1\Artifact $artifact
     *           Required. The artifact to replace.
     *           The `name` field is used to identify the artifact to replace.
     *           Format: {parent}/artifacts/&#42;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The artifact to replace.
     * The `name` field is used to identify the artifact to replace.
     * Format: {parent}/artifacts/&#42;
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Artifact artifact = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApigeeRegistry\V1\Artifact|null
     */
    public function getArtifact()
    {
        return $this->artifact;
    }

    public function hasArtifact()
    {
        return isset($this->artifact);
    }

    public function clearArtifact()
    {
        unset($this->artifact);
    }

    /**
     * Required. The artifact to replace.
     * The `name` field is used to identify the artifact to replace.
     * Format: {parent}/artifacts/&#42;
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Artifact artifact = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApigeeRegistry\V1\Artifact $var
     * @return $this
     */
    public function setArtifact($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApigeeRegistry\V1\Artifact::class);
        $this->artifact = $var;

        return $this;
    }

}

