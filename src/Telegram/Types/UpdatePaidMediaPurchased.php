<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Paid media were purchased by a user; for bots only.
 */
class UpdatePaidMediaPurchased extends Update implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Bot-specified payload for the paid media */
        #[SerializedName('payload')]
        private string $payload,
    ) {
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
     * Get Bot-specified payload for the paid media.
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * Set Bot-specified payload for the paid media.
     */
    public function setPayload(string $payload): self
    {
        $this->payload = $payload;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updatePaidMediaPurchased',
            'user_id' => $this->getUserId(),
            'payload' => $this->getPayload(),
        ];
    }
}
