<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A quick reply shortcut and all its messages were deleted @shortcut_id The identifier of the deleted shortcut
 */
class UpdateQuickReplyShortcutDeleted extends Update implements \JsonSerializable
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
            '@type' => 'updateQuickReplyShortcutDeleted',
            'shortcut_id' => $this->getShortcutId(),
        ];
    }
}
