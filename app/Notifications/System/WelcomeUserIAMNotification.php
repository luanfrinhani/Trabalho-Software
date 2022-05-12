<?php

namespace App\Notifications\System;

use Closure;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;

class WelcomeUserIAMNotification extends Notification
{
    /**
     * The callback that should be used to build the mail message.
     *
     * @var Closure|null
     */
    public static $toMailCallback;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, []);
        }

        return (new MailMessage())
            ->subject(Lang::get('Welcome'))
            ->greeting(Lang::get('Hello!'))
            ->line(
                Lang::get(
                    'You are receiving this email because it was registered in :app_name.',
                    ['app_name' => config('app.name')]
                )
            )
            ->action(
                Lang::get('Access'),
                url(
                    config('app.url') . route(
                        'login',
                        ['locale' => app()->getLocale()],
                        false
                    )
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
