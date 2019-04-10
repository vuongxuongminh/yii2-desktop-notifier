<?php
/**
 * @link https://github.com/vuongxuongminh/yii2-desktop-notifier
 * @copyright Copyright (c) 2019 Vuong Xuong Minh
 * @license [New BSD License](http://www.opensource.org/licenses/bsd-license.php)
 */

namespace vxm\desktopNotifier;

use yii\base\Behavior as BaseBehavior;

use Joli\JoliNotif\Notification;
use Joli\JoliNotif\NotifierFactory;

/**
 * Class Behavior
 *
 * @author Vuong Minh <vuongxuongminh@gmail.com>
 * @since 1.0.0
 */
class Behavior extends BaseBehavior
{
    /**
     * Send desktop notify
     *
     * @param string $title of notice
     * @param string $body content of notice message
     * @param null $icon of notice
     */
    public function desktopNotify(string $title, string $body, $icon = null)
    {
        $notification = new Notification();
        $notification->setTitle($title);
        $notification->setBody($body);

        if ($icon !== null) {
            $notification->setIcon($icon);
        }

        NotifierFactory::create()->send($notification);
    }

}
