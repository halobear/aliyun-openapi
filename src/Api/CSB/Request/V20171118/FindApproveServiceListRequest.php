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
namespace CSB\Request\V20171118;

use AliyunOpenApi\Core\RpcAcsRequest;

class FindApproveServiceListRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("CSB", "2017-11-18", "FindApproveServiceList");
		$this->setProtocol("https");
	}

	private  $projectName;

	private  $approveLevel;

	private  $showDelService;

	private  $csbId;

	private  $alias;

	private  $serviceName;

	public function getProjectName() {
		return $this->projectName;
	}

	public function setProjectName($projectName) {
		$this->projectName = $projectName;
		$this->queryParameters["ProjectName"]=$projectName;
	}

	public function getApproveLevel() {
		return $this->approveLevel;
	}

	public function setApproveLevel($approveLevel) {
		$this->approveLevel = $approveLevel;
		$this->queryParameters["ApproveLevel"]=$approveLevel;
	}

	public function getShowDelService() {
		return $this->showDelService;
	}

	public function setShowDelService($showDelService) {
		$this->showDelService = $showDelService;
		$this->queryParameters["ShowDelService"]=$showDelService;
	}

	public function getCsbId() {
		return $this->csbId;
	}

	public function setCsbId($csbId) {
		$this->csbId = $csbId;
		$this->queryParameters["CsbId"]=$csbId;
	}

	public function getAlias() {
		return $this->alias;
	}

	public function setAlias($alias) {
		$this->alias = $alias;
		$this->queryParameters["Alias"]=$alias;
	}

	public function getServiceName() {
		return $this->serviceName;
	}

	public function setServiceName($serviceName) {
		$this->serviceName = $serviceName;
		$this->queryParameters["ServiceName"]=$serviceName;
	}
	
}