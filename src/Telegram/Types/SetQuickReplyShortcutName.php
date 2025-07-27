<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes name of a quick reply shortcut @shortcut_id Unique identifier of the quick reply shortcut @name New name for the shortcut. Use checkQuickReplyShortcutName to check its validness.
 */
class SetQuickReplyShortcutName extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('shortcut_id')]
        private int $shortcutId,
        #[SerializedName('name')]
        private string $name,
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setQuickReplyShortcutName',
            'shortcut_id' => $this->getShortcutId(),
            'name' => $this->getName(),
        ];
    }
}
