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
namespace Domain\Request\V20180129;

use AliyunOpenApi\Core\RpcAcsRequest;

class RegistrantProfileRealNameVerificationRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Domain", "2018-01-29", "RegistrantProfileRealNameVerification");
		$this->setMethod("POST");
	}

	private  $identityCredentialType;

	private  $userClientIp;

	private  $registrantProfileID;

	private  $identityCredential;

	private  $lang;

	private  $identityCredentialNo;

	public function getIdentityCredentialType() {
		return $this->identityCredentialType;
	}

	public function setIdentityCredentialType($identityCredentialType) {
		$this->identityCredentialType = $identityCredentialType;
		$this->queryParameters["IdentityCredentialType"]=$identityCredentialType;
	}

	public function getUserClientIp() {
		return $this->userClientIp;
	}

	public function setUserClientIp($userClientIp) {
		$this->userClientIp = $userClientIp;
		$this->queryParameters["UserClientIp"]=$userClientIp;
	}

	public function getRegistrantProfileID() {
		return $this->registrantProfileID;
	}

	public function setRegistrantProfileID($registrantProfileID) {
		$this->registrantProfileID = $registrantProfileID;
		$this->queryParameters["RegistrantProfileID"]=$registrantProfileID;
	}

	public function getIdentityCredential() {
		return $this->identityCredential;
	}

	public function setIdentityCredential($identityCredential) {
		$this->identityCredential = $identityCredential;
		}

	public function getLang() {
		return $this->lang;
	}

	public function setLang($lang) {
		$this->lang = $lang;
		$this->queryParameters["Lang"]=$lang;
	}

	public function getIdentityCredentialNo() {
		return $this->identityCredentialNo;
	}

	public function setIdentityCredentialNo($identityCredentialNo) {
		$this->identityCredentialNo = $identityCredentialNo;
		$this->queryParameters["IdentityCredentialNo"]=$identityCredentialNo;
	}
	
}