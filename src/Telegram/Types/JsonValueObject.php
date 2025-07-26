<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a JSON object @members The list of object members
 */
class JsonValueObject extends JsonValue implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('members')]
        private array|null $members = null,
    ) {
    }

    public function getMembers(): array|null
    {
        return $this->members;
    }

    public function setMembers(array|null $members): self
    {
        $this->members = $members;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'jsonValueObject',
            'members' => $this->getMembers(),
        ];
    }
}
