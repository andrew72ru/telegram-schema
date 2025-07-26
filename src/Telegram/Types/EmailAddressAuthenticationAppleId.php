<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An authentication token received through Apple ID @token The token
 */
class EmailAddressAuthenticationAppleId extends EmailAddressAuthentication implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('token')]
        private string $token,
    ) {
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emailAddressAuthenticationAppleId',
            'token' => $this->getToken(),
        ];
    }
}
