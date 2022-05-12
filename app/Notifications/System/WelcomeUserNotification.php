<?php

namespace App\Notifications\System;

use Closure;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class WelcomeUserNotification extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * The callback that should be used to build the mail message.
     *
     * @var Closure|null
     */
    public static $toMailCallback;

    /**
     * Create a new notification instance.
     *
     * @param $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     * @SuppressWarnings("unused")
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $this->token);
        }

        return (new MailMessage())
            ->subject(Lang::get('Welcome'))
            ->greeting(Lang::get('Hello!'))
            ->line(Lang::get('You are receiving this email because it was registered in our system.'))
            ->action(
                Lang::get('Create Password'),
                url(
                    config('app.url') . route(
                        'password.reset',
                        [
                            'token' => $this->token,
                            'email' => $notifiable->getEmailForPasswordReset()
                        ],
                        false
                    )
                )
            )
            ->line(
                Lang::get(
                    'This password create link will expire in :count minutes.',
                    ['count' => config('auth.passwords.' . config('auth.defaults.passwords') . '.expire')]
                )
            )
            ->line(Lang::get('If you did not request a account create, no further action is required.'));
    }

    /**
     * Set a callback that should be used when building the notification mail message.
     *
     * @param Closure $callback
     * @return void
     */
    public static function toMailUsing(Closure $callback)
    {
        static::$toMailCallback = $callback;
    }
}
