<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of chat administrators @administrators A list of chat administrators.
 */
class ChatAdministrators implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('administrators')]
        private array|null $administrators = null,
    ) {
    }

    public function getAdministrators(): array|null
    {
        return $this->administrators;
    }

    public function setAdministrators(array|null $administrators): self
    {
        $this->administrators = $administrators;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatAdministrators',
            'administrators' => $this->getAdministrators(),
        ];
    }
}
