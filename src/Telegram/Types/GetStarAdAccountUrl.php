<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a URL for a Telegram Ad platform account that can be used to set up advertisements for the chat paid in the owned Telegram Stars
 */
class GetStarAdAccountUrl extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the owner of the Telegram Stars; can be identifier of an owned bot, or identifier of an owned channel chat */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
    ) {
    }

    /**
     * Get Identifier of the owner of the Telegram Stars; can be identifier of an owned bot, or identifier of an owned channel chat
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the owner of the Telegram Stars; can be identifier of an owned bot, or identifier of an owned channel chat
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStarAdAccountUrl',
            'owner_id' => $this->getOwnerId(),
        ];
    }
}
