<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An authentication code delivered to a user's email address @code The code.
 */
class EmailAddressAuthenticationCode extends EmailAddressAuthentication implements \JsonSerializable
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
            '@type' => 'emailAddressAuthenticationCode',
            'code' => $this->getCode(),
        ];
    }
}
