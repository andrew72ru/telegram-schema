<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a secret chat.
 */
class SecretChat implements \JsonSerializable
{
    public function __construct(
        /** Secret chat identifier */
        #[SerializedName('id')]
        private int $id,
        /** Identifier of the chat partner */
        #[SerializedName('user_id')]
        private int $userId,
        /** State of the secret chat */
        #[SerializedName('state')]
        private SecretChatState|null $state = null,
        /** True, if the chat was created by the current user; false otherwise */
        #[SerializedName('is_outbound')]
        private bool $isOutbound,
        /** Hash of the currently used key for comparison with the hash of the chat partner's key. This is a string of 36 little-endian bytes, which must be split into groups of 2 bits, each denoting a pixel of one of 4 colors FFFFFF, D5E6F3, 2D5775, and 2F99C9. */
        #[SerializedName('key_hash')]
        private string $keyHash,
        /** Secret chat layer; determines features supported by the chat partner's application. Nested text entities and underline and strikethrough entities are supported if the layer >= 101, */
        #[SerializedName('layer')]
        private int $layer,
    ) {
    }

    /**
     * Get Secret chat identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Secret chat identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Identifier of the chat partner.
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the chat partner.
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get State of the secret chat.
     */
    public function getState(): SecretChatState|null
    {
        return $this->state;
    }

    /**
     * Set State of the secret chat.
     */
    public function setState(SecretChatState|null $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get True, if the chat was created by the current user; false otherwise.
     */
    public function getIsOutbound(): bool
    {
        return $this->isOutbound;
    }

    /**
     * Set True, if the chat was created by the current user; false otherwise.
     */
    public function setIsOutbound(bool $isOutbound): self
    {
        $this->isOutbound = $isOutbound;

        return $this;
    }

    /**
     * Get Hash of the currently used key for comparison with the hash of the chat partner's key. This is a string of 36 little-endian bytes, which must be split into groups of 2 bits, each denoting a pixel of one of 4 colors FFFFFF, D5E6F3, 2D5775, and 2F99C9..
     */
    public function getKeyHash(): string
    {
        return $this->keyHash;
    }

    /**
     * Set Hash of the currently used key for comparison with the hash of the chat partner's key. This is a string of 36 little-endian bytes, which must be split into groups of 2 bits, each denoting a pixel of one of 4 colors FFFFFF, D5E6F3, 2D5775, and 2F99C9..
     */
    public function setKeyHash(string $keyHash): self
    {
        $this->keyHash = $keyHash;

        return $this;
    }

    /**
     * Get Secret chat layer; determines features supported by the chat partner's application. Nested text entities and underline and strikethrough entities are supported if the layer >= 101,.
     */
    public function getLayer(): int
    {
        return $this->layer;
    }

    /**
     * Set Secret chat layer; determines features supported by the chat partner's application. Nested text entities and underline and strikethrough entities are supported if the layer >= 101,.
     */
    public function setLayer(int $layer): self
    {
        $this->layer = $layer;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'secretChat',
            'id' => $this->getId(),
            'user_id' => $this->getUserId(),
            'state' => $this->getState(),
            'is_outbound' => $this->getIsOutbound(),
            'key_hash' => $this->getKeyHash(),
            'layer' => $this->getLayer(),
        ];
    }
}
