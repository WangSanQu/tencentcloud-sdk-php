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
namespace TencentCloud\Iai\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getPersonId() 获取人员ID
 * @method void setPersonId(string $PersonId) 设置人员ID
 * @method string getFaceId() 获取人脸ID
 * @method void setFaceId(string $FaceId) 设置人脸ID
 * @method float getScore() 获取候选者的匹配得分。 
10万大小人脸库，若人脸均为类似抓拍照（人脸质量较差）， 
误识率百分之一对应分数为70分，误识率千分之一对应分数为80分，误识率万分之一对应分数为90分； 
若人脸均为类似自拍照（人脸质量较好）， 
误识率百分之一对应分数为60分，误识率千分之一对应分数为70分，误识率万分之一对应分数为80分。 
建议分数不要超过90分。您可以根据实际情况选择合适的分数。
 * @method void setScore(float $Score) 设置候选者的匹配得分。 
10万大小人脸库，若人脸均为类似抓拍照（人脸质量较差）， 
误识率百分之一对应分数为70分，误识率千分之一对应分数为80分，误识率万分之一对应分数为90分； 
若人脸均为类似自拍照（人脸质量较好）， 
误识率百分之一对应分数为60分，误识率千分之一对应分数为70分，误识率万分之一对应分数为80分。 
建议分数不要超过90分。您可以根据实际情况选择合适的分数。
 */

/**
 *识别出的最相似候选人
 */
class Candidate extends AbstractModel
{
    /**
     * @var string 人员ID
     */
    public $PersonId;

    /**
     * @var string 人脸ID
     */
    public $FaceId;

    /**
     * @var float 候选者的匹配得分。 
10万大小人脸库，若人脸均为类似抓拍照（人脸质量较差）， 
误识率百分之一对应分数为70分，误识率千分之一对应分数为80分，误识率万分之一对应分数为90分； 
若人脸均为类似自拍照（人脸质量较好）， 
误识率百分之一对应分数为60分，误识率千分之一对应分数为70分，误识率万分之一对应分数为80分。 
建议分数不要超过90分。您可以根据实际情况选择合适的分数。
     */
    public $Score;
    /**
     * @param string $PersonId 人员ID
     * @param string $FaceId 人脸ID
     * @param float $Score 候选者的匹配得分。 
10万大小人脸库，若人脸均为类似抓拍照（人脸质量较差）， 
误识率百分之一对应分数为70分，误识率千分之一对应分数为80分，误识率万分之一对应分数为90分； 
若人脸均为类似自拍照（人脸质量较好）， 
误识率百分之一对应分数为60分，误识率千分之一对应分数为70分，误识率万分之一对应分数为80分。 
建议分数不要超过90分。您可以根据实际情况选择合适的分数。
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("FaceId",$param) and $param["FaceId"] !== null) {
            $this->FaceId = $param["FaceId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
