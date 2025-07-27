<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A button with a user reference to be handled in the same way as textEntityTypeMentionName entities @user_id User identifier.
 */
class InlineKeyboardButtonTypeUser extends InlineKeyboardButtonType implements \JsonSerializable
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
            '@type' => 'inlineKeyboardButtonTypeUser',
            'user_id' => $this->getUserId(),
        ];
    }
}
