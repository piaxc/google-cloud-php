<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for DeleteApiVersion.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.DeleteApiVersionRequest</code>
 */
class DeleteApiVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the version to delete.
     * Format: projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the version to delete.
     *           Format: projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the version to delete.
     * Format: projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the version to delete.
     * Format: projects/&#42;&#47;locations/&#42;&#47;apis/&#42;&#47;versions/&#42;
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

