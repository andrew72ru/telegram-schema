<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a 2-step verification recovery email address that was previously set up. This method can be used to verify a password provided by the user @password The 2-step verification password for the current user.
 */
class GetRecoveryEmailAddress extends RecoveryEmailAddress implements \JsonSerializable
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
            '@type' => 'getRecoveryEmailAddress',
            'password' => $this->getPassword(),
        ];
    }
}
