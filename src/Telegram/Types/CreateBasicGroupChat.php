<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an existing chat corresponding to a known basic group @basic_group_id Basic group identifier @force Pass true to create the chat without a network request. In this case all information about the chat except its type, title and photo can be incorrect
 */
class CreateBasicGroupChat extends Chat implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('basic_group_id')]
        private int $basicGroupId,
        #[SerializedName('force')]
        private bool $force,
    ) {
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function setBasicGroupId(int $basicGroupId): self
    {
        $this->basicGroupId = $basicGroupId;

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
            '@type' => 'createBasicGroupChat',
            'basic_group_id' => $this->getBasicGroupId(),
            'force' => $this->getForce(),
        ];
    }
}
