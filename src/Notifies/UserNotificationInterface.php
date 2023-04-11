<?php

namespace ivan\Architecture\Notifies;

use ivan\Architecture\Model\User;

interface UserNotificationInterface
{
    public function notifyUser(User $user): void;
}
