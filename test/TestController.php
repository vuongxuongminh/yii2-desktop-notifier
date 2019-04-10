<?php
/**
 * @link https://github.com/vuongxuongminh/yii2-console-menu
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace vxm\test\unit\desktopNotifier;

use yii\console\Controller as BaseController;

use vxm\desktopNotifier\Behavior;


/**
 * Class TestController
 *
 * @method void desktopNotify(string $title, string $body, $icon = null)
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class TestController extends BaseController
{

    public function actionBehaviorAttachedTest()
    {
        return $this->getBehavior('__desktopNotifier') instanceof Behavior;
    }


    public function actionNotifyTest()
    {
        $this->desktopNotify('VXM', 'test message');
    }

}
