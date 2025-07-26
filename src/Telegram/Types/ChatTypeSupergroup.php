<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A supergroup or channel (with unlimited members) @supergroup_id Supergroup or channel identifier @is_channel True, if the supergroup is a channel
 */
class ChatTypeSupergroup extends ChatType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('supergroup_id')]
        private int $supergroupId,
        #[SerializedName('is_channel')]
        private bool $isChannel,
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

    public function getIsChannel(): bool
    {
        return $this->isChannel;
    }

    public function setIsChannel(bool $isChannel): self
    {
        $this->isChannel = $isChannel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatTypeSupergroup',
            'supergroup_id' => $this->getSupergroupId(),
            'is_channel' => $this->getIsChannel(),
        ];
    }
}
