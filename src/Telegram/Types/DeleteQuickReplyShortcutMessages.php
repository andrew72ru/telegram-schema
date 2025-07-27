<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes specified quick reply messages.
 */
class DeleteQuickReplyShortcutMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the quick reply shortcut to which the messages belong */
        #[SerializedName('shortcut_id')]
        private int $shortcutId,
        /** Unique identifiers of the messages */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
    ) {
    }

    /**
     * Get Unique identifier of the quick reply shortcut to which the messages belong.
     */
    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    /**
     * Set Unique identifier of the quick reply shortcut to which the messages belong.
     */
    public function setShortcutId(int $shortcutId): self
    {
        $this->shortcutId = $shortcutId;

        return $this;
    }

    /**
     * Get Unique identifiers of the messages.
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Unique identifiers of the messages.
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteQuickReplyShortcutMessages',
            'shortcut_id' => $this->getShortcutId(),
            'message_ids' => $this->getMessageIds(),
        ];
    }
}
