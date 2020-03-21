<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output configuration for asset feed destination.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.FeedOutputConfig</code>
 */
class FeedOutputConfig extends \Google\Protobuf\Internal\Message
{
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Asset\V1\PubsubDestination $pubsub_destination
     *           Destination on Cloud Pubsub.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Destination on Cloud Pubsub.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.PubsubDestination pubsub_destination = 1;</code>
     * @return \Google\Cloud\Asset\V1\PubsubDestination
     */
    public function getPubsubDestination()
    {
        return $this->readOneof(1);
    }

    /**
     * Destination on Cloud Pubsub.
     *
     * Generated from protobuf field <code>.google.cloud.asset.v1.PubsubDestination pubsub_destination = 1;</code>
     * @param \Google\Cloud\Asset\V1\PubsubDestination $var
     * @return $this
     */
    public function setPubsubDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Asset\V1\PubsubDestination::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

