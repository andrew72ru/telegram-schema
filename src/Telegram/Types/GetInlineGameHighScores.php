<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns game high scores and some part of the high score table in the range of the specified user; for bots only @inline_message_id Inline message identifier @user_id User identifier.
 */
class GetInlineGameHighScores extends GameHighScores implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('inline_message_id')]
        private string $inlineMessageId,
        #[SerializedName('user_id')]
        private int $userId,
    ) {
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function setInlineMessageId(string $inlineMessageId): self
    {
        $this->inlineMessageId = $inlineMessageId;

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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getInlineGameHighScores',
            'inline_message_id' => $this->getInlineMessageId(),
            'user_id' => $this->getUserId(),
        ];
    }
}
