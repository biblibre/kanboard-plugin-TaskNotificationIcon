<?php

namespace Kanboard\Plugin\TaskNotificationIcon;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/TaskNotificationIcon/assets/css/TaskNotificationIcon.css'));
        $this->template->hook->attach('template:board:task:icons', 'TaskNotificationIcon:task/icons');
    }

    public function getPluginName()
    {
        return 'TaskNotificationIcon';
    }

    public function getPluginDescription()
    {
        return t('Add an icon in tasks corresponding to an unread notification');
    }

    public function getPluginAuthor()
    {
        return 'Julian Maurice';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/biblibre/kanboard-plugin-TaskNotificationIcon';
    }
}

