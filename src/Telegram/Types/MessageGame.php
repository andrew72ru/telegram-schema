<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A message with a game @game The game description
 */
class MessageGame extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('game')]
        private Game|null $game = null,
    ) {
    }

    public function getGame(): Game|null
    {
        return $this->game;
    }

    public function setGame(Game|null $game): self
    {
        $this->game = $game;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGame',
            'game' => $this->getGame(),
        ];
    }
}
