<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a game; not supported for channels or secret chats @bot_user_id User identifier of the bot that owns the game @game_short_name Short name of the game.
 */
class InputMessageGame extends InputMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        #[SerializedName('game_short_name')]
        private string $gameShortName,
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

    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }

    public function setGameShortName(string $gameShortName): self
    {
        $this->gameShortName = $gameShortName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputMessageGame',
            'bot_user_id' => $this->getBotUserId(),
            'game_short_name' => $this->getGameShortName(),
        ];
    }
}
