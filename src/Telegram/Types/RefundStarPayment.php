<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Refunds a previously done payment in Telegram Stars; for bots only
 */
class RefundStarPayment extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user that did the payment */
        #[SerializedName('user_id')]
        private int $userId,
        /** Telegram payment identifier */
        #[SerializedName('telegram_payment_charge_id')]
        private string $telegramPaymentChargeId,
    ) {
    }

    /**
     * Get Identifier of the user that did the payment
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user that did the payment
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Telegram payment identifier
     */
    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    /**
     * Set Telegram payment identifier
     */
    public function setTelegramPaymentChargeId(string $telegramPaymentChargeId): self
    {
        $this->telegramPaymentChargeId = $telegramPaymentChargeId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'refundStarPayment',
            'user_id' => $this->getUserId(),
            'telegram_payment_charge_id' => $this->getTelegramPaymentChargeId(),
        ];
    }
}
