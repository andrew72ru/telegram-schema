<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes verification status provided by a bot.
 */
class BotVerification implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the bot that provided the verification */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** Identifier of the custom emoji that is used as the verification sign */
        #[SerializedName('icon_custom_emoji_id')]
        private int $iconCustomEmojiId,
        /** Custom description of verification reason set by the bot. Can contain only Mention, Hashtag, Cashtag, PhoneNumber, BankCardNumber, Url, and EmailAddress entities */
        #[SerializedName('custom_description')]
        private FormattedText|null $customDescription = null,
    ) {
    }

    /**
     * Get Identifier of the bot that provided the verification.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the bot that provided the verification.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get Identifier of the custom emoji that is used as the verification sign.
     */
    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    /**
     * Set Identifier of the custom emoji that is used as the verification sign.
     */
    public function setIconCustomEmojiId(int $iconCustomEmojiId): self
    {
        $this->iconCustomEmojiId = $iconCustomEmojiId;

        return $this;
    }

    /**
     * Get Custom description of verification reason set by the bot. Can contain only Mention, Hashtag, Cashtag, PhoneNumber, BankCardNumber, Url, and EmailAddress entities.
     */
    public function getCustomDescription(): FormattedText|null
    {
        return $this->customDescription;
    }

    /**
     * Set Custom description of verification reason set by the bot. Can contain only Mention, Hashtag, Cashtag, PhoneNumber, BankCardNumber, Url, and EmailAddress entities.
     */
    public function setCustomDescription(FormattedText|null $customDescription): self
    {
        $this->customDescription = $customDescription;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botVerification',
            'bot_user_id' => $this->getBotUserId(),
            'icon_custom_emoji_id' => $this->getIconCustomEmojiId(),
            'custom_description' => $this->getCustomDescription(),
        ];
    }
}
