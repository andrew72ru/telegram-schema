<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of quick reply shortcuts has changed @shortcut_ids The new list of identifiers of quick reply shortcuts.
 */
class UpdateQuickReplyShortcuts extends Update implements \JsonSerializable
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
            '@type' => 'updateQuickReplyShortcuts',
            'shortcut_ids' => $this->getShortcutIds(),
        ];
    }
}
