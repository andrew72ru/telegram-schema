<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user creating a Telegram Star giveaway
 */
class TelegramPaymentPurposeStarGiveaway extends TelegramPaymentPurpose implements \JsonSerializable
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
        /** The number of users to receive Telegram Stars */
        #[SerializedName('winner_count')]
        private int $winnerCount,
        /** The number of Telegram Stars to be distributed through the giveaway */
        #[SerializedName('star_count')]
        private int $starCount,
    ) {
    }

    /**
     * Get Giveaway parameters
     */
    public function getParameters(): GiveawayParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set Giveaway parameters
     */
    public function setParameters(GiveawayParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get ISO 4217 currency code of the payment currency
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Set ISO 4217 currency code of the payment currency
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get Paid amount, in the smallest units of the currency
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Set Paid amount, in the smallest units of the currency
     */
    public function setAmount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get The number of users to receive Telegram Stars
     */
    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    /**
     * Set The number of users to receive Telegram Stars
     */
    public function setWinnerCount(int $winnerCount): self
    {
        $this->winnerCount = $winnerCount;

        return $this;
    }

    /**
     * Get The number of Telegram Stars to be distributed through the giveaway
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The number of Telegram Stars to be distributed through the giveaway
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'telegramPaymentPurposeStarGiveaway',
            'parameters' => $this->getParameters(),
            'currency' => $this->getCurrency(),
            'amount' => $this->getAmount(),
            'winner_count' => $this->getWinnerCount(),
            'star_count' => $this->getStarCount(),
        ];
    }
}
