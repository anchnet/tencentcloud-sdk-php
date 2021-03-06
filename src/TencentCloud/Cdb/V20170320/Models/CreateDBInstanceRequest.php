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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getMemory() 获取实例内存大小，单位：MB，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的内存规格
 * @method void setMemory(integer $Memory) 设置实例内存大小，单位：MB，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的内存规格
 * @method integer getVolume() 获取实例硬盘大小，单位：GB，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的硬盘范围
 * @method void setVolume(integer $Volume) 设置实例硬盘大小，单位：GB，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的硬盘范围
 * @method integer getPeriod() 获取实例时长，单位：月，可选值包括[1,2,3,4,5,6,7,8,9,10,11,12,24,36]
 * @method void setPeriod(integer $Period) 设置实例时长，单位：月，可选值包括[1,2,3,4,5,6,7,8,9,10,11,12,24,36]
 * @method integer getGoodsNum() 获取实例数量，默认值为1, 最小值1，最大值为100
 * @method void setGoodsNum(integer $GoodsNum) 设置实例数量，默认值为1, 最小值1，最大值为100
 * @method string getZone() 获取可用区信息，该参数缺省时，系统会自动选择一个可用区，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的可用区
 * @method void setZone(string $Zone) 设置可用区信息，该参数缺省时，系统会自动选择一个可用区，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的可用区
 * @method string getUniqVpcId() 获取私有网络ID，如果不传则默认选择基础网络，请使用[查询私有网络列表](/document/api/215/15778)
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络ID，如果不传则默认选择基础网络，请使用[查询私有网络列表](/document/api/215/15778)
 * @method string getUniqSubnetId() 获取私有网络下的子网ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用[查询子网列表](/document/api/215/15784)
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有网络下的子网ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用[查询子网列表](/document/api/215/15784)
 * @method integer getProjectId() 获取项目ID，不填为默认项目。请使用[查询项目列表](https://cloud.tencent.com/document/product/378/4400)接口获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID，不填为默认项目。请使用[查询项目列表](https://cloud.tencent.com/document/product/378/4400)接口获取项目ID
 * @method integer getPort() 获取自定义端口，端口支持范围：[ 1024-65535 ]
 * @method void setPort(integer $Port) 设置自定义端口，端口支持范围：[ 1024-65535 ]
 * @method string getInstanceRole() 获取实例类型，默认为 master，支持值包括：master-表示主实例，dr-表示灾备实例，ro-表示只读实例
 * @method void setInstanceRole(string $InstanceRole) 设置实例类型，默认为 master，支持值包括：master-表示主实例，dr-表示灾备实例，ro-表示只读实例
 * @method string getMasterInstanceId() 获取实例ID，购买只读实例时必填，该字段表示只读实例的主实例ID，请使用[查询实例列表](https://cloud.tencent.com/document/api/236/15872)接口查询云数据库实例ID
 * @method void setMasterInstanceId(string $MasterInstanceId) 设置实例ID，购买只读实例时必填，该字段表示只读实例的主实例ID，请使用[查询实例列表](https://cloud.tencent.com/document/api/236/15872)接口查询云数据库实例ID
 * @method string getEngineVersion() 获取MySQL版本，值包括：5.5、5.6和5.7，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的实例版本
 * @method void setEngineVersion(string $EngineVersion) 设置MySQL版本，值包括：5.5、5.6和5.7，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的实例版本
 * @method string getPassword() 获取设置root帐号密码，密码规则：8-64个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义
 * @method void setPassword(string $Password) 设置设置root帐号密码，密码规则：8-64个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义
 * @method integer getProtectMode() 获取数据复制方式，默认为0，支持值包括：0-表示异步复制，1-表示半同步复制，2-表示强同步复制
 * @method void setProtectMode(integer $ProtectMode) 设置数据复制方式，默认为0，支持值包括：0-表示异步复制，1-表示半同步复制，2-表示强同步复制
 * @method integer getDeployMode() 获取多可用区域，默认为0，支持值包括：0-表示单可用区，1-表示多可用区
 * @method void setDeployMode(integer $DeployMode) 设置多可用区域，默认为0，支持值包括：0-表示单可用区，1-表示多可用区
 * @method string getSlaveZone() 获取备库1的可用区信息，默认为zone的值
 * @method void setSlaveZone(string $SlaveZone) 设置备库1的可用区信息，默认为zone的值
 * @method array getParamList() 获取参数列表，参数格式如ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过[查询参数列表](/document/product/236/6369)查询支持设置的参数
 * @method void setParamList(array $ParamList) 设置参数列表，参数格式如ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过[查询参数列表](/document/product/236/6369)查询支持设置的参数
 * @method string getBackupZone() 获取备库2的可用区ID，默认为0，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义
 * @method void setBackupZone(string $BackupZone) 设置备库2的可用区ID，默认为0，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义
 * @method integer getAutoRenewFlag() 获取自动续费标记，可选值为：0-不自动续费；1-自动续费
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记，可选值为：0-不自动续费；1-自动续费
 * @method string getMasterRegion() 获取主实例地域信息，购买灾备实例时，该字段必填
 * @method void setMasterRegion(string $MasterRegion) 设置主实例地域信息，购买灾备实例时，该字段必填
 * @method array getSecurityGroup() 获取安全组参数，可使用[查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850)接口查询某个项目的安全组详情
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组参数，可使用[查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850)接口查询某个项目的安全组详情
 * @method RoGroup getRoGroup() 获取只读实例参数
 * @method void setRoGroup(RoGroup $RoGroup) 设置只读实例参数
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method array getResourceTags() 获取实例要绑定的标签
 * @method void setResourceTags(array $ResourceTags) 设置实例要绑定的标签
 */

/**
 *CreateDBInstance请求参数结构体
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var integer 实例内存大小，单位：MB，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的内存规格
     */
    public $Memory;

    /**
     * @var integer 实例硬盘大小，单位：GB，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的硬盘范围
     */
    public $Volume;

    /**
     * @var integer 实例时长，单位：月，可选值包括[1,2,3,4,5,6,7,8,9,10,11,12,24,36]
     */
    public $Period;

    /**
     * @var integer 实例数量，默认值为1, 最小值1，最大值为100
     */
    public $GoodsNum;

    /**
     * @var string 可用区信息，该参数缺省时，系统会自动选择一个可用区，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的可用区
     */
    public $Zone;

    /**
     * @var string 私有网络ID，如果不传则默认选择基础网络，请使用[查询私有网络列表](/document/api/215/15778)
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络下的子网ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用[查询子网列表](/document/api/215/15784)
     */
    public $UniqSubnetId;

    /**
     * @var integer 项目ID，不填为默认项目。请使用[查询项目列表](https://cloud.tencent.com/document/product/378/4400)接口获取项目ID
     */
    public $ProjectId;

    /**
     * @var integer 自定义端口，端口支持范围：[ 1024-65535 ]
     */
    public $Port;

    /**
     * @var string 实例类型，默认为 master，支持值包括：master-表示主实例，dr-表示灾备实例，ro-表示只读实例
     */
    public $InstanceRole;

    /**
     * @var string 实例ID，购买只读实例时必填，该字段表示只读实例的主实例ID，请使用[查询实例列表](https://cloud.tencent.com/document/api/236/15872)接口查询云数据库实例ID
     */
    public $MasterInstanceId;

    /**
     * @var string MySQL版本，值包括：5.5、5.6和5.7，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的实例版本
     */
    public $EngineVersion;

    /**
     * @var string 设置root帐号密码，密码规则：8-64个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义
     */
    public $Password;

    /**
     * @var integer 数据复制方式，默认为0，支持值包括：0-表示异步复制，1-表示半同步复制，2-表示强同步复制
     */
    public $ProtectMode;

    /**
     * @var integer 多可用区域，默认为0，支持值包括：0-表示单可用区，1-表示多可用区
     */
    public $DeployMode;

    /**
     * @var string 备库1的可用区信息，默认为zone的值
     */
    public $SlaveZone;

    /**
     * @var array 参数列表，参数格式如ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过[查询参数列表](/document/product/236/6369)查询支持设置的参数
     */
    public $ParamList;

    /**
     * @var string 备库2的可用区ID，默认为0，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义
     */
    public $BackupZone;

    /**
     * @var integer 自动续费标记，可选值为：0-不自动续费；1-自动续费
     */
    public $AutoRenewFlag;

    /**
     * @var string 主实例地域信息，购买灾备实例时，该字段必填
     */
    public $MasterRegion;

    /**
     * @var array 安全组参数，可使用[查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850)接口查询某个项目的安全组详情
     */
    public $SecurityGroup;

    /**
     * @var RoGroup 只读实例参数
     */
    public $RoGroup;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var array 实例要绑定的标签
     */
    public $ResourceTags;
    /**
     * @param integer $Memory 实例内存大小，单位：MB，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的内存规格
     * @param integer $Volume 实例硬盘大小，单位：GB，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的硬盘范围
     * @param integer $Period 实例时长，单位：月，可选值包括[1,2,3,4,5,6,7,8,9,10,11,12,24,36]
     * @param integer $GoodsNum 实例数量，默认值为1, 最小值1，最大值为100
     * @param string $Zone 可用区信息，该参数缺省时，系统会自动选择一个可用区，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的可用区
     * @param string $UniqVpcId 私有网络ID，如果不传则默认选择基础网络，请使用[查询私有网络列表](/document/api/215/15778)
     * @param string $UniqSubnetId 私有网络下的子网ID，如果设置了 UniqVpcId，则 UniqSubnetId 必填，请使用[查询子网列表](/document/api/215/15784)
     * @param integer $ProjectId 项目ID，不填为默认项目。请使用[查询项目列表](https://cloud.tencent.com/document/product/378/4400)接口获取项目ID
     * @param integer $Port 自定义端口，端口支持范围：[ 1024-65535 ]
     * @param string $InstanceRole 实例类型，默认为 master，支持值包括：master-表示主实例，dr-表示灾备实例，ro-表示只读实例
     * @param string $MasterInstanceId 实例ID，购买只读实例时必填，该字段表示只读实例的主实例ID，请使用[查询实例列表](https://cloud.tencent.com/document/api/236/15872)接口查询云数据库实例ID
     * @param string $EngineVersion MySQL版本，值包括：5.5、5.6和5.7，请使用[获取云数据库可售卖规格](https://cloud.tencent.com/document/api/236/17229)接口获取可创建的实例版本
     * @param string $Password 设置root帐号密码，密码规则：8-64个字符，至少包含字母、数字、字符（支持的字符：_+-&=!@#$%^*()）中的两种，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义
     * @param integer $ProtectMode 数据复制方式，默认为0，支持值包括：0-表示异步复制，1-表示半同步复制，2-表示强同步复制
     * @param integer $DeployMode 多可用区域，默认为0，支持值包括：0-表示单可用区，1-表示多可用区
     * @param string $SlaveZone 备库1的可用区信息，默认为zone的值
     * @param array $ParamList 参数列表，参数格式如ParamList.0.Name=auto_increment&ParamList.0.Value=1。可通过[查询参数列表](/document/product/236/6369)查询支持设置的参数
     * @param string $BackupZone 备库2的可用区ID，默认为0，购买主实例时可指定该参数，购买只读实例或者灾备实例时指定该参数无意义
     * @param integer $AutoRenewFlag 自动续费标记，可选值为：0-不自动续费；1-自动续费
     * @param string $MasterRegion 主实例地域信息，购买灾备实例时，该字段必填
     * @param array $SecurityGroup 安全组参数，可使用[查询项目安全组信息](https://cloud.tencent.com/document/api/236/15850)接口查询某个项目的安全组详情
     * @param RoGroup $RoGroup 只读实例参数
     * @param string $InstanceName 实例名称
     * @param array $ResourceTags 实例要绑定的标签
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
        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("MasterInstanceId",$param) and $param["MasterInstanceId"] !== null) {
            $this->MasterInstanceId = $param["MasterInstanceId"];
        }

        if (array_key_exists("EngineVersion",$param) and $param["EngineVersion"] !== null) {
            $this->EngineVersion = $param["EngineVersion"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("BackupZone",$param) and $param["BackupZone"] !== null) {
            $this->BackupZone = $param["BackupZone"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("MasterRegion",$param) and $param["MasterRegion"] !== null) {
            $this->MasterRegion = $param["MasterRegion"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("RoGroup",$param) and $param["RoGroup"] !== null) {
            $this->RoGroup = new RoGroup();
            $this->RoGroup->deserialize($param["RoGroup"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
