<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns menu button set by the bot for the given user; for bots only @user_id Identifier of the user or 0 to get the default menu button
 */
class GetMenuButton extends BotMenuButton implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
    ) {
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getMenuButton',
            'user_id' => $this->getUserId(),
        ];
    }
}
