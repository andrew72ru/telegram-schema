<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The password reset request is pending @pending_reset_date Point in time (Unix timestamp) after which the password can be reset immediately using resetPassword
 */
class ResetPasswordResultPending extends ResetPasswordResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('pending_reset_date')]
        private int $pendingResetDate,
    ) {
    }

    public function getPendingResetDate(): int
    {
        return $this->pendingResetDate;
    }

    public function setPendingResetDate(int $pendingResetDate): self
    {
        $this->pendingResetDate = $pendingResetDate;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'resetPasswordResultPending',
            'pending_reset_date' => $this->getPendingResetDate(),
        ];
    }
}
