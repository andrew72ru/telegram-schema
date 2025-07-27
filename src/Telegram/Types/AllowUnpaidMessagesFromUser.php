<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Allows the specified user to send unpaid private messages to the current user by adding a rule to userPrivacySettingAllowUnpaidMessages.
 */
class AllowUnpaidMessagesFromUser extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user */
        #[SerializedName('user_id')]
        private int $userId,
        /** Pass true to refund the user previously paid messages */
        #[SerializedName('refund_payments')]
        private bool $refundPayments,
    ) {
    }

    /**
     * Get Identifier of the user.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Pass true to refund the user previously paid messages.
     */
    public function getRefundPayments(): bool
    {
        return $this->refundPayments;
    }

    /**
     * Set Pass true to refund the user previously paid messages.
     */
    public function setRefundPayments(bool $refundPayments): self
    {
        $this->refundPayments = $refundPayments;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'allowUnpaidMessagesFromUser',
            'user_id' => $this->getUserId(),
            'refund_payments' => $this->getRefundPayments(),
        ];
    }
}
