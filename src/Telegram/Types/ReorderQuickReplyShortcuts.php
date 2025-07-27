<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the order of quick reply shortcuts @shortcut_ids The new order of quick reply shortcuts.
 */
class ReorderQuickReplyShortcuts extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('shortcut_ids')]
        private array|null $shortcutIds = null,
    ) {
    }

    public function getShortcutIds(): array|null
    {
        return $this->shortcutIds;
    }

    public function setShortcutIds(array|null $shortcutIds): self
    {
        $this->shortcutIds = $shortcutIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reorderQuickReplyShortcuts',
            'shortcut_ids' => $this->getShortcutIds(),
        ];
    }
}
