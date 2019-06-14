<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

namespace AliyunOpenApi\Api\CCC\Request\V20170705;

use AliyunOpenApi\Core\RpcAcsRequest;

class SaveWebRTCStatsRequest extends RpcAcsRequest
{
    function __construct()
    {
        parent::__construct("CCC", "2017-07-05", "SaveWebRTCStats", "ccc", "openAPI");
        $this->setMethod("POST");
    }

    private $instanceId;

    private $callId;

    private $callerNumber;

    private $calleeNumber;

    private $tenantId;
    private $uid;
    private $callStartTime;
    private $recordTime;
    private $stats;

    public function getCallId()
    {
        return $this->callId;
    }

    public function setCallId($callId)
    {
        $this->callId                    = $callId;
        $this->queryParameters["CallId"] = $callId;
    }

    public function getInstanceId()
    {
        return $this->instanceId;
    }

    public function setInstanceId($instanceId)
    {
        $this->instanceId                    = $instanceId;
        $this->queryParameters["InstanceId"] = $instanceId;
    }

    public function getCallerNumber()
    {
        return $this->callerNumber;
    }

    public function setCallerNumber($callerNumber)
    {
        $this->callerNumber                    = $callerNumber;
        $this->queryParameters["CallerNumber"] = $callerNumber;
    }

    public function getCalleeNumber()
    {
        return $this->calleeNumber;
    }

    public function setCalleeNumber($calleeNumber)
    {
        $this->calleeNumber                    = $calleeNumber;
        $this->queryParameters["CalleeNumber"] = $calleeNumber;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    public function setTenantId($tenantId)
    {
        $this->tenantId                    = $tenantId;
        $this->queryParameters["TenantId"] = $tenantId;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid                    = $uid;
        $this->queryParameters["Uid"] = $uid;
    }

    public function getCallStartTime()
    {
        return $this->callStartTime;
    }

    public function setCallStartTime($callStartTime)
    {
        $this->callStartTime                    = $callStartTime;
        $this->queryParameters["CallStartTime"] = $callStartTime;
    }

    public function getRecordTime()
    {
        return $this->recordTime;
    }

    public function setRecordTime($recordTime)
    {
        $this->recordTime                    = $recordTime;
        $this->queryParameters["RecordTime"] = $recordTime;
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function setStats($stats)
    {
        $this->stats                    = $stats;
        $this->queryParameters["Stats"] = $stats;
    }

}