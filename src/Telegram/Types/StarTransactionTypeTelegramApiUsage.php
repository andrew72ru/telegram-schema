<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a payment for Telegram API usage; for bots only @request_count The number of billed requests.
 */
class StarTransactionTypeTelegramApiUsage extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('request_count')]
        private int $requestCount,
    ) {
    }

    public function getRequestCount(): int
    {
        return $this->requestCount;
    }

    public function setRequestCount(int $requestCount): self
    {
        $this->requestCount = $requestCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeTelegramApiUsage',
            'request_count' => $this->getRequestCount(),
        ];
    }
}
