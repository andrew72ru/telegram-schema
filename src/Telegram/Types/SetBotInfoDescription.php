<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the text shown in the chat with a bot if the chat is empty. Can be called only if userTypeBot.can_be_edited == true.
 */
class SetBotInfoDescription extends Ok implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the target bot */
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        /** A two-letter ISO 639-1 language code. If empty, the description will be shown to all users for whose languages there is no dedicated description */
        #[SerializedName('language_code')]
        private string $languageCode,
        /** Sets the text shown in the chat with a bot if the chat is empty. Can be called only if userTypeBot.can_be_edited == true */
        #[SerializedName('description')]
        private string $description,
    ) {
    }

    /**
     * Get Identifier of the target bot.
     */
    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    /**
     * Set Identifier of the target bot.
     */
    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    /**
     * Get A two-letter ISO 639-1 language code. If empty, the description will be shown to all users for whose languages there is no dedicated description.
     */
    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    /**
     * Set A two-letter ISO 639-1 language code. If empty, the description will be shown to all users for whose languages there is no dedicated description.
     */
    public function setLanguageCode(string $languageCode): self
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Get Sets the text shown in the chat with a bot if the chat is empty. Can be called only if userTypeBot.can_be_edited == true.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Sets the text shown in the chat with a bot if the chat is empty. Can be called only if userTypeBot.can_be_edited == true.
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBotInfoDescription',
            'bot_user_id' => $this->getBotUserId(),
            'language_code' => $this->getLanguageCode(),
            'description' => $this->getDescription(),
        ];
    }
}
