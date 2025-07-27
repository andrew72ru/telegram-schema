<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns detailed Telegram Star revenue statistics.
 */
class GetStarRevenueStatistics extends StarRevenueStatistics implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the owner of the Telegram Stars; can be identifier of the current user, an owned bot, or a supergroup or a channel chat with supergroupFullInfo.can_get_star_revenue_statistics == true */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** Pass true if a dark theme is used by the application */
        #[SerializedName('is_dark')]
        private bool $isDark,
    ) {
    }

    /**
     * Get Identifier of the owner of the Telegram Stars; can be identifier of the current user, an owned bot, or a supergroup or a channel chat with supergroupFullInfo.can_get_star_revenue_statistics == true.
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the owner of the Telegram Stars; can be identifier of the current user, an owned bot, or a supergroup or a channel chat with supergroupFullInfo.can_get_star_revenue_statistics == true.
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get Pass true if a dark theme is used by the application.
     */
    public function getIsDark(): bool
    {
        return $this->isDark;
    }

    /**
     * Set Pass true if a dark theme is used by the application.
     */
    public function setIsDark(bool $isDark): self
    {
        $this->isDark = $isDark;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getStarRevenueStatistics',
            'owner_id' => $this->getOwnerId(),
            'is_dark' => $this->getIsDark(),
        ];
    }
}
