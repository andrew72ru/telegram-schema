<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks the 2-step verification recovery email address verification code @code Verification code to check
 */
class CheckRecoveryEmailAddressCode extends PasswordState implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('code')]
        private string $code,
    ) {
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkRecoveryEmailAddressCode',
            'code' => $this->getCode(),
        ];
    }
}
