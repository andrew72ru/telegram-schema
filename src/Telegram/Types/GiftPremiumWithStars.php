<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Allows to buy a Telegram Premium subscription for another user with payment in Telegram Stars; for bots only
 */
class GiftPremiumWithStars extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the user which will receive Telegram Premium */
        #[SerializedName('user_id')]
        private int $userId,
        /** The number of Telegram Stars to pay for subscription */
        #[SerializedName('star_count')]
        private int $starCount,
        /** Number of months the Telegram Premium subscription will be active for the user */
        #[SerializedName('month_count')]
        private int $monthCount,
        /** Text to show to the user receiving Telegram Premium; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
    ) {
    }

    /**
     * Get Identifier of the user which will receive Telegram Premium
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * Set Identifier of the user which will receive Telegram Premium
     */
    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get The number of Telegram Stars to pay for subscription
     */
    public function getStarCount(): int
    {
        return $this->starCount;
    }

    /**
     * Set The number of Telegram Stars to pay for subscription
     */
    public function setStarCount(int $starCount): self
    {
        $this->starCount = $starCount;

        return $this;
    }

    /**
     * Get Number of months the Telegram Premium subscription will be active for the user
     */
    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    /**
     * Set Number of months the Telegram Premium subscription will be active for the user
     */
    public function setMonthCount(int $monthCount): self
    {
        $this->monthCount = $monthCount;

        return $this;
    }

    /**
     * Get Text to show to the user receiving Telegram Premium; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Text to show to the user receiving Telegram Premium; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giftPremiumWithStars',
            'user_id' => $this->getUserId(),
            'star_count' => $this->getStarCount(),
            'month_count' => $this->getMonthCount(),
            'text' => $this->getText(),
        ];
    }
}
