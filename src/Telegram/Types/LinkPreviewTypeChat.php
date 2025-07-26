<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a chat
 */
class LinkPreviewTypeChat extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        /** Type of the chat */
        #[SerializedName('type')]
        private InviteLinkChatType|null $type = null,
        /** Photo of the chat; may be null */
        #[SerializedName('photo')]
        private ChatPhoto|null $photo = null,
        /** True, if the link only creates join request */
        #[SerializedName('creates_join_request')]
        private bool $createsJoinRequest,
    ) {
    }

    /**
     * Get Type of the chat
     */
    public function getType(): InviteLinkChatType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the chat
     */
    public function setType(InviteLinkChatType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get Photo of the chat; may be null
     */
    public function getPhoto(): ChatPhoto|null
    {
        return $this->photo;
    }

    /**
     * Set Photo of the chat; may be null
     */
    public function setPhoto(ChatPhoto|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get True, if the link only creates join request
     */
    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    /**
     * Set True, if the link only creates join request
     */
    public function setCreatesJoinRequest(bool $createsJoinRequest): self
    {
        $this->createsJoinRequest = $createsJoinRequest;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeChat',
            'type' => $this->getType(),
            'photo' => $this->getPhoto(),
            'creates_join_request' => $this->getCreatesJoinRequest(),
        ];
    }
}
