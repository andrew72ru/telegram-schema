<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the value of the default disable_notification parameter, used when a message is sent to a chat @chat_id Chat identifier @default_disable_notification New value of default_disable_notification.
 */
class ToggleChatDefaultDisableNotification extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('chat_id')]
        private int $chatId,
        #[SerializedName('default_disable_notification')]
        private bool $defaultDisableNotification,
    ) {
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    public function getDefaultDisableNotification(): bool
    {
        return $this->defaultDisableNotification;
    }

    public function setDefaultDisableNotification(bool $defaultDisableNotification): self
    {
        $this->defaultDisableNotification = $defaultDisableNotification;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleChatDefaultDisableNotification',
            'chat_id' => $this->getChatId(),
            'default_disable_notification' => $this->getDefaultDisableNotification(),
        ];
    }
}
