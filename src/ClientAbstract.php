<?php

namespace Nece\Brawl;

/**
 * 客户端基类
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-17
 */
abstract class ClientAbstract
{
    protected $error_message;
    protected $config = array();

    /**
     * 获取错误消息内容
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-17
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->error_message;
    }

    /**
     * 设置配置
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @param ConfigAbstract $config
     *
     * @return void
     */
    public function setConfig(ConfigAbstract $config)
    {
        $this->config = $config->getConfig();
    }

    /**
     * 获取配置值
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-17
     *
     * @param string $key
     * @param mixed $default
     * @param boolean $allow_empty 是否接受空值，不接受值为空时返回默认值（默认接受）
     *
     * @return mixed
     */
    public function getConfigValue($key, $default = null, $allow_empty = true)
    {
        if (isset($this->config[$key])) {
            if ($allow_empty) {
                return $this->config[$key];
            } else {
                return empty($this->config[$key]) ? $default : $this->config[$key];
            }
        }

        return $default;
    }
}
