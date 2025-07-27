<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of quick reply shortcut messages has changed.
 */
class UpdateQuickReplyShortcutMessages extends Update implements \JsonSerializable
{
    public function __construct(
        /** The identifier of the shortcut */
        #[SerializedName('shortcut_id')]
        private int $shortcutId,
        /** The new list of quick reply messages for the shortcut in order from the first to the last sent */
        #[SerializedName('messages')]
        private array|null $messages = null,
    ) {
    }

    /**
     * Get The identifier of the shortcut.
     */
    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    /**
     * Set The identifier of the shortcut.
     */
    public function setShortcutId(int $shortcutId): self
    {
        $this->shortcutId = $shortcutId;

        return $this;
    }

    /**
     * Get The new list of quick reply messages for the shortcut in order from the first to the last sent.
     */
    public function getMessages(): array|null
    {
        return $this->messages;
    }

    /**
     * Set The new list of quick reply messages for the shortcut in order from the first to the last sent.
     */
    public function setMessages(array|null $messages): self
    {
        $this->messages = $messages;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateQuickReplyShortcutMessages',
            'shortcut_id' => $this->getShortcutId(),
            'messages' => $this->getMessages(),
        ];
    }
}
