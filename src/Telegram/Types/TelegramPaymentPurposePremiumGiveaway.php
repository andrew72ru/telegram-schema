<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user creating a Telegram Premium giveaway.
 */
class TelegramPaymentPurposePremiumGiveaway extends TelegramPaymentPurpose implements \JsonSerializable
{
    public function __construct(
        /** Giveaway parameters */
        #[SerializedName('parameters')]
        private GiveawayParameters|null $parameters = null,
        /** ISO 4217 currency code of the payment currency */
        #[SerializedName('currency')]
        private string $currency,
        /** Paid amount, in the smallest units of the currency */
        #[SerializedName('amount')]
        private int $amount,
        /** Number of users which will be able to activate the gift codes */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** Number of months the Telegram Premium subscription will be active for the users */
        #[SerializedName('month_count')]
        private int $monthCount,
    ) {
    }

    /**
     * Get Giveaway parameters.
     */
    public function getParameters(): GiveawayParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Giveaway parameters.
     */
    public function setParameters(GiveawayParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get ISO 4217 currency code of the payment currency.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code of the payment currency.
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Paid amount, in the smallest units of the currency.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set Paid amount, in the smallest units of the currency.
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get Number of users which will be able to activate the gift codes.
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set Number of users which will be able to activate the gift codes.
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active for the users.
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active for the users.
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'telegramPaymentPurposePremiumGiveaway',
            'parameters' => $this->getParameters(),
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'winner_count' => $this->getWinnerCount(),
            'month_count' => $this->getMonthCount(),
        ];
    }
}
