<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Ichtrojan\Otp\Otp;
class EmailVerificationNotification extends Notification
{
    use Queueable;
    public $message;
    public $subject;
    public $FromEmail;
    public $mailar;
    public $Otp;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
    $this->message="Use the below code for verification process";
    $this->subject="Verification Email";
    $this->mailar="smtp";
    $this->FromEmail="motasemnassif2@gmail.com";
    $this->Otp= new Otp;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $otp=$this->Otp->generate($notifiable->email,6,60);
        return (new MailMessage)
            ->mailer('smtp')
            ->subject($this->subject)
            ->greeting('Hello '.$notifiable->First_name)
            ->line($this->message)
        ->line('code'.$otp->token);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
