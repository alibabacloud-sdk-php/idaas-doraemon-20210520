<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class CreateUserAuthenticateOptionsRequest extends Model
{
    /**
     * @example 11122223333
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @example webauthn
     *
     * @var string
     */
    public $authenticatorType;

    /**
     * @example 1111222
     *
     * @var string
     */
    public $bindHashBase64;

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
     * @example 由具体认证方式决定
     *
     * @var string
     */
    public $serverExtendParamsJson;

    /**
     * @example user-11122223333
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'applicationExternalId'      => 'ApplicationExternalId',
        'authenticatorType'          => 'AuthenticatorType',
        'bindHashBase64'             => 'BindHashBase64',
        'clientExtendParamsJson'     => 'ClientExtendParamsJson',
        'clientExtendParamsJsonSign' => 'ClientExtendParamsJsonSign',
        'serverExtendParamsJson'     => 'ServerExtendParamsJson',
        'userId'                     => 'UserId',
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
        if (null !== $this->bindHashBase64) {
            $res['BindHashBase64'] = $this->bindHashBase64;
        }
        if (null !== $this->clientExtendParamsJson) {
            $res['ClientExtendParamsJson'] = $this->clientExtendParamsJson;
        }
        if (null !== $this->clientExtendParamsJsonSign) {
            $res['ClientExtendParamsJsonSign'] = $this->clientExtendParamsJsonSign;
        }
        if (null !== $this->serverExtendParamsJson) {
            $res['ServerExtendParamsJson'] = $this->serverExtendParamsJson;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUserAuthenticateOptionsRequest
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
        if (isset($map['BindHashBase64'])) {
            $model->bindHashBase64 = $map['BindHashBase64'];
        }
        if (isset($map['ClientExtendParamsJson'])) {
            $model->clientExtendParamsJson = $map['ClientExtendParamsJson'];
        }
        if (isset($map['ClientExtendParamsJsonSign'])) {
            $model->clientExtendParamsJsonSign = $map['ClientExtendParamsJsonSign'];
        }
        if (isset($map['ServerExtendParamsJson'])) {
            $model->serverExtendParamsJson = $map['ServerExtendParamsJson'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
