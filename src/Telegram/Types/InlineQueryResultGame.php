<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents information about a game
 */
class InlineQueryResultGame extends InlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Game result */
        #[SerializedName('game')]
        private Game|null $game = null,
    ) {
    }

    /**
     * Get Unique identifier of the query result
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the query result
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Game result
     */
    public function getGame(): Game|null
    {
        return $this->game;
    }

    /**
     * Set Game result
     */
    public function setGame(Game|null $game): self
    {
        $this->game = $game;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inlineQueryResultGame',
            'id' => $this->getId(),
            'game' => $this->getGame(),
        ];
    }
}
