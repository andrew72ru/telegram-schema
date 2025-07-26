<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Deletes a quick reply shortcut @shortcut_id Unique identifier of the quick reply shortcut
 */
class DeleteQuickReplyShortcut extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('shortcut_id')]
        private int $shortcutId,
    ) {
    }

    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    public function setShortcutId(int $shortcutId): self
    {
        $this->shortcutId = $shortcutId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteQuickReplyShortcut',
            'shortcut_id' => $this->getShortcutId(),
        ];
    }
}
