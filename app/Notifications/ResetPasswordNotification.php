<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends ResetPassword
{
    use Queueable;

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $this->token);
        }
        
        $mailMessage = (new MailMessage)
            ->subject('Recuperação de Senha')
            ->line('Você está recebendo esta mensagem porque recebemos uma requisição para resetar a senha da sua conta.')
            ->action('Resetar Senha', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('Se você não fez esta solicitação, por favor ignore este email.');

        $mailMessage->markdown('emails.reset');

        return $mailMessage;
    }
}
