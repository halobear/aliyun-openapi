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
namespace Dds\Request\V20151201;

use AliyunOpenApi\Core\RpcAcsRequest;

class DescribeDBInstancePerformanceRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Dds", "2015-12-01", "DescribeDBInstancePerformance", "dds", "openAPI");
		$this->setMethod("POST");
	}

	private  $resourceOwnerId;

	private  $resourceOwnerAccount;

	private  $roleId;

	private  $ownerAccount;

	private  $endTime;

	private  $startTime;

	private  $ownerId;

	private  $replicaSetRole;

	private  $securityToken;

	private  $dBInstanceId;

	private  $nodeId;

	private  $key;

	public function getResourceOwnerId() {
		return $this->resourceOwnerId;
	}

	public function setResourceOwnerId($resourceOwnerId) {
		$this->resourceOwnerId = $resourceOwnerId;
		$this->queryParameters["ResourceOwnerId"]=$resourceOwnerId;
	}

	public function getResourceOwnerAccount() {
		return $this->resourceOwnerAccount;
	}

	public function setResourceOwnerAccount($resourceOwnerAccount) {
		$this->resourceOwnerAccount = $resourceOwnerAccount;
		$this->queryParameters["ResourceOwnerAccount"]=$resourceOwnerAccount;
	}

	public function getRoleId() {
		return $this->roleId;
	}

	public function setRoleId($roleId) {
		$this->roleId = $roleId;
		$this->queryParameters["RoleId"]=$roleId;
	}

	public function getOwnerAccount() {
		return $this->ownerAccount;
	}

	public function setOwnerAccount($ownerAccount) {
		$this->ownerAccount = $ownerAccount;
		$this->queryParameters["OwnerAccount"]=$ownerAccount;
	}

	public function getEndTime() {
		return $this->endTime;
	}

	public function setEndTime($endTime) {
		$this->endTime = $endTime;
		$this->queryParameters["EndTime"]=$endTime;
	}

	public function getStartTime() {
		return $this->startTime;
	}

	public function setStartTime($startTime) {
		$this->startTime = $startTime;
		$this->queryParameters["StartTime"]=$startTime;
	}

	public function getOwnerId() {
		return $this->ownerId;
	}

	public function setOwnerId($ownerId) {
		$this->ownerId = $ownerId;
		$this->queryParameters["OwnerId"]=$ownerId;
	}

	public function getReplicaSetRole() {
		return $this->replicaSetRole;
	}

	public function setReplicaSetRole($replicaSetRole) {
		$this->replicaSetRole = $replicaSetRole;
		$this->queryParameters["ReplicaSetRole"]=$replicaSetRole;
	}

	public function getSecurityToken() {
		return $this->securityToken;
	}

	public function setSecurityToken($securityToken) {
		$this->securityToken = $securityToken;
		$this->queryParameters["SecurityToken"]=$securityToken;
	}

	public function getDBInstanceId() {
		return $this->dBInstanceId;
	}

	public function setDBInstanceId($dBInstanceId) {
		$this->dBInstanceId = $dBInstanceId;
		$this->queryParameters["DBInstanceId"]=$dBInstanceId;
	}

	public function getNodeId() {
		return $this->nodeId;
	}

	public function setNodeId($nodeId) {
		$this->nodeId = $nodeId;
		$this->queryParameters["NodeId"]=$nodeId;
	}

	public function getKey() {
		return $this->key;
	}

	public function setKey($key) {
		$this->key = $key;
		$this->queryParameters["Key"]=$key;
	}
	
}