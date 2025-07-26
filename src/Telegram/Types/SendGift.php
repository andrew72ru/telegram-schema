<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sends a gift to another user or channel chat. May return an error with a message "STARGIFT_USAGE_LIMITED" if the gift was sold out
 */
class SendGift extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the gift to send */
        #[SerializedName('gift_id')]
        private int $giftId,
        /** Identifier of the user or the channel chat that will receive the gift */
        #[SerializedName('owner_id')]
        private MessageSender|null $ownerId = null,
        /** Text to show along with the gift; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed. */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Pass true to show gift text and sender only to the gift receiver; otherwise, everyone will be able to see them */
        #[SerializedName('is_private')]
        private bool $isPrivate,
        /** Pass true to additionally pay for the gift upgrade and allow the receiver to upgrade it for free */
        #[SerializedName('pay_for_upgrade')]
        private bool $payForUpgrade,
    ) {
    }

    /**
     * Get Identifier of the gift to send
     */
    public function getGiftId(): int
    {
        return $this->giftId;
    }

    /**
     * Set Identifier of the gift to send
     */
    public function setGiftId(int $giftId): self
    {
        $this->giftId = $giftId;

        return $this;
    }

    /**
     * Get Identifier of the user or the channel chat that will receive the gift
     */
    public function getOwnerId(): MessageSender|null
    {
        return $this->ownerId;
    }

    /**
     * Set Identifier of the user or the channel chat that will receive the gift
     */
    public function setOwnerId(MessageSender|null $ownerId): self
    {
        $this->ownerId = $ownerId;

        return $this;
    }

    /**
     * Get Text to show along with the gift; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text to show along with the gift; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Pass true to show gift text and sender only to the gift receiver; otherwise, everyone will be able to see them
     */
    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }

    /**
     * Set Pass true to show gift text and sender only to the gift receiver; otherwise, everyone will be able to see them
     */
    public function setIsPrivate(bool $isPrivate): self
    {
        $this->isPrivate = $isPrivate;

        return $this;
    }

    /**
     * Get Pass true to additionally pay for the gift upgrade and allow the receiver to upgrade it for free
     */
    public function getPayForUpgrade(): bool
    {
        return $this->payForUpgrade;
    }

    /**
     * Set Pass true to additionally pay for the gift upgrade and allow the receiver to upgrade it for free
     */
    public function setPayForUpgrade(bool $payForUpgrade): self
    {
        $this->payForUpgrade = $payForUpgrade;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sendGift',
            'gift_id' => $this->getGiftId(),
            'owner_id' => $this->getOwnerId(),
            'text' => $this->getText(),
            'is_private' => $this->getIsPrivate(),
            'pay_for_upgrade' => $this->getPayForUpgrade(),
        ];
    }
}
