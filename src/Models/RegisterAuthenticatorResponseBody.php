<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class RegisterAuthenticatorResponseBody extends Model
{
    /**
     * @example 123123123
     *
     * @var string
     */
    public $authenticatorUuid;

    /**
     * @var string
     */
    public $etasResponseSting;

    /**
     * @example 23123
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authenticatorUuid' => 'AuthenticatorUuid',
        'etasResponseSting' => 'EtasResponseSting',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticatorUuid) {
            $res['AuthenticatorUuid'] = $this->authenticatorUuid;
        }
        if (null !== $this->etasResponseSting) {
            $res['EtasResponseSting'] = $this->etasResponseSting;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterAuthenticatorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticatorUuid'])) {
            $model->authenticatorUuid = $map['AuthenticatorUuid'];
        }
        if (isset($map['EtasResponseSting'])) {
            $model->etasResponseSting = $map['EtasResponseSting'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
