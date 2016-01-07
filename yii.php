<?php
/**
 * Yii bootstrap file.
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright 2008-2013 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * @package system
 * @since 1.0
 */
require(dirname(__FILE__).'/YiiBase.php');
//自定义引用常量或其他类等等
require(dirname(__FILE__).'/mw/Dsfeasemob.php');//环信、聊天
require(dirname(__FILE__).'/mw/oss/sdkmw.class.php');//OSS、图片
require(dirname(__FILE__).'/mw/Dsfgetui.php');//个推、推送通知
// require(dirname(__FILE__).'/mw/DsfJpush.php');
/**
 * Yii is a helper class serving common framework functionalities.
 * It encapsulates {@link YiiBase} which provides the actual implementation.
 * By writing your own Yii class, you can customize some functionalities of YiiBase.
 */
class Yii extends YiiBase
{

}
