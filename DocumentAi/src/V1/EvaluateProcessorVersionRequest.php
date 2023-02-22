<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/documentai/v1/document_processor_service.proto

namespace Google\Cloud\DocumentAI\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Evaluates the given ProcessorVersion against the supplied documents.
 *
 * Generated from protobuf message <code>google.cloud.documentai.v1.EvaluateProcessorVersionRequest</code>
 */
class EvaluateProcessorVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] to
     * evaluate.
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *
     * Generated from protobuf field <code>string processor_version = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $processor_version = '';
    /**
     * Optional. The documents used in the evaluation. If unspecified, use the
     * processor's dataset as evaluation input.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.BatchDocumentsInputConfig evaluation_documents = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $evaluation_documents = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $processor_version
     *           Required. The resource name of the
     *           [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] to
     *           evaluate.
     *           `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *     @type \Google\Cloud\DocumentAI\V1\BatchDocumentsInputConfig $evaluation_documents
     *           Optional. The documents used in the evaluation. If unspecified, use the
     *           processor's dataset as evaluation input.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Documentai\V1\DocumentProcessorService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] to
     * evaluate.
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *
     * Generated from protobuf field <code>string processor_version = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProcessorVersion()
    {
        return $this->processor_version;
    }

    /**
     * Required. The resource name of the
     * [ProcessorVersion][google.cloud.documentai.v1.ProcessorVersion] to
     * evaluate.
     * `projects/{project}/locations/{location}/processors/{processor}/processorVersions/{processorVersion}`
     *
     * Generated from protobuf field <code>string processor_version = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProcessorVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->processor_version = $var;

        return $this;
    }

    /**
     * Optional. The documents used in the evaluation. If unspecified, use the
     * processor's dataset as evaluation input.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.BatchDocumentsInputConfig evaluation_documents = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\DocumentAI\V1\BatchDocumentsInputConfig|null
     */
    public function getEvaluationDocuments()
    {
        return $this->evaluation_documents;
    }

    public function hasEvaluationDocuments()
    {
        return isset($this->evaluation_documents);
    }

    public function clearEvaluationDocuments()
    {
        unset($this->evaluation_documents);
    }

    /**
     * Optional. The documents used in the evaluation. If unspecified, use the
     * processor's dataset as evaluation input.
     *
     * Generated from protobuf field <code>.google.cloud.documentai.v1.BatchDocumentsInputConfig evaluation_documents = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\DocumentAI\V1\BatchDocumentsInputConfig $var
     * @return $this
     */
    public function setEvaluationDocuments($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DocumentAI\V1\BatchDocumentsInputConfig::class);
        $this->evaluation_documents = $var;

        return $this;
    }

}

