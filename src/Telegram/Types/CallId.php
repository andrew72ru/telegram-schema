<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains the call identifier @id Call identifier
 */
class CallId implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('id')]
        private int $id,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callId',
            'id' => $this->getId(),
        ];
    }
}
