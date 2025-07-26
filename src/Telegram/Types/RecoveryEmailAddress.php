<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about the current recovery email address @recovery_email_address Recovery email address
 */
class RecoveryEmailAddress implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('recovery_email_address')]
        private string $recoveryEmailAddress,
    ) {
    }

    public function getRecoveryEmailAddress(): string
    {
        return $this->recoveryEmailAddress;
    }

    public function setRecoveryEmailAddress(string $recoveryEmailAddress): self
    {
        $this->recoveryEmailAddress = $recoveryEmailAddress;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'recoveryEmailAddress',
            'recovery_email_address' => $this->getRecoveryEmailAddress(),
        ];
    }
}
