<?php
/**
 * Created by PhpStorm.
 * User: wangyibo
 * Date: 7/14/16
 * Time: 17:40
 */

namespace Adocwang\Pat\LogDrivers;


interface LogDriverInterface
{
    public function write($lineContent);
}