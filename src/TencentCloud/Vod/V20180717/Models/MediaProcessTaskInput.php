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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getTranscodeTaskSet() 获取视频转码任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTranscodeTaskSet(array $TranscodeTaskSet) 设置视频转码任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnimatedGraphicTaskSet() 获取视频转动图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnimatedGraphicTaskSet(array $AnimatedGraphicTaskSet) 设置视频转动图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSnapshotByTimeOffsetTaskSet() 获取对视频按时间点截图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotByTimeOffsetTaskSet(array $SnapshotByTimeOffsetTaskSet) 设置对视频按时间点截图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSampleSnapshotTaskSet() 获取对视频采样截图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSampleSnapshotTaskSet(array $SampleSnapshotTaskSet) 设置对视频采样截图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImageSpriteTaskSet() 获取对视频截雪碧图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageSpriteTaskSet(array $ImageSpriteTaskSet) 设置对视频截雪碧图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCoverBySnapshotTaskSet() 获取对视频截图做封面任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverBySnapshotTaskSet(array $CoverBySnapshotTaskSet) 设置对视频截图做封面任务列表。
注意：此字段可能返回 null，表示取不到有效值。
 */

/**
 *视频处理任务类型
 */
class MediaProcessTaskInput extends AbstractModel
{
    /**
     * @var array 视频转码任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TranscodeTaskSet;

    /**
     * @var array 视频转动图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnimatedGraphicTaskSet;

    /**
     * @var array 对视频按时间点截图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotByTimeOffsetTaskSet;

    /**
     * @var array 对视频采样截图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SampleSnapshotTaskSet;

    /**
     * @var array 对视频截雪碧图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageSpriteTaskSet;

    /**
     * @var array 对视频截图做封面任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverBySnapshotTaskSet;
    /**
     * @param array $TranscodeTaskSet 视频转码任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnimatedGraphicTaskSet 视频转动图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SnapshotByTimeOffsetTaskSet 对视频按时间点截图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SampleSnapshotTaskSet 对视频采样截图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImageSpriteTaskSet 对视频截雪碧图任务列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CoverBySnapshotTaskSet 对视频截图做封面任务列表。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TranscodeTaskSet",$param) and $param["TranscodeTaskSet"] !== null) {
            $this->TranscodeTaskSet = [];
            foreach ($param["TranscodeTaskSet"] as $key => $value){
                $obj = new TranscodeTaskInput();
                $obj->deserialize($value);
                array_push($this->TranscodeTaskSet, $obj);
            }
        }

        if (array_key_exists("AnimatedGraphicTaskSet",$param) and $param["AnimatedGraphicTaskSet"] !== null) {
            $this->AnimatedGraphicTaskSet = [];
            foreach ($param["AnimatedGraphicTaskSet"] as $key => $value){
                $obj = new AnimatedGraphicTaskInput();
                $obj->deserialize($value);
                array_push($this->AnimatedGraphicTaskSet, $obj);
            }
        }

        if (array_key_exists("SnapshotByTimeOffsetTaskSet",$param) and $param["SnapshotByTimeOffsetTaskSet"] !== null) {
            $this->SnapshotByTimeOffsetTaskSet = [];
            foreach ($param["SnapshotByTimeOffsetTaskSet"] as $key => $value){
                $obj = new SnapshotByTimeOffsetTaskInput();
                $obj->deserialize($value);
                array_push($this->SnapshotByTimeOffsetTaskSet, $obj);
            }
        }

        if (array_key_exists("SampleSnapshotTaskSet",$param) and $param["SampleSnapshotTaskSet"] !== null) {
            $this->SampleSnapshotTaskSet = [];
            foreach ($param["SampleSnapshotTaskSet"] as $key => $value){
                $obj = new SampleSnapshotTaskInput();
                $obj->deserialize($value);
                array_push($this->SampleSnapshotTaskSet, $obj);
            }
        }

        if (array_key_exists("ImageSpriteTaskSet",$param) and $param["ImageSpriteTaskSet"] !== null) {
            $this->ImageSpriteTaskSet = [];
            foreach ($param["ImageSpriteTaskSet"] as $key => $value){
                $obj = new ImageSpriteTaskInput();
                $obj->deserialize($value);
                array_push($this->ImageSpriteTaskSet, $obj);
            }
        }

        if (array_key_exists("CoverBySnapshotTaskSet",$param) and $param["CoverBySnapshotTaskSet"] !== null) {
            $this->CoverBySnapshotTaskSet = [];
            foreach ($param["CoverBySnapshotTaskSet"] as $key => $value){
                $obj = new CoverBySnapshotTaskInput();
                $obj->deserialize($value);
                array_push($this->CoverBySnapshotTaskSet, $obj);
            }
        }
    }
}
