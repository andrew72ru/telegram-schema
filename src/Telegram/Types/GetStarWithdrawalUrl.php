<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a URL for Telegram Star withdrawal.
 */
class GetStarWithdrawalUrl extends HttpUrl implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the owner of the Telegram Stars; can be identifier of the current user, an owned bot, or an owned supergroup or channel chat */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** The number of Telegram Stars to withdraw. Must be at least getOption("star_withdrawal_count_min") */
        #[SerializedName('star_count')]
        private int $starCount,
        /** The 2-step verification password of the current user */
        #[SerializedName('password')]
        private string $password,
    ) {
    }

    /**
     * Get Identifier of the owner of the Telegram Stars; can be identifier of the current user, an owned bot, or an owned supergroup or channel chat.
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the owner of the Telegram Stars; can be identifier of the current user, an owned bot, or an owned supergroup or channel chat.
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get The number of Telegram Stars to withdraw. Must be at least getOption("star_withdrawal_count_min").
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The number of Telegram Stars to withdraw. Must be at least getOption("star_withdrawal_count_min").
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

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
            '@type' => 'getStarWithdrawalUrl',
            'owner_id' => $this->getOwnerId(),
            'star_count' => $this->getStarCount(),
            'password' => $this->getPassword(),
        ];
    }
}
