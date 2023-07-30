<?php

namespace Nece\Brawl;

/**
 * 结果基类
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-16
 */
abstract class ResultAbstract extends ParameterAbstract
{
    protected $request_id;
    protected $success = false;
    protected $raw;

    /**
     * 设置结果成功状态
     *
     * @Author nece001@163.com
     * @DateTime 2023-07-30
     *
     * @return void
     */
    public function setSuccess()
    {
        $this->success = true;
    }

    /**
     * 获取结果成功状态
     *
     * @Author nece001@163.com
     * @DateTime 2023-07-30
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

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
     * 获取请求ID
     * 
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * 设置请求ID
     *
     * @return self
     */
    public function setRequestId($request_id)
    {
        $this->request_id = $request_id;

        return $this;
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
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }
}
