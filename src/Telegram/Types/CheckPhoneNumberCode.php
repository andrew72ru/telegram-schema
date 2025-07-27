<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Check the authentication code and completes the request for which the code was sent if appropriate @code Authentication code to check.
 */
class CheckPhoneNumberCode extends Ok implements \JsonSerializable
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
            '@type' => 'checkPhoneNumberCode',
            'code' => $this->getCode(),
        ];
    }
}
