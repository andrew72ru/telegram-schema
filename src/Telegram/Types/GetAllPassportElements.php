<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns all available Telegram Passport elements @password The 2-step verification password of the current user
 */
class GetAllPassportElements extends PassportElements implements \JsonSerializable
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
            '@type' => 'getAllPassportElements',
            'password' => $this->getPassword(),
        ];
    }
}
