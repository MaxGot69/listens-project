<?php
namespace App\Listeners;

use App\Events\ClientCreated;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ClientCreatedNotification;
use Illuminate\Support\Facades\Log;

class SendAdminNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ClientCreated $event): void
    {
        // Логируем информацию о событии
        Log::info('Новый клиент создан', ['client' => $event->client]);

        // Если используем логирование почты, письма не будут отправляться, только логироваться.
        // Почта будет записана в storage/logs/laravel.log
        //Mail::to('admin@example.com')->send(new ClientCreatedNotification($event->client));
    }
}
