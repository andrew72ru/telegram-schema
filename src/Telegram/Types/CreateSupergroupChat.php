<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an existing chat corresponding to a known supergroup or channel @supergroup_id Supergroup or channel identifier @force Pass true to create the chat without a network request. In this case all information about the chat except its type, title and photo can be incorrect.
 */
class CreateSupergroupChat extends Chat implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        #[SerializedName('force')]
        private bool $force,
    ) {
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setSupergroupId(int $supergroupId): self
    {
        $this->supergroupId = $supergroupId;

        return $this;
    }

    public function getForce(): bool
    {
        return $this->force;
    }

    public function setForce(bool $force): self
    {
        $this->force = $force;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'createSupergroupChat',
            'supergroup_id' => $this->getSupergroupId(),
            'force' => $this->getForce(),
        ];
    }
}
