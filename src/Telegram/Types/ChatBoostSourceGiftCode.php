<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The chat created a Telegram Premium gift code for a user.
 */
class ChatBoostSourceGiftCode extends ChatBoostSource implements \JsonSerializable
{
    public function __construct(
        /** Identifier of a user, for which the gift code was created */
        #[SerializedName('user_id')]
        private int $userId,
        /** The created Telegram Premium gift code, which is known only if this is a gift code for the current user, or it has already been claimed */
        #[SerializedName('gift_code')]
        private string $giftCode,
    ) {
    }

    /**
     * Get Identifier of a user, for which the gift code was created.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of a user, for which the gift code was created.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The created Telegram Premium gift code, which is known only if this is a gift code for the current user, or it has already been claimed.
     */
    public function getGiftCode(): string
    {
        return $this->giftCode;
    }

    /**
     * Set The created Telegram Premium gift code, which is known only if this is a gift code for the current user, or it has already been claimed.
     */
    public function setGiftCode(string $giftCode): self
    {
        $this->giftCode = $giftCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoostSourceGiftCode',
            'user_id' => $this->getUserId(),
            'gift_code' => $this->getGiftCode(),
        ];
    }
}
