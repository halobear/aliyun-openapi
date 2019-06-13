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

class AddAgentDeviceRequest extends RpcAcsRequest
{
    function __construct()
    {
        parent::__construct("CCC", "2017-07-05", "AddAgentDevice", "ccc", "openAPI");
        $this->setMethod("POST");
    }

    private $clientIp;

    private $instanceId;

    private $browserVersion;

    private $clientPort;

    private $remark;

    public function getClientIp()
    {
        return $this->clientIp;
    }

    public function setClientIp($clientIp)
    {
        $this->clientIp                    = $clientIp;
        $this->queryParameters["ClientIp"] = $clientIp;
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

    public function getBrowserVersion()
    {
        return $this->browserVersion;
    }

    public function setBrowserVersion($browserVersion)
    {
        $this->browserVersion                    = $browserVersion;
        $this->queryParameters["BrowserVersion"] = $browserVersion;
    }

    public function getClientPort()
    {
        return $this->clientPort;
    }

    public function setClientPort($clientPort)
    {
        $this->clientPort                    = $clientPort;
        $this->queryParameters["ClientPort"] = $clientPort;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    public function setRemark($remark)
    {
        $this->remark                    = $remark;
        $this->queryParameters["Remark"] = $remark;
    }

}