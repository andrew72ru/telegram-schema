<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Cancels or re-enables Telegram Star subscription for a user; for bots only
 */
class EditUserStarSubscription extends Ok implements \JsonSerializable
{
    public function __construct(
        /** User identifier */
        #[SerializedName('user_id')]
        private int $userId,
        /** Telegram payment identifier of the subscription */
        #[SerializedName('telegram_payment_charge_id')]
        private string $telegramPaymentChargeId,
        /** Pass true to cancel the subscription; pass false to allow the user to enable it */
        #[SerializedName('is_canceled')]
        private bool $isCanceled,
    ) {
    }

    /**
     * Get User identifier
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set User identifier
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Telegram payment identifier of the subscription
     */
    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    /**
     * Set Telegram payment identifier of the subscription
     */
    public function setTelegramPaymentChargeId(string $telegramPaymentChargeId): self
    {
        $this->telegramPaymentChargeId = $telegramPaymentChargeId;

        return $this;
    }

    /**
     * Get Pass true to cancel the subscription; pass false to allow the user to enable it
     */
    public function getIsCanceled(): bool
    {
        return $this->isCanceled;
    }

    /**
     * Set Pass true to cancel the subscription; pass false to allow the user to enable it
     */
    public function setIsCanceled(bool $isCanceled): self
    {
        $this->isCanceled = $isCanceled;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editUserStarSubscription',
            'user_id' => $this->getUserId(),
            'telegram_payment_charge_id' => $this->getTelegramPaymentChargeId(),
            'is_canceled' => $this->getIsCanceled(),
        ];
    }
}
