<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a game. Call searchPublicChat with the given bot username, check that the user is a bot,
 */
class InternalLinkTypeGame extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username of the bot that owns the game */
        #[SerializedName('bot_username')]
        private string $botUsername,
        /** Short name of the game */
        #[SerializedName('game_short_name')]
        private string $gameShortName,
    ) {
    }

    /**
     * Get Username of the bot that owns the game
     */
    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    /**
     * Set Username of the bot that owns the game
     */
    public function setBotUsername(string $botUsername): self
    {
        $this->botUsername = $botUsername;

        return $this;
    }

    /**
     * Get Short name of the game
     */
    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }

    /**
     * Set Short name of the game
     */
    public function setGameShortName(string $gameShortName): self
    {
        $this->gameShortName = $gameShortName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeGame',
            'bot_username' => $this->getBotUsername(),
            'game_short_name' => $this->getGameShortName(),
        ];
    }
}
