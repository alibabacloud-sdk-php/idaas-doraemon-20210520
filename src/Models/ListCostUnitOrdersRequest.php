<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ListCostUnitOrdersRequest extends Model
{
    /**
     * @example 2021-11-16
     *
     * @var string
     */
    public $beginDate;

    /**
     * @example 2021-12-04 00
     *
     * @var string
     */
    public $finalDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'beginDate'  => 'BeginDate',
        'finalDate'  => 'FinalDate',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->finalDate) {
            $res['FinalDate'] = $this->finalDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCostUnitOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['FinalDate'])) {
            $model->finalDate = $map['FinalDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
