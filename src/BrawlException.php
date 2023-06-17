<?php

namespace Nece\Brawl;

use Exception;

/**
 * 异常类
 *
 * @Author nece001@163.com
 * @DateTime 2023-06-17
 */
class BrawlException extends Exception
{
    public function __construct($message, $code='', $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->code = $code;
    }
}
