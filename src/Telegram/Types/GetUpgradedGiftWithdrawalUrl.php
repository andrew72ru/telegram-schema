<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a URL for upgraded gift withdrawal in the TON blockchain as an NFT; requires owner privileges for gifts owned by a chat
 */
class GetUpgradedGiftWithdrawalUrl extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the gift */
        #[SerializedName('received_gift_id')]
        private string $receivedGiftId,
        /** The 2-step verification password of the current user */
        #[SerializedName('password')]
        private string $password,
    ) {
    }

    /**
     * Get Identifier of the gift
     */
    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    /**
     * Set Identifier of the gift
     */
    public function setReceivedGiftId(string $receivedGiftId): self
    {
        $this->receivedGiftId = $receivedGiftId;

        return $this;
    }

    /**
     * Get The 2-step verification password of the current user
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set The 2-step verification password of the current user
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getUpgradedGiftWithdrawalUrl',
            'received_gift_id' => $this->getReceivedGiftId(),
            'password' => $this->getPassword(),
        ];
    }
}
