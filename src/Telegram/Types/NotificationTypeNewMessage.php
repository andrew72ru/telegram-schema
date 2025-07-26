<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * New message was received @message The message @show_preview True, if message content must be displayed in notifications
 */
class NotificationTypeNewMessage extends NotificationType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('message')]
        private Message|null $message = null,
        #[SerializedName('show_preview')]
        private bool $showPreview,
    ) {
    }

    public function getMessage(): Message|null
    {
        return $this->message;
    }

    public function setMessage(Message|null $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getShowPreview(): bool
    {
        return $this->showPreview;
    }

    public function setShowPreview(bool $showPreview): self
    {
        $this->showPreview = $showPreview;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'notificationTypeNewMessage',
            'message' => $this->getMessage(),
            'show_preview' => $this->getShowPreview(),
        ];
    }
}
