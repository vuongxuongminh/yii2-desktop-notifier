<?php
/**
 * @link https://github.com/vuongxuongminh/yii2-desktop-notifier
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace vxm\desktopNotifier;

use yii\base\Event;
use yii\base\BootstrapInterface;
use yii\console\Controller;

/**
 * Class Bootstrap help to attach an `\vxm\desktopNotifier\Behavior` to all `\yii\console\Controller` provide methods of it to controllers.
 *
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class Bootstrap implements BootstrapInterface
{

    /**
     * @inheritDoc
     */
    public function bootstrap($app)
    {
        Event::on(Controller::class, Controller::EVENT_BEFORE_ACTION, function (Event $event) {
            /** @var Controller $controller */
            $controller = $event->sender;
            $controller->attachBehavior('__desktopNotifier', Behavior::class);
        });
    }

}
