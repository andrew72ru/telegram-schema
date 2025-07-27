<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new background was set in the chat.
 */
class MessageChatSetBackground extends MessageContent implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the message with a previously set same background; 0 if none. Can be an identifier of a deleted message */
        #[SerializedName('old_background_message_id')]
        private int $oldBackgroundMessageId,
        /** The new background */
        #[SerializedName('background')]
        private ChatBackground|null $background = null,
        /** True, if the background was set only for self */
        #[SerializedName('only_for_self')]
        private bool $onlyForSelf,
    ) {
    }

    /**
     * Get Identifier of the message with a previously set same background; 0 if none. Can be an identifier of a deleted message.
     */
    public function getOldBackgroundMessageId(): int
    {
        return $this->oldBackgroundMessageId;
    }

    /**
     * Set Identifier of the message with a previously set same background; 0 if none. Can be an identifier of a deleted message.
     */
    public function setOldBackgroundMessageId(int $oldBackgroundMessageId): self
    {
        $this->oldBackgroundMessageId = $oldBackgroundMessageId;

        return $this;
    }

    /**
     * Get The new background.
     */
    public function getBackground(): ChatBackground|null
    {
        return $this->background;
    }

    /**
     * Set The new background.
     */
    public function setBackground(ChatBackground|null $background): self
    {
        $this->background = $background;

        return $this;
    }

    /**
     * Get True, if the background was set only for self.
     */
    public function getOnlyForSelf(): bool
    {
        return $this->onlyForSelf;
    }

    /**
     * Set True, if the background was set only for self.
     */
    public function setOnlyForSelf(bool $onlyForSelf): self
    {
        $this->onlyForSelf = $onlyForSelf;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageChatSetBackground',
            'old_background_message_id' => $this->getOldBackgroundMessageId(),
            'background' => $this->getBackground(),
            'only_for_self' => $this->getOnlyForSelf(),
        ];
    }
}
