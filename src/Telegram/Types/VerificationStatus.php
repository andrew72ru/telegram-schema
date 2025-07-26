<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about verification status of a chat or a user
 */
class VerificationStatus implements \JsonSerializable
{
    public function __construct(
        /** True, if the chat or the user is verified by Telegram */
        #[SerializedName('is_verified')]
        private bool $isVerified,
        /** True, if the chat or the user is marked as scam by Telegram */
        #[SerializedName('is_scam')]
        private bool $isScam,
        /** True, if the chat or the user is marked as fake by Telegram */
        #[SerializedName('is_fake')]
        private bool $isFake,
        /** Identifier of the custom emoji to be shown as verification sign provided by a bot for the user; 0 if none */
        #[SerializedName('bot_verification_icon_custom_emoji_id')]
        private int $botVerificationIconCustomEmojiId,
    ) {
    }

    /**
     * Get True, if the chat or the user is verified by Telegram
     */
    public function getIsVerified(): bool
    {
        return $this->isVerified;
    }

    /**
     * Set True, if the chat or the user is verified by Telegram
     */
    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    /**
     * Get True, if the chat or the user is marked as scam by Telegram
     */
    public function getIsScam(): bool
    {
        return $this->isScam;
    }

    /**
     * Set True, if the chat or the user is marked as scam by Telegram
     */
    public function setIsScam(bool $isScam): self
    {
        $this->isScam = $isScam;

        return $this;
    }

    /**
     * Get True, if the chat or the user is marked as fake by Telegram
     */
    public function getIsFake(): bool
    {
        return $this->isFake;
    }

    /**
     * Set True, if the chat or the user is marked as fake by Telegram
     */
    public function setIsFake(bool $isFake): self
    {
        $this->isFake = $isFake;

        return $this;
    }

    /**
     * Get Identifier of the custom emoji to be shown as verification sign provided by a bot for the user; 0 if none
     */
    public function getBotVerificationIconCustomEmojiId(): int
    {
        return $this->botVerificationIconCustomEmojiId;
    }

    /**
     * Set Identifier of the custom emoji to be shown as verification sign provided by a bot for the user; 0 if none
     */
    public function setBotVerificationIconCustomEmojiId(int $botVerificationIconCustomEmojiId): self
    {
        $this->botVerificationIconCustomEmojiId = $botVerificationIconCustomEmojiId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'verificationStatus',
            'is_verified' => $this->getIsVerified(),
            'is_scam' => $this->getIsScam(),
            'is_fake' => $this->getIsFake(),
            'bot_verification_icon_custom_emoji_id' => $this->getBotVerificationIconCustomEmojiId(),
        ];
    }
}
