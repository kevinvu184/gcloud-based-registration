<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains cluster daemon metrics, such as HDFS and YARN stats.
 * **Beta Feature**: This report is available for testing purposes only. It may
 * be changed before final release.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.ClusterMetrics</code>
 */
class ClusterMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * The HDFS metrics.
     *
     * Generated from protobuf field <code>map<string, int64> hdfs_metrics = 1;</code>
     */
    private $hdfs_metrics;
    /**
     * The YARN metrics.
     *
     * Generated from protobuf field <code>map<string, int64> yarn_metrics = 2;</code>
     */
    private $yarn_metrics;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $hdfs_metrics
     *           The HDFS metrics.
     *     @type array|\Google\Protobuf\Internal\MapField $yarn_metrics
     *           The YARN metrics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * The HDFS metrics.
     *
     * Generated from protobuf field <code>map<string, int64> hdfs_metrics = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHdfsMetrics()
    {
        return $this->hdfs_metrics;
    }

    /**
     * The HDFS metrics.
     *
     * Generated from protobuf field <code>map<string, int64> hdfs_metrics = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHdfsMetrics($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT64);
        $this->hdfs_metrics = $arr;

        return $this;
    }

    /**
     * The YARN metrics.
     *
     * Generated from protobuf field <code>map<string, int64> yarn_metrics = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getYarnMetrics()
    {
        return $this->yarn_metrics;
    }

    /**
     * The YARN metrics.
     *
     * Generated from protobuf field <code>map<string, int64> yarn_metrics = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setYarnMetrics($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::INT64);
        $this->yarn_metrics = $arr;

        return $this;
    }

}

