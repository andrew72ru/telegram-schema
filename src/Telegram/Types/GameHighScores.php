<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of game high scores @scores A list of game high scores.
 */
class GameHighScores implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('scores')]
        private array|null $scores = null,
    ) {
    }

    public function getScores(): array|null
    {
        return $this->scores;
    }

    public function setScores(array|null $scores): self
    {
        $this->scores = $scores;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'gameHighScores',
            'scores' => $this->getScores(),
        ];
    }
}
