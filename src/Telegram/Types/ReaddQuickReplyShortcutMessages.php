<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Readds quick reply messages which failed to add. Can be called only for messages for which messageSendingStateFailed.can_retry is true and after specified in messageSendingStateFailed.retry_after time passed.
 */
class ReaddQuickReplyShortcutMessages extends QuickReplyMessages implements \JsonSerializable
{
    public function __construct(
        /** Name of the target shortcut */
        #[SerializedName('shortcut_name')]
        private string $shortcutName,
        /** Identifiers of the quick reply messages to readd. Message identifiers must be in a strictly increasing order */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
    ) {
    }

    /**
     * Get Name of the target shortcut.
     */
    public function getShortcutName(): string
    {
        return $this->shortcutName;
    }

    /**
     * Set Name of the target shortcut.
     */
    public function setShortcutName(string $shortcutName): self
    {
        $this->shortcutName = $shortcutName;

        return $this;
    }

    /**
     * Get Identifiers of the quick reply messages to readd. Message identifiers must be in a strictly increasing order.
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Identifiers of the quick reply messages to readd. Message identifiers must be in a strictly increasing order.
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'readdQuickReplyShortcutMessages',
            'shortcut_name' => $this->getShortcutName(),
            'message_ids' => $this->getMessageIds(),
        ];
    }
}
