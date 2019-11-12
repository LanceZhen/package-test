<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/11
 * Time: 18:32
 */
namespace Lance\PackageTest;
use \Illuminate\Support\Facades\Facade as LaravelFacade;
class Facade extends LaravelFacade{
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}
