<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches a user by a token from the user's link @token Token to search for
 */
class SearchUserByToken extends User implements \JsonSerializable
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
            '@type' => 'searchUserByToken',
            'token' => $this->getToken(),
        ];
    }
}
