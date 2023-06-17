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
    protected $config = array();

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
     *
     * @return mixed
     */
    public function getConfigValue($key, $default = null)
    {
        if (isset($this->config[$key])) {
            return $this->config[$key];
        }

        return $default;
    }
}
