<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class CreateAuthenticatorRegistrationResponseBody extends Model
{
    /**
     * @description 防重放挑战码
     *
     * @var string
     */
    public $challengeBase64;

    /**
     * @description 创建认证器的Options
     *
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'challengeBase64' => 'ChallengeBase64',
        'options'         => 'Options',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->challengeBase64) {
            $res['ChallengeBase64'] = $this->challengeBase64;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuthenticatorRegistrationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChallengeBase64'])) {
            $model->challengeBase64 = $map['ChallengeBase64'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
