<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Some messages were deleted.
 */
class UpdateDeleteMessages extends Update implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Identifiers of the deleted messages */
        #[SerializedName('message_ids')]
        private array|null $messageIds = null,
        /** True, if the messages are permanently deleted by a user (as opposed to just becoming inaccessible) */
        #[SerializedName('is_permanent')]
        private bool $isPermanent,
        /** True, if the messages are deleted only from the cache and can possibly be retrieved again in the future */
        #[SerializedName('from_cache')]
        private bool $fromCache,
    ) {
    }

    /**
     * Get Chat identifier.
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier.
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Identifiers of the deleted messages.
     */
    public function getMessageIds(): array|null
    {
        return $this->messageIds;
    }

    /**
     * Set Identifiers of the deleted messages.
     */
    public function setMessageIds(array|null $messageIds): self
    {
        $this->messageIds = $messageIds;

        return $this;
    }

    /**
     * Get True, if the messages are permanently deleted by a user (as opposed to just becoming inaccessible).
     */
    public function getIsPermanent(): bool
    {
        return $this->isPermanent;
    }

    /**
     * Set True, if the messages are permanently deleted by a user (as opposed to just becoming inaccessible).
     */
    public function setIsPermanent(bool $isPermanent): self
    {
        $this->isPermanent = $isPermanent;

        return $this;
    }

    /**
     * Get True, if the messages are deleted only from the cache and can possibly be retrieved again in the future.
     */
    public function getFromCache(): bool
    {
        return $this->fromCache;
    }

    /**
     * Set True, if the messages are deleted only from the cache and can possibly be retrieved again in the future.
     */
    public function setFromCache(bool $fromCache): self
    {
        $this->fromCache = $fromCache;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateDeleteMessages',
            'chat_id' => $this->getChatId(),
            'message_ids' => $this->getMessageIds(),
            'is_permanent' => $this->getIsPermanent(),
            'from_cache' => $this->getFromCache(),
        ];
    }
}
