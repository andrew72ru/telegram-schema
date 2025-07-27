<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a URL for chat revenue withdrawal; requires owner privileges in the channel chat or the bot. Currently, this method can be used only.
 */
class GetChatRevenueWithdrawalUrl extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** The 2-step verification password of the current user */
        #[SerializedName('password')]
        private string $password,
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
     * Get The 2-step verification password of the current user.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set The 2-step verification password of the current user.
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getChatRevenueWithdrawalUrl',
            'chat_id' => $this->getChatId(),
            'password' => $this->getPassword(),
        ];
    }
}
