<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is an affiliate program link. Call searchChatAffiliateProgram with the given username and referrer to process the link.
 */
class InternalLinkTypeChatAffiliateProgram extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Username to be passed to searchChatAffiliateProgram */
        #[SerializedName('username')]
        private string $username,
        /** Referrer to be passed to searchChatAffiliateProgram */
        #[SerializedName('referrer')]
        private string $referrer,
    ) {
    }

    /**
     * Get Username to be passed to searchChatAffiliateProgram.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Set Username to be passed to searchChatAffiliateProgram.
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get Referrer to be passed to searchChatAffiliateProgram.
     */
    public function getReferrer(): string
    {
        return $this->referrer;
    }

    /**
     * Set Referrer to be passed to searchChatAffiliateProgram.
     */
    public function setReferrer(string $referrer): self
    {
        $this->referrer = $referrer;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeChatAffiliateProgram',
            'username' => $this->getUsername(),
            'referrer' => $this->getReferrer(),
        ];
    }
}
