<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An authorization confirmation dialog needs to be shown to the user.
 */
class LoginUrlInfoRequestConfirmation extends LoginUrlInfo implements \JsonSerializable
{
    public function __construct(
        /** An HTTP URL to be opened */
        #[SerializedName('url')]
        private string $url,
        /** A domain of the URL */
        #[SerializedName('domain')]
        private string $domain,
        /** User identifier of a bot linked with the website */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** True, if the user must be asked for the permission to the bot to send them messages */
        #[SerializedName('request_write_access')]
        private bool $requestWriteAccess,
    ) {
    }

    /**
     * Get An HTTP URL to be opened.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set An HTTP URL to be opened.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get A domain of the URL.
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * Set A domain of the URL.
     */
    public function setDomain(string $domain): self
    {
        $this->domain = $domain;

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
     * Get True, if the user must be asked for the permission to the bot to send them messages.
     */
    public function getRequestWriteAccess(): bool
    {
        return $this->requestWriteAccess;
    }

    /**
     * Set True, if the user must be asked for the permission to the bot to send them messages.
     */
    public function setRequestWriteAccess(bool $requestWriteAccess): self
    {
        $this->requestWriteAccess = $requestWriteAccess;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'loginUrlInfoRequestConfirmation',
            'url' => $this->getUrl(),
            'domain' => $this->getDomain(),
            'bot_user_id' => $this->getBotUserId(),
            'request_write_access' => $this->getRequestWriteAccess(),
        ];
    }
}
