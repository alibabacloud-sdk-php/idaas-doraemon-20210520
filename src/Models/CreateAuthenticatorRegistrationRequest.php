<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class CreateAuthenticatorRegistrationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 11122223333
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @description This parameter is required.
     *
     * @example webauthn
     *
     * @var string
     */
    public $authenticatorType;

    /**
     * @example 由具体认证方式决定
     *
     * @var string
     */
    public $clientExtendParamsJson;

    /**
     * @example 由具体认证方式决定
     *
     * @var string
     */
    public $clientExtendParamsJsonSign;

    /**
     * @example 注册上下文
     *
     * @var string
     */
    public $registrationContext;

    /**
     * @example 由具体认证方式决定
     *
     * @var string
     */
    public $serverExtendParamsJson;

    /**
     * @example 张三
     *
     * @var string
     */
    public $userDisplayName;

    /**
     * @description This parameter is required.
     *
     * @example user-11122223333
     *
     * @var string
     */
    public $userId;

    /**
     * @example ZhangSan
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'applicationExternalId'      => 'ApplicationExternalId',
        'authenticatorType'          => 'AuthenticatorType',
        'clientExtendParamsJson'     => 'ClientExtendParamsJson',
        'clientExtendParamsJsonSign' => 'ClientExtendParamsJsonSign',
        'registrationContext'        => 'RegistrationContext',
        'serverExtendParamsJson'     => 'ServerExtendParamsJson',
        'userDisplayName'            => 'UserDisplayName',
        'userId'                     => 'UserId',
        'userName'                   => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->authenticatorType) {
            $res['AuthenticatorType'] = $this->authenticatorType;
        }
        if (null !== $this->clientExtendParamsJson) {
            $res['ClientExtendParamsJson'] = $this->clientExtendParamsJson;
        }
        if (null !== $this->clientExtendParamsJsonSign) {
            $res['ClientExtendParamsJsonSign'] = $this->clientExtendParamsJsonSign;
        }
        if (null !== $this->registrationContext) {
            $res['RegistrationContext'] = $this->registrationContext;
        }
        if (null !== $this->serverExtendParamsJson) {
            $res['ServerExtendParamsJson'] = $this->serverExtendParamsJson;
        }
        if (null !== $this->userDisplayName) {
            $res['UserDisplayName'] = $this->userDisplayName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuthenticatorRegistrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['AuthenticatorType'])) {
            $model->authenticatorType = $map['AuthenticatorType'];
        }
        if (isset($map['ClientExtendParamsJson'])) {
            $model->clientExtendParamsJson = $map['ClientExtendParamsJson'];
        }
        if (isset($map['ClientExtendParamsJsonSign'])) {
            $model->clientExtendParamsJsonSign = $map['ClientExtendParamsJsonSign'];
        }
        if (isset($map['RegistrationContext'])) {
            $model->registrationContext = $map['RegistrationContext'];
        }
        if (isset($map['ServerExtendParamsJson'])) {
            $model->serverExtendParamsJson = $map['ServerExtendParamsJson'];
        }
        if (isset($map['UserDisplayName'])) {
            $model->userDisplayName = $map['UserDisplayName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
