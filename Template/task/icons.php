<?php
    $user_id = $this->app->userSession->getId();
    $notifications = $this->app->userUnreadNotificationModel->getAll($user_id);
    $notifications = array_filter($notifications, function ($notification) use ($task) {
        $event_data = $notification['event_data'];
        if (isset($event_data['task']) && $event_data['task']['id'] == $task['id']) {
            return true;
        }

        return false;
    });
?>
<?php if (!empty($notifications)): ?>
    <i aria-hidden="true" class="fa fa-bell-o"></i>
<?php endif; ?>
