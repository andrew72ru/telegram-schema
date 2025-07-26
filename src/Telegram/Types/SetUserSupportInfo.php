<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets support information for the given user; for Telegram support only @user_id User identifier @message New information message
 */
class SetUserSupportInfo extends UserSupportInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
        #[SerializedName('message')]
        private FormattedText|null $message = null,
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

    public function getMessage(): FormattedText|null
    {
        return $this->message;
    }

    public function setMessage(FormattedText|null $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setUserSupportInfo',
            'user_id' => $this->getUserId(),
            'message' => $this->getMessage(),
        ];
    }
}
