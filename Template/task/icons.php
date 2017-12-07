<?php
    $user_id = $this->app->userSession->getId();
    $notifications = $this->app->userUnreadNotificationModel->getAll($user_id);
    $notifications = array_filter($notifications, function ($notification) use ($task) {
        return $notification['event_data']['task']['id'] == $task['id'];
    });
?>
<?php if (!empty($notifications)): ?>
    <i aria-hidden="true" class="fa fa-bell-o"></i>
<?php endif; ?>
