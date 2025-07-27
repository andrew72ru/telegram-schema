<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The transaction is a transfer of Telegram Stars to a business bot; for regular users only @user_id Identifier of the bot that received Telegram Stars.
 */
class StarTransactionTypeBusinessBotTransferSend extends StarTransactionType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_id')]
        private int $userId,
    ) {
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'starTransactionTypeBusinessBotTransferSend',
            'user_id' => $this->getUserId(),
        ];
    }
}
