<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A text shows instead of a raw mention of the user (e.g., when the user has no username) @user_id Identifier of the mentioned user
 */
class TextEntityTypeMentionName extends TextEntityType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
    ) {
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
            '@type' => 'textEntityTypeMentionName',
            'user_id' => $this->getUserId(),
        ];
    }
}
