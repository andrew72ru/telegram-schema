<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Updates the game score of the specified user in the game; for bots only.
 */
class SetGameScore extends Message implements \JsonSerializable
{
    public function __construct(
        /** The chat to which the message with the game belongs */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifier of the message */
        #[SerializedName('message_id')]
        private int $messageId,
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
     * Get The chat to which the message with the game belongs.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set The chat to which the message with the game belongs.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifier of the message.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Identifier of the message.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get Pass true to edit the game message to include the current scoreboard.
     */
    public function getEditMessage(): bool
    {
        return $this->editMessage;
    }

    /**
     * Set Pass true to edit the game message to include the current scoreboard.
     */
    public function setEditMessage(bool $editMessage): self
    {
        $this->editMessage = $editMessage;

        return $this;
    }

    /**
     * Get User identifier.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The new score.
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * Set The new score.
     */
    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    /**
     * Get Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table.
     */
    public function getForce(): bool
    {
        return $this->force;
    }

    /**
     * Set Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table.
     */
    public function setForce(bool $force): self
    {
        $this->force = $force;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setGameScore',
            'chat_id' => $this->getChatId(),
            'message_id' => $this->getMessageId(),
            'edit_message' => $this->getEditMessage(),
            'user_id' => $this->getUserId(),
            'score' => $this->getScore(),
            'force' => $this->getForce(),
        ];
    }
}
