<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The weekly limit for the number of posted stories exceeded. The user needs to buy Telegram Premium or wait specified time @retry_after Time left before the user can post the next story
 */
class CanPostStoryResultWeeklyLimitExceeded extends CanPostStoryResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('retry_after')]
        private int $retryAfter,
    ) {
    }

    public function getRetryAfter(): int
    {
        return $this->retryAfter;
    }

    public function setRetryAfter(int $retryAfter): self
    {
        $this->retryAfter = $retryAfter;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canPostStoryResultWeeklyLimitExceeded',
            'retry_after' => $this->getRetryAfter(),
        ];
    }
}
