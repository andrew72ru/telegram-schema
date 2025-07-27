<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about one website the current user is logged in with Telegram.
 */
class ConnectedWebsite implements \JsonSerializable
{
    public function __construct(
        /** Website identifier */
        #[SerializedName('id')]
        private int $id,
        /** The domain name of the website */
        #[SerializedName('domain_name')]
        private string $domainName,
        /** User identifier of a bot linked with the website */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** The version of a browser used to log in */
        #[SerializedName('browser')]
        private string $browser,
        /** Operating system the browser is running on */
        #[SerializedName('platform')]
        private string $platform,
        /** Point in time (Unix timestamp) when the user was logged in */
        #[SerializedName('log_in_date')]
        private int $logInDate,
        /** Point in time (Unix timestamp) when obtained authorization was last used */
        #[SerializedName('last_active_date')]
        private int $lastActiveDate,
        /** IP address from which the user was logged in, in human-readable format */
        #[SerializedName('ip_address')]
        private string $ipAddress,
        /** Human-readable description of a country and a region from which the user was logged in, based on the IP address */
        #[SerializedName('location')]
        private string $location,
    ) {
    }

    /**
     * Get Website identifier.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Website identifier.
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get The domain name of the website.
     */
    public function getDomainName(): string
    {
        return $this->domainName;
    }

    /**
     * Set The domain name of the website.
     */
    public function setDomainName(string $domainName): self
    {
        $this->domainName = $domainName;

        return $this;
    }

    /**
     * Get User identifier of a bot linked with the website.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set User identifier of a bot linked with the website.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get The version of a browser used to log in.
     */
    public function getBrowser(): string
    {
        return $this->browser;
    }

    /**
     * Set The version of a browser used to log in.
     */
    public function setBrowser(string $browser): self
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get Operating system the browser is running on.
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * Set Operating system the browser is running on.
     */
    public function setPlatform(string $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the user was logged in.
     */
    public function getLogInDate(): int
    {
        return $this->logInDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user was logged in.
     */
    public function setLogInDate(int $logInDate): self
    {
        $this->logInDate = $logInDate;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when obtained authorization was last used.
     */
    public function getLastActiveDate(): int
    {
        return $this->lastActiveDate;
    }

    /**
     * Set Point in time (Unix timestamp) when obtained authorization was last used.
     */
    public function setLastActiveDate(int $lastActiveDate): self
    {
        $this->lastActiveDate = $lastActiveDate;

        return $this;
    }

    /**
     * Get IP address from which the user was logged in, in human-readable format.
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * Set IP address from which the user was logged in, in human-readable format.
     */
    public function setIpAddress(string $ipAddress): self
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }

    /**
     * Get Human-readable description of a country and a region from which the user was logged in, based on the IP address.
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Set Human-readable description of a country and a region from which the user was logged in, based on the IP address.
     */
    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'connectedWebsite',
            'id' => $this->getId(),
            'domain_name' => $this->getDomainName(),
            'bot_user_id' => $this->getBotUserId(),
            'browser' => $this->getBrowser(),
            'platform' => $this->getPlatform(),
            'log_in_date' => $this->getLogInDate(),
            'last_active_date' => $this->getLastActiveDate(),
            'ip_address' => $this->getIpAddress(),
            'location' => $this->getLocation(),
        ];
    }
}
