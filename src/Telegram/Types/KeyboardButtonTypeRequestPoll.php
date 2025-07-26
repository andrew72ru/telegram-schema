<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button that allows the user to create and send a poll when pressed; available only in private chats @force_regular If true, only regular polls must be allowed to create @force_quiz If true, only polls in quiz mode must be allowed to create
 */
class KeyboardButtonTypeRequestPoll extends KeyboardButtonType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('force_regular')]
        private bool $forceRegular,
        #[SerializedName('force_quiz')]
        private bool $forceQuiz,
    ) {
    }

    public function getForceRegular(): bool
    {
        return $this->forceRegular;
    }

    public function setForceRegular(bool $forceRegular): self
    {
        $this->forceRegular = $forceRegular;

        return $this;
    }

    public function getForceQuiz(): bool
    {
        return $this->forceQuiz;
    }

    public function setForceQuiz(bool $forceQuiz): self
    {
        $this->forceQuiz = $forceQuiz;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'keyboardButtonTypeRequestPoll',
            'force_regular' => $this->getForceRegular(),
            'force_quiz' => $this->getForceQuiz(),
        ];
    }
}
