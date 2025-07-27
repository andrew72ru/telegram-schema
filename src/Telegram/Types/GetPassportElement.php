<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns one of the available Telegram Passport elements @var Telegram Passport element type @password The 2-step verification password of the current user.
 */
class GetPassportElement extends PassportElement implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private PassportElementType|null $type = null,
        #[SerializedName('password')]
        private string $password,
    ) {
    }

    public function getType(): PassportElementType|null
    {
        return $this->type;
    }

    public function setType(PassportElementType|null $type): self
    {
        $this->type = $type;

        return $this;
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
            '@type' => 'getPassportElement',
            'type' => $this->getType(),
            'password' => $this->getPassword(),
        ];
    }
}
