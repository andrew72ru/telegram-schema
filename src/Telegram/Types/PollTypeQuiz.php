<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A poll in quiz mode, which has exactly one correct answer option and can be answered only once
 */
class PollTypeQuiz extends PollType implements \JsonSerializable
{
    public function __construct(
        /** 0-based identifier of the correct answer option; -1 for a yet unanswered poll */
        #[SerializedName('correct_option_id')]
        private int $correctOptionId,
        /** Text that is shown when the user chooses an incorrect answer or taps on the lamp icon; 0-200 characters with at most 2 line feeds; empty for a yet unanswered poll */
        #[SerializedName('explanation')]
        private FormattedText|null $explanation = null,
    ) {
    }

    /**
     * Get 0-based identifier of the correct answer option; -1 for a yet unanswered poll
     */
    public function getCorrectOptionId(): int
    {
        return $this->correctOptionId;
    }

    /**
     * Set 0-based identifier of the correct answer option; -1 for a yet unanswered poll
     */
    public function setCorrectOptionId(int $correctOptionId): self
    {
        $this->correctOptionId = $correctOptionId;

        return $this;
    }

    /**
     * Get Text that is shown when the user chooses an incorrect answer or taps on the lamp icon; 0-200 characters with at most 2 line feeds; empty for a yet unanswered poll
     */
    public function getExplanation(): FormattedText|null
    {
        return $this->explanation;
    }

    /**
     * Set Text that is shown when the user chooses an incorrect answer or taps on the lamp icon; 0-200 characters with at most 2 line feeds; empty for a yet unanswered poll
     */
    public function setExplanation(FormattedText|null $explanation): self
    {
        $this->explanation = $explanation;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pollTypeQuiz',
            'correct_option_id' => $this->getCorrectOptionId(),
            'explanation' => $this->getExplanation(),
        ];
    }
}
