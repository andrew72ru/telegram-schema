<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Withdrawal succeeded.
 */
class RevenueWithdrawalStateSucceeded extends RevenueWithdrawalState implements \JsonSerializable
{
    public function __construct(
        /** Point in time (Unix timestamp) when the withdrawal was completed */
        #[SerializedName('date')]
        private int $date,
        /** The URL where the withdrawal transaction can be viewed */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get Point in time (Unix timestamp) when the withdrawal was completed.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the withdrawal was completed.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get The URL where the withdrawal transaction can be viewed.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set The URL where the withdrawal transaction can be viewed.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'revenueWithdrawalStateSucceeded',
            'date' => $this->getDate(),
            'url' => $this->getUrl(),
        ];
    }
}
