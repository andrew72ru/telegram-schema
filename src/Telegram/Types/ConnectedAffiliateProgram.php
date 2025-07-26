<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an affiliate program that was connected to an affiliate
 */
class ConnectedAffiliateProgram implements \JsonSerializable
{
    public function __construct(
        /** The link that can be used to refer users if the program is still active */
        #[SerializedName('url')]
        private string $url,
        /** User identifier of the bot created the program */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** The parameters of the affiliate program */
        #[SerializedName('parameters')]
        private AffiliateProgramParameters|null $parameters = null,
        /** Point in time (Unix timestamp) when the affiliate program was connected */
        #[SerializedName('connection_date')]
        private int $connectionDate,
        /** True, if the program was canceled by the bot, or disconnected by the chat owner and isn't available anymore */
        #[SerializedName('is_disconnected')]
        private bool $isDisconnected,
        /** The number of users that used the affiliate program */
        #[SerializedName('user_count')]
        private int $userCount,
        /** The number of Telegram Stars that were earned by the affiliate program */
        #[SerializedName('revenue_star_count')]
        private int $revenueStarCount,
    ) {
    }

    /**
     * Get The link that can be used to refer users if the program is still active
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set The link that can be used to refer users if the program is still active
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get User identifier of the bot created the program
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set User identifier of the bot created the program
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get The parameters of the affiliate program
     */
    public function getParameters(): AffiliateProgramParameters|null
    {
        return $this->parameters;
    }

    /**
     * Set The parameters of the affiliate program
     */
    public function setParameters(AffiliateProgramParameters|null $parameters): self
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the affiliate program was connected
     */
    public function getConnectionDate(): int
    {
        return $this->connectionDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the affiliate program was connected
     */
    public function setConnectionDate(int $connectionDate): self
    {
        $this->connectionDate = $connectionDate;

        return $this;
    }

    /**
     * Get True, if the program was canceled by the bot, or disconnected by the chat owner and isn't available anymore
     */
    public function getIsDisconnected(): bool
    {
        return $this->isDisconnected;
    }

    /**
     * Set True, if the program was canceled by the bot, or disconnected by the chat owner and isn't available anymore
     */
    public function setIsDisconnected(bool $isDisconnected): self
    {
        $this->isDisconnected = $isDisconnected;

        return $this;
    }

    /**
     * Get The number of users that used the affiliate program
     */
    public function getUserCount(): int
    {
        return $this->userCount;
    }

    /**
     * Set The number of users that used the affiliate program
     */
    public function setUserCount(int $userCount): self
    {
        $this->userCount = $userCount;

        return $this;
    }

    /**
     * Get The number of Telegram Stars that were earned by the affiliate program
     */
    public function getRevenueStarCount(): int
    {
        return $this->revenueStarCount;
    }

    /**
     * Set The number of Telegram Stars that were earned by the affiliate program
     */
    public function setRevenueStarCount(int $revenueStarCount): self
    {
        $this->revenueStarCount = $revenueStarCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'connectedAffiliateProgram',
            'url' => $this->getUrl(),
            'bot_user_id' => $this->getBotUserId(),
            'parameters' => $this->getParameters(),
            'connection_date' => $this->getConnectionDate(),
            'is_disconnected' => $this->getIsDisconnected(),
            'user_count' => $this->getUserCount(),
            'revenue_star_count' => $this->getRevenueStarCount(),
        ];
    }
}
