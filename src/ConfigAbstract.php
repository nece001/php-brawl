<?php

namespace Nece\Brawl;

/**
 * 配置基类
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-16
 */
abstract class ConfigAbstract
{
    protected $template = array();
    protected $config = array();

    /**
     * 构建配置模板
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @return void
     */
    abstract public function buildTemplate();

    /**
     * 获取配置模板
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @return array
     */
    public function getTemplate()
    {
        if (!$this->template) {
            $this->buildTemplate();
        }

        return $this->template;
    }

    /**
     * 添加模板项
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @param bool $required
     * @param string $key
     * @param string $title
     * @param string $description
     * @param string $default
     * @param array $options
     *
     * @return void
     */
    protected function addTemplate($required, $key, $title, $description, $default = '', $options = array())
    {
        $this->template[] = array(
            'required' => $required,
            'key' => $key,
            'title' => $title,
            'description' => $description,
            'default' => $default,
            'options' => $options
        );
    }

    /**
     * 设置配置数据
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @param array $data
     *
     * @return void
     */
    public function setConfig(array $data)
    {
        $template = $this->getTemplate();
        foreach ($template as $row) {
            $key = $row['key'];
            $value = isset($data[$key]) ? $data[$key] : $row['default'];
            $this->config[$key] = $value;
        }
    }

    /**
     * 获取配置数据
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @return array
     */
    public function getConfig()
    {
        return $this->config;
    }
}
