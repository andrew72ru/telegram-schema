<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reports a sponsored chat to Telegram moderators
 */
class ReportSponsoredChat extends ReportSponsoredResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the sponsored chat */
        #[SerializedName('sponsored_chat_unique_id')]
        private int $sponsoredChatUniqueId,
        /** Option identifier chosen by the user; leave empty for the initial request */
        #[SerializedName('option_id')]
        private string $optionId,
    ) {
    }

    /**
     * Get Unique identifier of the sponsored chat
     */
    public function getSponsoredChatUniqueId(): int
    {
        return $this->sponsoredChatUniqueId;
    }

    /**
     * Set Unique identifier of the sponsored chat
     */
    public function setSponsoredChatUniqueId(int $sponsoredChatUniqueId): self
    {
        $this->sponsoredChatUniqueId = $sponsoredChatUniqueId;

        return $this;
    }

    /**
     * Get Option identifier chosen by the user; leave empty for the initial request
     */
    public function getOptionId(): string
    {
        return $this->optionId;
    }

    /**
     * Set Option identifier chosen by the user; leave empty for the initial request
     */
    public function setOptionId(string $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportSponsoredChat',
            'sponsored_chat_unique_id' => $this->getSponsoredChatUniqueId(),
            'option_id' => $this->getOptionId(),
        ];
    }
}
