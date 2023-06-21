<?php

namespace Nece\Brawl;

/**
 * 参数对象基类
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-21
 */
abstract class ParameterAbstract
{
    protected $params = array();

    /**
     * 返回参数数组
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-20
     *
     * @return array
     */
    abstract public function toArray();

    /**
     * 获取参数值
     *
     * @Author nece001@163.com
     * @DateTime 2023-06-20
     *
     * @param string $key 键名路径: root/foo/bar
     * @param mixed $default 键不存在时返回的值
     *
     * @return mixed
     */
    public function getParamValue($key, $default = null)
    {
        return $this->getValue($this->params, $key, $default);
    }

    /**
     * 根据路径获取多维数组指定键的值
     * 
     * @Author nece001@163.com
     * @DateTime 2023-06-12
     * 
     * @param array $array 数组
     * @param string $key 键名路径: root/foo/bar => $array['root']['foo']['bar']
     * @param mixed $default 键不存在时返回的值
     * 
     * @return mixed
     */
    protected function getValue($array, $key, $default = null)
    {
        $parts = explode('/', trim(str_replace('.', '/', $key), '/'));
        $value = $array;
        foreach ($parts as $key) {
            if (isset($value[$key])) {
                $value = $value[$key];
            } else {
                return $default;
            }
        }
        return $value;
    }
}
