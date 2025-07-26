<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds or removes a bot to attachment and side menu. Bot can be added to the menu, only if userTypeBot.can_be_added_to_attachment_menu == true
 */
class ToggleBotIsAddedToAttachmentMenu extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Bot's user identifier */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Pass true to add the bot to attachment menu; pass false to remove the bot from attachment menu */
        #[SerializedName('is_added')]
        private bool $isAdded,
        /** Pass true if the current user allowed the bot to send them messages. Ignored if is_added is false */
        #[SerializedName('allow_write_access')]
        private bool $allowWriteAccess,
    ) {
    }

    /**
     * Get Bot's user identifier
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Bot's user identifier
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Pass true to add the bot to attachment menu; pass false to remove the bot from attachment menu
     */
    public function getIsAdded(): bool
    {
        return $this->isAdded;
    }

    /**
     * Set Pass true to add the bot to attachment menu; pass false to remove the bot from attachment menu
     */
    public function setIsAdded(bool $isAdded): self
    {
        $this->isAdded = $isAdded;

        return $this;
    }

    /**
     * Get Pass true if the current user allowed the bot to send them messages. Ignored if is_added is false
     */
    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }

    /**
     * Set Pass true if the current user allowed the bot to send them messages. Ignored if is_added is false
     */
    public function setAllowWriteAccess(bool $allowWriteAccess): self
    {
        $this->allowWriteAccess = $allowWriteAccess;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleBotIsAddedToAttachmentMenu',
            'bot_user_id' => $this->getBotUserId(),
            'is_added' => $this->getIsAdded(),
            'allow_write_access' => $this->getAllowWriteAccess(),
        ];
    }
}
