<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks the 2-step verification password for correctness. Works only when the current authorization state is authorizationStateWaitPassword @password The 2-step verification password to check
 */
class CheckAuthenticationPassword extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('password')]
        private string $password,
    ) {
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkAuthenticationPassword',
            'password' => $this->getPassword(),
        ];
    }
}
