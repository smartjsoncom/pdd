<?php
namespace SmartJson\Pdd;

/**
 * Pop接口调用的异常类
 */
class PopHttpException extends \Exception
{
    public function errorMessage(){
        return $this->getMessage();
    }
}