<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A regular poll @allow_multiple_answers True, if multiple answer options can be chosen simultaneously.
 */
class PollTypeRegular extends PollType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('allow_multiple_answers')]
        private bool $allowMultipleAnswers,
    ) {
    }

    public function getAllowMultipleAnswers(): bool
    {
        return $this->allowMultipleAnswers;
    }

    public function setAllowMultipleAnswers(bool $allowMultipleAnswers): self
    {
        $this->allowMultipleAnswers = $allowMultipleAnswers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pollTypeRegular',
            'allow_multiple_answers' => $this->getAllowMultipleAnswers(),
        ];
    }
}
