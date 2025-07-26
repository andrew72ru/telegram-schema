<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a globally unique push receiver identifier, which can be used to identify which account has received a push notification @id The globally unique identifier of push notification subscription
 */
class PushReceiverId implements \JsonSerializable
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
            '@type' => 'pushReceiverId',
            'id' => $this->getId(),
        ];
    }
}
