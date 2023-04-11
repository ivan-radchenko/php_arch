<?php

namespace ivan\Architecture\Services;

use ivan\Architecture\Notifies\UserNotificationInterface;
use ivan\Architecture\Model\User;
use ivan\Architecture\Vendor\SMSer;

class SMSNotificationService implements UserNotificationInterface
{
    private SMSer $smser;
    private EmailNotificationService $fallbackService;

    public function __construct(SMSer $smser, EmailNotificationService $fallbackService)
    {
        $this->fallbackService = $fallbackService;
        $this->smser = $smser;
    }

    public function notifyUser(User $user): void
    {
        if ($user->phone) {
            $this->smser->send($user->phone);
        } else {
            $this->fallbackService->notifyUser($user);
        }
    }
}
