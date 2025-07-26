<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks the authentication token of a bot; to log in as a bot. Works only when the current authorization state is authorizationStateWaitPhoneNumber. Can be used instead of setAuthenticationPhoneNumber and checkAuthenticationCode to log in @token The bot token
 */
class CheckAuthenticationBotToken extends Ok implements \JsonSerializable
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
            '@type' => 'checkAuthenticationBotToken',
            'token' => $this->getToken(),
        ];
    }
}
