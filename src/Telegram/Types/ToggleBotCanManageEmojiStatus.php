<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Toggles whether the bot can manage emoji status of the current user @bot_user_id User identifier of the bot @can_manage_emoji_status Pass true if the bot is allowed to change emoji status of the user; pass false otherwise
 */
class ToggleBotCanManageEmojiStatus extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        #[SerializedName('can_manage_emoji_status')]
        private bool $canManageEmojiStatus,
    ) {
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    public function getCanManageEmojiStatus(): bool
    {
        return $this->canManageEmojiStatus;
    }

    public function setCanManageEmojiStatus(bool $canManageEmojiStatus): self
    {
        $this->canManageEmojiStatus = $canManageEmojiStatus;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleBotCanManageEmojiStatus',
            'bot_user_id' => $this->getBotUserId(),
            'can_manage_emoji_status' => $this->getCanManageEmojiStatus(),
        ];
    }
}
