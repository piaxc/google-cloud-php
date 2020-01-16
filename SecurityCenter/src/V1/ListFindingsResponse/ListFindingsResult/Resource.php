<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1\ListFindingsResponse\ListFindingsResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information related to the Google Cloud Platform (GCP) resource that is
 * associated with this finding.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListFindingsResponse.ListFindingsResult.Resource</code>
 */
class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * The full resource name of the resource. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The full resource name of project that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_name = 2;</code>
     */
    private $project_name = '';
    /**
     * The human readable name of project that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_display_name = 3;</code>
     */
    private $project_display_name = '';
    /**
     * The full resource name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_name = 4;</code>
     */
    private $parent_name = '';
    /**
     * The human readable name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_display_name = 5;</code>
     */
    private $parent_display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The full resource name of the resource. See:
     *           https://cloud.google.com/apis/design/resource_names#full_resource_name
     *     @type string $project_name
     *           The full resource name of project that the resource belongs to.
     *     @type string $project_display_name
     *           The human readable name of project that the resource belongs to.
     *     @type string $parent_name
     *           The full resource name of resource's parent.
     *     @type string $parent_display_name
     *           The human readable name of resource's parent.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The full resource name of the resource. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The full resource name of the resource. See:
     * https://cloud.google.com/apis/design/resource_names#full_resource_name
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The full resource name of project that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_name = 2;</code>
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * The full resource name of project that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_name = $var;

        return $this;
    }

    /**
     * The human readable name of project that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_display_name = 3;</code>
     * @return string
     */
    public function getProjectDisplayName()
    {
        return $this->project_display_name;
    }

    /**
     * The human readable name of project that the resource belongs to.
     *
     * Generated from protobuf field <code>string project_display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_display_name = $var;

        return $this;
    }

    /**
     * The full resource name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_name = 4;</code>
     * @return string
     */
    public function getParentName()
    {
        return $this->parent_name;
    }

    /**
     * The full resource name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParentName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_name = $var;

        return $this;
    }

    /**
     * The human readable name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_display_name = 5;</code>
     * @return string
     */
    public function getParentDisplayName()
    {
        return $this->parent_display_name;
    }

    /**
     * The human readable name of resource's parent.
     *
     * Generated from protobuf field <code>string parent_display_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setParentDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_display_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Resource::class, \Google\Cloud\SecurityCenter\V1\ListFindingsResponse_ListFindingsResult_Resource::class);

