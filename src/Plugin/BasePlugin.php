<?php
/**
 *                   _oo8oo_
 *                  o8888888o
 *                  88" . "88
 *                  (| -_- |)
 *                  0\  =  /0
 *                ___/'==='\___
 *              .' \\|     |// '.
 *             / \\|||  :  |||// \
 *            / _||||| -:- |||||_ \
 *            |   | \\\  -  /// |   |
 *            | \_|  ''\---/''  |_/ |
 *           \  .-\__  '-'  __/-.  /
 *         ___'. .'  /--.--\  '. .'___
 *       ."" '<  '.___\_<|>_/___.'  >' "".
 *     | | :  `- \`.:`\ _ /`:.`/ -`  : | |
 *     \  \ `-.   \_ __\ /__ _/   .-` /  /
 *  =====`-.____`.___ \_____/ ___.`____.-`=====
 *                   `=---=`
 *            佛祖保佑         永无bug
 *            Created by PhpStorm.
 *               User: kilingzhang
 *               Date: 18-3-23
 *               Time: 下午4:00
 */

namespace CoolQSDK\Plugin;

use CoolQSDK\PluginObserver;

abstract class BasePlugin implements PluginObserver
{
    public $Intercept;

    public $coolQ = null;

    public function __construct()
    {
        $this->Intercept = false;

        if (isset($this->coolQ)) {
            $this->coolQ->block = $this->Intercept;
        }
    }

    /**
     * @param bool $bool
     */
    public function setIntercept($bool = true)
    {
        $this->Intercept = $bool;
        
        if (isset($this->coolQ)) {
            $this->coolQ->block = $this->Intercept;
        }
    }

    /**
     * @return bool
     */
    public function isIntercept()
    {
        return $this->Intercept;
    }


}