<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Updates the game score of the specified user in a game; for bots only
 */
class SetInlineGameScore extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Inline message identifier */
        #[SerializedName('inline_message_id')]
        private string $inlineMessageId,
        /** Pass true to edit the game message to include the current scoreboard */
        #[SerializedName('edit_message')]
        private bool $editMessage,
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** The new score */
        #[SerializedName('score')]
        private int $score,
        /** Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table */
        #[SerializedName('force')]
        private bool $force,
    ) {
    }

    /**
     * Get Inline message identifier
     */
    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    /**
     * Set Inline message identifier
     */
    public function setInlineMessageId(string $inlineMessageId): self
    {
        $this->inlineMessageId = $inlineMessageId;

        return $this;
    }

    /**
     * Get Pass true to edit the game message to include the current scoreboard
     */
    public function getEditMessage(): bool
    {
        return $this->editMessage;
    }

    /**
     * Set Pass true to edit the game message to include the current scoreboard
     */
    public function setEditMessage(bool $editMessage): self
    {
        $this->editMessage = $editMessage;

        return $this;
    }

    /**
     * Get User identifier
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The new score
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * Set The new score
     */
    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table
     */
    public function getForce(): bool
    {
        return $this->force;
    }

    /**
     * Set Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table
     */
    public function setForce(bool $force): self
    {
        $this->force = $force;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setInlineGameScore',
            'inline_message_id' => $this->getInlineMessageId(),
            'edit_message' => $this->getEditMessage(),
            'user_id' => $this->getUserId(),
            'score' => $this->getScore(),
            'force' => $this->getForce(),
        ];
    }
}
