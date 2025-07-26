<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The password reset request was declined @retry_date Point in time (Unix timestamp) when the password reset can be retried
 */
class ResetPasswordResultDeclined extends ResetPasswordResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('retry_date')]
        private int $retryDate,
    ) {
    }

    public function getRetryDate(): int
    {
        return $this->retryDate;
    }

    public function setRetryDate(int $retryDate): self
    {
        $this->retryDate = $retryDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resetPasswordResultDeclined',
            'retry_date' => $this->getRetryDate(),
        ];
    }
}
