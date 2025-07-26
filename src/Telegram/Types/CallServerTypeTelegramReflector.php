<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A Telegram call reflector @peer_tag A peer tag to be used with the reflector @is_tcp True, if the server uses TCP instead of UDP
 */
class CallServerTypeTelegramReflector extends CallServerType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('peer_tag')]
        private string $peerTag,
        #[SerializedName('is_tcp')]
        private bool $isTcp,
    ) {
    }

    public function getPeerTag(): string
    {
        return $this->peerTag;
    }

    public function setPeerTag(string $peerTag): self
    {
        $this->peerTag = $peerTag;

        return $this;
    }

    public function getIsTcp(): bool
    {
        return $this->isTcp;
    }

    public function setIsTcp(bool $isTcp): self
    {
        $this->isTcp = $isTcp;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'callServerTypeTelegramReflector',
            'peer_tag' => $this->getPeerTag(),
            'is_tcp' => $this->getIsTcp(),
        ];
    }
}
