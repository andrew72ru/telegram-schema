<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Basic information about a quick reply shortcut has changed. This update is guaranteed to come before the quick shortcut name is returned to the application
 */
class UpdateQuickReplyShortcut extends Update implements \JsonSerializable
{
    public function __construct(
        /** New data about the shortcut */
        #[SerializedName('shortcut')]
        private QuickReplyShortcut|null $shortcut = null,
    ) {
    }

    /**
     * Get New data about the shortcut
     */
    public function getShortcut(): QuickReplyShortcut|null
    {
        return $this->shortcut;
    }

    /**
     * Set New data about the shortcut
     */
    public function setShortcut(QuickReplyShortcut|null $shortcut): self
    {
        $this->shortcut = $shortcut;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateQuickReplyShortcut',
            'shortcut' => $this->getShortcut(),
        ];
    }
}
