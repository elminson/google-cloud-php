<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/query.proto

namespace Google\Cloud\Datastore\V1\QueryResultBatch;

/**
 * The possible values for the `more_results` field.
 *
 * Protobuf type <code>google.datastore.v1.QueryResultBatch.MoreResultsType</code>
 */
class MoreResultsType
{
    /**
     * Unspecified. This value is never used.
     *
     * Generated from protobuf enum <code>MORE_RESULTS_TYPE_UNSPECIFIED = 0;</code>
     */
    const MORE_RESULTS_TYPE_UNSPECIFIED = 0;
    /**
     * There may be additional batches to fetch from this query.
     *
     * Generated from protobuf enum <code>NOT_FINISHED = 1;</code>
     */
    const NOT_FINISHED = 1;
    /**
     * The query is finished, but there may be more results after the limit.
     *
     * Generated from protobuf enum <code>MORE_RESULTS_AFTER_LIMIT = 2;</code>
     */
    const MORE_RESULTS_AFTER_LIMIT = 2;
    /**
     * The query is finished, but there may be more results after the end
     * cursor.
     *
     * Generated from protobuf enum <code>MORE_RESULTS_AFTER_CURSOR = 4;</code>
     */
    const MORE_RESULTS_AFTER_CURSOR = 4;
    /**
     * The query is finished, and there are no more results.
     *
     * Generated from protobuf enum <code>NO_MORE_RESULTS = 3;</code>
     */
    const NO_MORE_RESULTS = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MoreResultsType::class, \Google\Cloud\Datastore\V1\QueryResultBatch_MoreResultsType::class);
