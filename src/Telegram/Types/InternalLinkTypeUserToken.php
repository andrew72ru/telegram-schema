<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a user by a temporary token. Call searchUserByToken with the given token to process the link.
 */
class InternalLinkTypeUserToken extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** The token */
        #[SerializedName('token')]
        private string $token,
    ) {
    }

    /**
     * Get The token.
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Set The token.
     */
    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeUserToken',
            'token' => $this->getToken(),
        ];
    }
}
