<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of features available on the first chat boost levels.
 */
class ChatBoostFeatures implements \JsonSerializable
{
    public function __construct(
        /** The list of features */
        #[SerializedName('features')]
        private array|null $features = null,
        /** The minimum boost level required to set custom emoji for profile background */
        #[SerializedName('min_profile_background_custom_emoji_boost_level')]
        private int $minProfileBackgroundCustomEmojiBoostLevel,
        /** The minimum boost level required to set custom emoji for reply header and link preview background; for channel chats only */
        #[SerializedName('min_background_custom_emoji_boost_level')]
        private int $minBackgroundCustomEmojiBoostLevel,
        /** The minimum boost level required to set emoji status */
        #[SerializedName('min_emoji_status_boost_level')]
        private int $minEmojiStatusBoostLevel,
        /** The minimum boost level required to set a chat theme background as chat background */
        #[SerializedName('min_chat_theme_background_boost_level')]
        private int $minChatThemeBackgroundBoostLevel,
        /** The minimum boost level required to set custom chat background */
        #[SerializedName('min_custom_background_boost_level')]
        private int $minCustomBackgroundBoostLevel,
        /** The minimum boost level required to set custom emoji sticker set for the chat; for supergroup chats only */
        #[SerializedName('min_custom_emoji_sticker_set_boost_level')]
        private int $minCustomEmojiStickerSetBoostLevel,
        /** The minimum boost level allowing to enable automatic translation of messages for non-Premium users; for channel chats only */
        #[SerializedName('min_automatic_translation_boost_level')]
        private int $minAutomaticTranslationBoostLevel,
        /** The minimum boost level allowing to recognize speech in video note and voice note messages for non-Premium users; for supergroup chats only */
        #[SerializedName('min_speech_recognition_boost_level')]
        private int $minSpeechRecognitionBoostLevel,
        /** The minimum boost level allowing to disable sponsored messages in the chat; for channel chats only */
        #[SerializedName('min_sponsored_message_disable_boost_level')]
        private int $minSponsoredMessageDisableBoostLevel,
    ) {
    }

    /**
     * Get The list of features.
     */
    public function getFeatures(): array|null
    {
        return $this->features;
    }

    /**
     * Set The list of features.
     */
    public function setFeatures(array|null $features): self
    {
        $this->features = $features;

        return $this;
    }

    /**
     * Get The minimum boost level required to set custom emoji for profile background.
     */
    public function getMinProfileBackgroundCustomEmojiBoostLevel(): int
    {
        return $this->minProfileBackgroundCustomEmojiBoostLevel;
    }

    /**
     * Set The minimum boost level required to set custom emoji for profile background.
     */
    public function setMinProfileBackgroundCustomEmojiBoostLevel(int $minProfileBackgroundCustomEmojiBoostLevel): self
    {
        $this->minProfileBackgroundCustomEmojiBoostLevel = $minProfileBackgroundCustomEmojiBoostLevel;

        return $this;
    }

    /**
     * Get The minimum boost level required to set custom emoji for reply header and link preview background; for channel chats only.
     */
    public function getMinBackgroundCustomEmojiBoostLevel(): int
    {
        return $this->minBackgroundCustomEmojiBoostLevel;
    }

    /**
     * Set The minimum boost level required to set custom emoji for reply header and link preview background; for channel chats only.
     */
    public function setMinBackgroundCustomEmojiBoostLevel(int $minBackgroundCustomEmojiBoostLevel): self
    {
        $this->minBackgroundCustomEmojiBoostLevel = $minBackgroundCustomEmojiBoostLevel;

        return $this;
    }

    /**
     * Get The minimum boost level required to set emoji status.
     */
    public function getMinEmojiStatusBoostLevel(): int
    {
        return $this->minEmojiStatusBoostLevel;
    }

    /**
     * Set The minimum boost level required to set emoji status.
     */
    public function setMinEmojiStatusBoostLevel(int $minEmojiStatusBoostLevel): self
    {
        $this->minEmojiStatusBoostLevel = $minEmojiStatusBoostLevel;

        return $this;
    }

    /**
     * Get The minimum boost level required to set a chat theme background as chat background.
     */
    public function getMinChatThemeBackgroundBoostLevel(): int
    {
        return $this->minChatThemeBackgroundBoostLevel;
    }

    /**
     * Set The minimum boost level required to set a chat theme background as chat background.
     */
    public function setMinChatThemeBackgroundBoostLevel(int $minChatThemeBackgroundBoostLevel): self
    {
        $this->minChatThemeBackgroundBoostLevel = $minChatThemeBackgroundBoostLevel;

        return $this;
    }

    /**
     * Get The minimum boost level required to set custom chat background.
     */
    public function getMinCustomBackgroundBoostLevel(): int
    {
        return $this->minCustomBackgroundBoostLevel;
    }

    /**
     * Set The minimum boost level required to set custom chat background.
     */
    public function setMinCustomBackgroundBoostLevel(int $minCustomBackgroundBoostLevel): self
    {
        $this->minCustomBackgroundBoostLevel = $minCustomBackgroundBoostLevel;

        return $this;
    }

    /**
     * Get The minimum boost level required to set custom emoji sticker set for the chat; for supergroup chats only.
     */
    public function getMinCustomEmojiStickerSetBoostLevel(): int
    {
        return $this->minCustomEmojiStickerSetBoostLevel;
    }

    /**
     * Set The minimum boost level required to set custom emoji sticker set for the chat; for supergroup chats only.
     */
    public function setMinCustomEmojiStickerSetBoostLevel(int $minCustomEmojiStickerSetBoostLevel): self
    {
        $this->minCustomEmojiStickerSetBoostLevel = $minCustomEmojiStickerSetBoostLevel;

        return $this;
    }

    /**
     * Get The minimum boost level allowing to enable automatic translation of messages for non-Premium users; for channel chats only.
     */
    public function getMinAutomaticTranslationBoostLevel(): int
    {
        return $this->minAutomaticTranslationBoostLevel;
    }

    /**
     * Set The minimum boost level allowing to enable automatic translation of messages for non-Premium users; for channel chats only.
     */
    public function setMinAutomaticTranslationBoostLevel(int $minAutomaticTranslationBoostLevel): self
    {
        $this->minAutomaticTranslationBoostLevel = $minAutomaticTranslationBoostLevel;

        return $this;
    }

    /**
     * Get The minimum boost level allowing to recognize speech in video note and voice note messages for non-Premium users; for supergroup chats only.
     */
    public function getMinSpeechRecognitionBoostLevel(): int
    {
        return $this->minSpeechRecognitionBoostLevel;
    }

    /**
     * Set The minimum boost level allowing to recognize speech in video note and voice note messages for non-Premium users; for supergroup chats only.
     */
    public function setMinSpeechRecognitionBoostLevel(int $minSpeechRecognitionBoostLevel): self
    {
        $this->minSpeechRecognitionBoostLevel = $minSpeechRecognitionBoostLevel;

        return $this;
    }

    /**
     * Get The minimum boost level allowing to disable sponsored messages in the chat; for channel chats only.
     */
    public function getMinSponsoredMessageDisableBoostLevel(): int
    {
        return $this->minSponsoredMessageDisableBoostLevel;
    }

    /**
     * Set The minimum boost level allowing to disable sponsored messages in the chat; for channel chats only.
     */
    public function setMinSponsoredMessageDisableBoostLevel(int $minSponsoredMessageDisableBoostLevel): self
    {
        $this->minSponsoredMessageDisableBoostLevel = $minSponsoredMessageDisableBoostLevel;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoostFeatures',
            'features' => $this->getFeatures(),
            'min_profile_background_custom_emoji_boost_level' => $this->getMinProfileBackgroundCustomEmojiBoostLevel(),
            'min_background_custom_emoji_boost_level' => $this->getMinBackgroundCustomEmojiBoostLevel(),
            'min_emoji_status_boost_level' => $this->getMinEmojiStatusBoostLevel(),
            'min_chat_theme_background_boost_level' => $this->getMinChatThemeBackgroundBoostLevel(),
            'min_custom_background_boost_level' => $this->getMinCustomBackgroundBoostLevel(),
            'min_custom_emoji_sticker_set_boost_level' => $this->getMinCustomEmojiStickerSetBoostLevel(),
            'min_automatic_translation_boost_level' => $this->getMinAutomaticTranslationBoostLevel(),
            'min_speech_recognition_boost_level' => $this->getMinSpeechRecognitionBoostLevel(),
            'min_sponsored_message_disable_boost_level' => $this->getMinSponsoredMessageDisableBoostLevel(),
        ];
    }
}
