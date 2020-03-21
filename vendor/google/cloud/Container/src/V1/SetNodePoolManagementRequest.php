<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetNodePoolManagementRequest sets the node management properties of a node
 * pool.
 *
 * Generated from protobuf message <code>google.container.v1.SetNodePoolManagementRequest</code>
 */
class SetNodePoolManagementRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     */
    private $project_id = '';
    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the cluster
     * resides.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     */
    private $zone = '';
    /**
     * Deprecated. The name of the cluster to update.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     */
    private $cluster_id = '';
    /**
     * Deprecated. The name of the node pool to update.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     */
    private $node_pool_id = '';
    /**
     * Required. NodeManagement configuration for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeManagement management = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $management = null;
    /**
     * The name (project, location, cluster, node pool id) of the node pool to set
     * management properties. Specified in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;'.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Deprecated. The Google Developers Console [project ID or project
     *           number](https://support.google.com/cloud/answer/6158840).
     *           This field has been deprecated and replaced by the name field.
     *     @type string $zone
     *           Deprecated. The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/zones#available) in which the cluster
     *           resides.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $cluster_id
     *           Deprecated. The name of the cluster to update.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $node_pool_id
     *           Deprecated. The name of the node pool to update.
     *           This field has been deprecated and replaced by the name field.
     *     @type \Google\Cloud\Container\V1\NodeManagement $management
     *           Required. NodeManagement configuration for the node pool.
     *     @type string $name
     *           The name (project, location, cluster, node pool id) of the node pool to set
     *           management properties. Specified in the format
     *           'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the cluster
     * resides.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Deprecated. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the cluster
     * resides.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the cluster to update.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Deprecated. The name of the cluster to update.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Deprecated. The name of the node pool to update.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @return string
     */
    public function getNodePoolId()
    {
        return $this->node_pool_id;
    }

    /**
     * Deprecated. The name of the node pool to update.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string node_pool_id = 4 [deprecated = true];</code>
     * @param string $var
     * @return $this
     */
    public function setNodePoolId($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_pool_id = $var;

        return $this;
    }

    /**
     * Required. NodeManagement configuration for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeManagement management = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Container\V1\NodeManagement
     */
    public function getManagement()
    {
        return $this->management;
    }

    /**
     * Required. NodeManagement configuration for the node pool.
     *
     * Generated from protobuf field <code>.google.container.v1.NodeManagement management = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Container\V1\NodeManagement $var
     * @return $this
     */
    public function setManagement($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\NodeManagement::class);
        $this->management = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster, node pool id) of the node pool to set
     * management properties. Specified in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;'.
     *
     * Generated from protobuf field <code>string name = 7;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster, node pool id) of the node pool to set
     * management properties. Specified in the format
     * 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;&#47;nodePools/&#42;'.
     *
     * Generated from protobuf field <code>string name = 7;</code>
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
