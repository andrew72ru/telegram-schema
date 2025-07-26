<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes order of active usernames of a bot. Can be called only if userTypeBot.can_be_edited == true @bot_user_id Identifier of the target bot @usernames The new order of active usernames. All currently active usernames must be specified
 */
class ReorderBotActiveUsernames extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        #[SerializedName('usernames')]
        private array|null $usernames = null,
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

    public function getUsernames(): array|null
    {
        return $this->usernames;
    }

    public function setUsernames(array|null $usernames): self
    {
        $this->usernames = $usernames;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reorderBotActiveUsernames',
            'bot_user_id' => $this->getBotUserId(),
            'usernames' => $this->getUsernames(),
        ];
    }
}
