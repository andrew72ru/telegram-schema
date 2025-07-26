<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks whether a 2-step verification password recovery code sent to an email address is valid. Works only when the current authorization state is authorizationStateWaitPassword @recovery_code Recovery code to check
 */
class CheckAuthenticationPasswordRecoveryCode extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('recovery_code')]
        private string $recoveryCode,
    ) {
    }

    public function getRecoveryCode(): string
    {
        return $this->recoveryCode;
    }

    public function setRecoveryCode(string $recoveryCode): self
    {
        $this->recoveryCode = $recoveryCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkAuthenticationPasswordRecoveryCode',
            'recovery_code' => $this->getRecoveryCode(),
        ];
    }
}
