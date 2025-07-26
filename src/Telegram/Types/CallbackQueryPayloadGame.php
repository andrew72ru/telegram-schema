<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The payload for a game callback button @game_short_name A short name of the game that was attached to the callback button
 */
class CallbackQueryPayloadGame extends CallbackQueryPayload implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('game_short_name')]
        private string $gameShortName,
    ) {
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
            '@type' => 'callbackQueryPayloadGame',
            'game_short_name' => $this->getGameShortName(),
        ];
    }
}
