<?php

require_once QCLOUDAPI_ROOT_PATH . '/Module/Base.php';
 /**
 * QcloudApi_Module_Monitor
 * 云监控模块类
 */
class QcloudApi_Module_MonitorDisk extends QcloudApi_Module_Base
{
    /**
     * $_serverHost
     * 接口域名
     * @var string
     */
    protected $_serverHost = 'monitor.tencentcloudapi.com';
    public function __construct(array $config = array())
    {
        parent::__construct($config);
        $this->_serverUri = '/';
    }
}
