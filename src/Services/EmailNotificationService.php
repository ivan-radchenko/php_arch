<?php

namespace ivan\Architecture\Services;

use ivan\Architecture\Notifies\UserNotificationInterface;
use ivan\Architecture\Model\User;

class EmailNotificationService implements UserNotificationInterface
{
    public function notifyUser(User $user): void
    {
        echo 'Отправка email на ' . $user->email . PHP_EOL;
    }
}
