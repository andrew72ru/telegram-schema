<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns available options for Telegram Stars gifting @user_id Identifier of the user that will receive Telegram Stars; pass 0 to get options for an unspecified user.
 */
class GetStarGiftPaymentOptions extends StarPaymentOptions implements \JsonSerializable
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
            '@type' => 'getStarGiftPaymentOptions',
            'user_id' => $this->getUserId(),
        ];
    }
}
