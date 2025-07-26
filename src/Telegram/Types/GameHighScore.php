<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains one row of the game high score table @position Position in the high score table @user_id User identifier @score User score
 */
class GameHighScore implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('position')]
        private int $position,
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('score')]
        private int $score,
    ) {
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
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
            '@type' => 'gameHighScore',
            'position' => $this->getPosition(),
            'user_id' => $this->getUserId(),
            'score' => $this->getScore(),
        ];
    }
}
