<?php

namespace Nece\Brawl;

/**
 * 结果基类
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-16
 */
abstract class ResultAbstract
{

    protected $raw;

    /**
     * 设置原始数据
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @param string $content
     *
     * @return void
     */
    public function setRaw($content)
    {
        $this->raw = $content;
    }

    /**
     * 获取原始数据
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @return string
     */
    public function getRaw()
    {
        return $this->raw;
    }

    /**
     * 转为json
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-16
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this, JSON_UNESCAPED_UNICODE);
    }
}
