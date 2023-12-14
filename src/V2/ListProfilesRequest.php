<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudprofiler/v2/profiler.proto

namespace Google\Cloud\Profiler\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ListProfilesRequest contains request parameters for listing profiles for
 * deployments in projects which the user has permissions to view.
 *
 * Generated from protobuf message <code>google.devtools.cloudprofiler.v2.ListProfilesRequest</code>
 */
class ListProfilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent, which owns this collection of profiles.
     * Format: projects/{user_project_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of items to return.
     * Default page_size is 1000.
     * Max limit is 10000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The token to continue pagination and get profiles from a particular page.
     * When paginating, all other parameters provided to `ListProfiles` must match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent, which owns this collection of profiles.
     *           Format: projects/{user_project_id}
     *     @type int $page_size
     *           The maximum number of items to return.
     *           Default page_size is 1000.
     *           Max limit is 10000.
     *     @type string $page_token
     *           The token to continue pagination and get profiles from a particular page.
     *           When paginating, all other parameters provided to `ListProfiles` must match
     *           the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudprofiler\V2\Profiler::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent, which owns this collection of profiles.
     * Format: projects/{user_project_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent, which owns this collection of profiles.
     * Format: projects/{user_project_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The maximum number of items to return.
     * Default page_size is 1000.
     * Max limit is 10000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of items to return.
     * Default page_size is 1000.
     * Max limit is 10000.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The token to continue pagination and get profiles from a particular page.
     * When paginating, all other parameters provided to `ListProfiles` must match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The token to continue pagination and get profiles from a particular page.
     * When paginating, all other parameters provided to `ListProfiles` must match
     * the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}
