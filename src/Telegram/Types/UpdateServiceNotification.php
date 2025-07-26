<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A service notification from the server was received. Upon receiving this the application must show a popup with the content of the notification
 */
class UpdateServiceNotification extends Update implements \JsonSerializable
{
    public function __construct(
        /** Notification type. If type begins with "AUTH_KEY_DROP_", then two buttons "Cancel" and "Log out" must be shown under notification; if user presses the second, all local data must be destroyed using Destroy method */
        #[SerializedName('type')]
        private string $type,
        /** Notification content */
        #[SerializedName('content')]
        private MessageContent|null $content = null,
    ) {
    }

    /**
     * Get Notification type. If type begins with "AUTH_KEY_DROP_", then two buttons "Cancel" and "Log out" must be shown under notification; if user presses the second, all local data must be destroyed using Destroy method
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set Notification type. If type begins with "AUTH_KEY_DROP_", then two buttons "Cancel" and "Log out" must be shown under notification; if user presses the second, all local data must be destroyed using Destroy method
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Notification content
     */
    public function getContent(): MessageContent|null
    {
        return $this->content;
    }

    /**
     * Set Notification content
     */
    public function setContent(MessageContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateServiceNotification',
            'type' => $this->getType(),
            'content' => $this->getContent(),
        ];
    }
}
