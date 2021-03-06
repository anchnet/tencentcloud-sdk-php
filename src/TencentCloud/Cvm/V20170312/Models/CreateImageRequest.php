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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getInstanceId() 获取需要制作镜像的实例ID
 * @method void setInstanceId(string $InstanceId) 设置需要制作镜像的实例ID
 * @method string getImageDescription() 获取镜像描述
 * @method void setImageDescription(string $ImageDescription) 设置镜像描述
 * @method string getForcePoweroff() 获取软关机失败时是否执行强制关机以制作镜像
 * @method void setForcePoweroff(string $ForcePoweroff) 设置软关机失败时是否执行强制关机以制作镜像
 * @method string getSysprep() 获取创建Windows镜像时是否启用Sysprep
 * @method void setSysprep(string $Sysprep) 设置创建Windows镜像时是否启用Sysprep
 * @method string getReboot() 获取实例处于运行中时，是否允许关机执行制作镜像任务。
 * @method void setReboot(string $Reboot) 设置实例处于运行中时，是否允许关机执行制作镜像任务。
 * @method array getDataDiskIds() 获取实例需要制作镜像的数据盘Id
 * @method void setDataDiskIds(array $DataDiskIds) 设置实例需要制作镜像的数据盘Id
 * @method array getSnapshotIds() 获取需要制作镜像的快照Id,必须包含一个系统盘快照
 * @method void setSnapshotIds(array $SnapshotIds) 设置需要制作镜像的快照Id,必须包含一个系统盘快照
 * @method boolean getDryRun() 获取DryRun
 * @method void setDryRun(boolean $DryRun) 设置DryRun
 */

/**
 *CreateImage请求参数结构体
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 需要制作镜像的实例ID
     */
    public $InstanceId;

    /**
     * @var string 镜像描述
     */
    public $ImageDescription;

    /**
     * @var string 软关机失败时是否执行强制关机以制作镜像
     */
    public $ForcePoweroff;

    /**
     * @var string 创建Windows镜像时是否启用Sysprep
     */
    public $Sysprep;

    /**
     * @var string 实例处于运行中时，是否允许关机执行制作镜像任务。
     */
    public $Reboot;

    /**
     * @var array 实例需要制作镜像的数据盘Id
     */
    public $DataDiskIds;

    /**
     * @var array 需要制作镜像的快照Id,必须包含一个系统盘快照
     */
    public $SnapshotIds;

    /**
     * @var boolean DryRun
     */
    public $DryRun;
    /**
     * @param string $ImageName 镜像名称
     * @param string $InstanceId 需要制作镜像的实例ID
     * @param string $ImageDescription 镜像描述
     * @param string $ForcePoweroff 软关机失败时是否执行强制关机以制作镜像
     * @param string $Sysprep 创建Windows镜像时是否启用Sysprep
     * @param string $Reboot 实例处于运行中时，是否允许关机执行制作镜像任务。
     * @param array $DataDiskIds 实例需要制作镜像的数据盘Id
     * @param array $SnapshotIds 需要制作镜像的快照Id,必须包含一个系统盘快照
     * @param boolean $DryRun DryRun
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
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ForcePoweroff",$param) and $param["ForcePoweroff"] !== null) {
            $this->ForcePoweroff = $param["ForcePoweroff"];
        }

        if (array_key_exists("Sysprep",$param) and $param["Sysprep"] !== null) {
            $this->Sysprep = $param["Sysprep"];
        }

        if (array_key_exists("Reboot",$param) and $param["Reboot"] !== null) {
            $this->Reboot = $param["Reboot"];
        }

        if (array_key_exists("DataDiskIds",$param) and $param["DataDiskIds"] !== null) {
            $this->DataDiskIds = $param["DataDiskIds"];
        }

        if (array_key_exists("SnapshotIds",$param) and $param["SnapshotIds"] !== null) {
            $this->SnapshotIds = $param["SnapshotIds"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
