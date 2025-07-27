<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Loads quick reply messages that can be sent by a given quick reply shortcut. The loaded messages will be sent through updateQuickReplyShortcutMessages.
 */
class LoadQuickReplyShortcutMessages extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the quick reply shortcut */
        #[SerializedName('shortcut_id')]
        private int $shortcutId,
    ) {
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'loadQuickReplyShortcutMessages',
            'shortcut_id' => $this->getShortcutId(),
        ];
    }
}
