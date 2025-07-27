<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about the availability of a temporary password, which can be used for payments @has_password True, if a temporary password is available @valid_for Time left before the temporary password expires, in seconds.
 */
class TemporaryPasswordState implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('has_password')]
        private bool $hasPassword,
        #[SerializedName('valid_for')]
        private int $validFor,
    ) {
    }

    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    public function setHasPassword(bool $hasPassword): self
    {
        $this->hasPassword = $hasPassword;

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
            '@type' => 'temporaryPasswordState',
            'has_password' => $this->getHasPassword(),
            'valid_for' => $this->getValidFor(),
        ];
    }
}
