<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends messages from a quick reply shortcut. Requires Telegram Business subscription. Can't be used to send paid messages.
 */
class SendQuickReplyShortcutMessages extends Messages implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the chat to which to send messages. The chat must be a private chat with a regular user */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Unique identifier of the quick reply shortcut */
        #[SerializedName('shortcut_id')]
        private int $shortcutId,
        /** Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates */
        #[SerializedName('sending_id')]
        private int $sendingId,
    ) {
    }

    /**
     * Get Identifier of the chat to which to send messages. The chat must be a private chat with a regular user.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Identifier of the chat to which to send messages. The chat must be a private chat with a regular user.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Unique identifier of the quick reply shortcut.
     */
    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    /**
     * Set Unique identifier of the quick reply shortcut.
     */
    public function setShortcutId(int $shortcutId): self
    {
        $this->shortcutId = $shortcutId;

        return $this;
    }

    /**
     * Get Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates.
     */
    public function getSendingId(): int
    {
        return $this->sendingId;
    }

    /**
     * Set Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates.
     */
    public function setSendingId(int $sendingId): self
    {
        $this->sendingId = $sendingId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendQuickReplyShortcutMessages',
            'chat_id' => $this->getChatId(),
            'shortcut_id' => $this->getShortcutId(),
            'sending_id' => $this->getSendingId(),
        ];
    }
}
