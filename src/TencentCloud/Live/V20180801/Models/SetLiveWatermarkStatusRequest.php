<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getWatermarkId() 获取水印ID。
 * @method void setWatermarkId(integer $WatermarkId) 设置水印ID。
 * @method integer getStatus() 获取状态。0：停用，1:启用
 * @method void setStatus(integer $Status) 设置状态。0：停用，1:启用
 */

/**
 *SetLiveWatermarkStatus请求参数结构体
 */
class SetLiveWatermarkStatusRequest extends AbstractModel
{
    /**
     * @var integer 水印ID。
     */
    public $WatermarkId;

    /**
     * @var integer 状态。0：停用，1:启用
     */
    public $Status;
    /**
     * @param integer $WatermarkId 水印ID。
     * @param integer $Status 状态。0：停用，1:启用
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("WatermarkId",$param) and $param["WatermarkId"] !== null) {
            $this->WatermarkId = $param["WatermarkId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
