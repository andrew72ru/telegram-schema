<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Creates a new temporary password for processing payments @password The 2-step verification password of the current user @valid_for Time during which the temporary password will be valid, in seconds; must be between 60 and 86400
 */
class CreateTemporaryPassword extends TemporaryPasswordState implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('password')]
        private string $password,
        #[SerializedName('valid_for')]
        private int $validFor,
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

    public function getValidFor(): int
    {
        return $this->validFor;
    }

    public function setValidFor(int $validFor): self
    {
        $this->validFor = $validFor;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createTemporaryPassword',
            'password' => $this->getPassword(),
            'valid_for' => $this->getValidFor(),
        ];
    }
}
