<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Check whether the current user can message another user or try to create a chat with them
 */
class CanSendMessageToUser extends CanSendMessageToUserResult implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the other user */
        #[SerializedName('user_id')]
        private int $userId,
        /** Pass true to get only locally available information without sending network requests */
        #[SerializedName('only_local')]
        private bool $onlyLocal,
    ) {
    }

    /**
     * Get Identifier of the other user
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the other user
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get Pass true to get only locally available information without sending network requests
     */
    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    /**
     * Set Pass true to get only locally available information without sending network requests
     */
    public function setOnlyLocal(bool $onlyLocal): self
    {
        $this->onlyLocal = $onlyLocal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'canSendMessageToUser',
            'user_id' => $this->getUserId(),
            'only_local' => $this->getOnlyLocal(),
        ];
    }
}
