<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A new high score was achieved in a game @game_message_id Identifier of the message with the game, can be an identifier of a deleted message @game_id Identifier of the game; may be different from the games presented in the message with the game @score New score
 */
class MessageGameScore extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('game_message_id')]
        private int $gameMessageId,
        #[SerializedName('game_id')]
        private int $gameId,
        #[SerializedName('score')]
        private int $score,
    ) {
    }

    public function getGameMessageId(): int
    {
        return $this->gameMessageId;
    }

    public function setGameMessageId(int $gameMessageId): self
    {
        $this->gameMessageId = $gameMessageId;

        return $this;
    }

    public function getGameId(): int
    {
        return $this->gameId;
    }

    public function setGameId(int $gameId): self
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageGameScore',
            'game_message_id' => $this->getGameMessageId(),
            'game_id' => $this->getGameId(),
            'score' => $this->getScore(),
        ];
    }
}
