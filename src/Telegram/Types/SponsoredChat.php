<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a sponsored chat
 */
class SponsoredChat implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of this result */
        #[SerializedName('unique_id')]
        private int $uniqueId,
        /** Chat identifier */
        #[SerializedName('chat_id')]
        private int $chatId,
        /** Additional optional information about the sponsor to be shown along with the chat */
        #[SerializedName('sponsor_info')]
        private string $sponsorInfo,
        /** If non-empty, additional information about the sponsored chat to be shown along with the chat */
        #[SerializedName('additional_info')]
        private string $additionalInfo,
    ) {
    }

    /**
     * Get Unique identifier of this result
     */
    public function getUniqueId(): int
    {
        return $this->uniqueId;
    }

    /**
     * Set Unique identifier of this result
     */
    public function setUniqueId(int $uniqueId): self
    {
        $this->uniqueId = $uniqueId;

        return $this;
    }

    /**
     * Get Chat identifier
     */
    public function getChatId(): int
    {
        return $this->chatId;
    }

    /**
     * Set Chat identifier
     */
    public function setChatId(int $chatId): self
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get Additional optional information about the sponsor to be shown along with the chat
     */
    public function getSponsorInfo(): string
    {
        return $this->sponsorInfo;
    }

    /**
     * Set Additional optional information about the sponsor to be shown along with the chat
     */
    public function setSponsorInfo(string $sponsorInfo): self
    {
        $this->sponsorInfo = $sponsorInfo;

        return $this;
    }

    /**
     * Get If non-empty, additional information about the sponsored chat to be shown along with the chat
     */
    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }

    /**
     * Set If non-empty, additional information about the sponsored chat to be shown along with the chat
     */
    public function setAdditionalInfo(string $additionalInfo): self
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sponsoredChat',
            'unique_id' => $this->getUniqueId(),
            'chat_id' => $this->getChatId(),
            'sponsor_info' => $this->getSponsorInfo(),
            'additional_info' => $this->getAdditionalInfo(),
        ];
    }
}
