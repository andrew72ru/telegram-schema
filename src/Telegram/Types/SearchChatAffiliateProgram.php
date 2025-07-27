<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Searches a chat with an affiliate program. Returns the chat if found and the program is active.
 */
class SearchChatAffiliateProgram extends Chat implements \JsonSerializable
{
    public function __construct(
        /** Username of the chat */
        #[SerializedName('username')]
        private string $username,
        /** The referrer from an internalLinkTypeChatAffiliateProgram link */
        #[SerializedName('referrer')]
        private string $referrer,
    ) {
    }

    /**
     * Get Username of the chat.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set Username of the chat.
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get The referrer from an internalLinkTypeChatAffiliateProgram link.
     */
    public function getReferrer(): string
    {
        return $this->referrer;
    }

    /**
     * Set The referrer from an internalLinkTypeChatAffiliateProgram link.
     */
    public function setReferrer(string $referrer): self
    {
        $this->referrer = $referrer;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'searchChatAffiliateProgram',
            'username' => $this->getUsername(),
            'referrer' => $this->getReferrer(),
        ];
    }
}
