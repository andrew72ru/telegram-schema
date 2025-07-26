<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of features available on a specific chat boost level
 */
class ChatBoostLevelFeatures implements \JsonSerializable
{
    public function __construct(
        /** Target chat boost level */
        #[SerializedName('level')]
        private int $level,
        /** Number of stories that the chat can publish daily */
        #[SerializedName('story_per_day_count')]
        private int $storyPerDayCount,
        /** Number of custom emoji reactions that can be added to the list of available reactions */
        #[SerializedName('custom_emoji_reaction_count')]
        private int $customEmojiReactionCount,
        /** Number of custom colors for chat title */
        #[SerializedName('title_color_count')]
        private int $titleColorCount,
        /** Number of custom colors for profile photo background */
        #[SerializedName('profile_accent_color_count')]
        private int $profileAccentColorCount,
        /** True, if custom emoji for profile background can be set */
        #[SerializedName('can_set_profile_background_custom_emoji')]
        private bool $canSetProfileBackgroundCustomEmoji,
        /** Number of custom colors for background of empty chat photo, replies to messages and link previews */
        #[SerializedName('accent_color_count')]
        private int $accentColorCount,
        /** True, if custom emoji for reply header and link preview background can be set */
        #[SerializedName('can_set_background_custom_emoji')]
        private bool $canSetBackgroundCustomEmoji,
        /** True, if emoji status can be set */
        #[SerializedName('can_set_emoji_status')]
        private bool $canSetEmojiStatus,
        /** Number of chat theme backgrounds that can be set as chat background */
        #[SerializedName('chat_theme_background_count')]
        private int $chatThemeBackgroundCount,
        /** True, if custom background can be set in the chat for all users */
        #[SerializedName('can_set_custom_background')]
        private bool $canSetCustomBackground,
        /** True, if custom emoji sticker set can be set for the chat */
        #[SerializedName('can_set_custom_emoji_sticker_set')]
        private bool $canSetCustomEmojiStickerSet,
        /** True, if automatic translation of messages can be enabled in the chat */
        #[SerializedName('can_enable_automatic_translation')]
        private bool $canEnableAutomaticTranslation,
        /** True, if speech recognition can be used for video note and voice note messages by all users */
        #[SerializedName('can_recognize_speech')]
        private bool $canRecognizeSpeech,
        /** True, if sponsored messages can be disabled in the chat */
        #[SerializedName('can_disable_sponsored_messages')]
        private bool $canDisableSponsoredMessages,
    ) {
    }

    /**
     * Get Target chat boost level
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * Set Target chat boost level
     */
    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get Number of stories that the chat can publish daily
     */
    public function getStoryPerDayCount(): int
    {
        return $this->storyPerDayCount;
    }

    /**
     * Set Number of stories that the chat can publish daily
     */
    public function setStoryPerDayCount(int $storyPerDayCount): self
    {
        $this->storyPerDayCount = $storyPerDayCount;

        return $this;
    }

    /**
     * Get Number of custom emoji reactions that can be added to the list of available reactions
     */
    public function getCustomEmojiReactionCount(): int
    {
        return $this->customEmojiReactionCount;
    }

    /**
     * Set Number of custom emoji reactions that can be added to the list of available reactions
     */
    public function setCustomEmojiReactionCount(int $customEmojiReactionCount): self
    {
        $this->customEmojiReactionCount = $customEmojiReactionCount;

        return $this;
    }

    /**
     * Get Number of custom colors for chat title
     */
    public function getTitleColorCount(): int
    {
        return $this->titleColorCount;
    }

    /**
     * Set Number of custom colors for chat title
     */
    public function setTitleColorCount(int $titleColorCount): self
    {
        $this->titleColorCount = $titleColorCount;

        return $this;
    }

    /**
     * Get Number of custom colors for profile photo background
     */
    public function getProfileAccentColorCount(): int
    {
        return $this->profileAccentColorCount;
    }

    /**
     * Set Number of custom colors for profile photo background
     */
    public function setProfileAccentColorCount(int $profileAccentColorCount): self
    {
        $this->profileAccentColorCount = $profileAccentColorCount;

        return $this;
    }

    /**
     * Get True, if custom emoji for profile background can be set
     */
    public function getCanSetProfileBackgroundCustomEmoji(): bool
    {
        return $this->canSetProfileBackgroundCustomEmoji;
    }

    /**
     * Set True, if custom emoji for profile background can be set
     */
    public function setCanSetProfileBackgroundCustomEmoji(bool $canSetProfileBackgroundCustomEmoji): self
    {
        $this->canSetProfileBackgroundCustomEmoji = $canSetProfileBackgroundCustomEmoji;

        return $this;
    }

    /**
     * Get Number of custom colors for background of empty chat photo, replies to messages and link previews
     */
    public function getAccentColorCount(): int
    {
        return $this->accentColorCount;
    }

    /**
     * Set Number of custom colors for background of empty chat photo, replies to messages and link previews
     */
    public function setAccentColorCount(int $accentColorCount): self
    {
        $this->accentColorCount = $accentColorCount;

        return $this;
    }

    /**
     * Get True, if custom emoji for reply header and link preview background can be set
     */
    public function getCanSetBackgroundCustomEmoji(): bool
    {
        return $this->canSetBackgroundCustomEmoji;
    }

    /**
     * Set True, if custom emoji for reply header and link preview background can be set
     */
    public function setCanSetBackgroundCustomEmoji(bool $canSetBackgroundCustomEmoji): self
    {
        $this->canSetBackgroundCustomEmoji = $canSetBackgroundCustomEmoji;

        return $this;
    }

    /**
     * Get True, if emoji status can be set
     */
    public function getCanSetEmojiStatus(): bool
    {
        return $this->canSetEmojiStatus;
    }

    /**
     * Set True, if emoji status can be set
     */
    public function setCanSetEmojiStatus(bool $canSetEmojiStatus): self
    {
        $this->canSetEmojiStatus = $canSetEmojiStatus;

        return $this;
    }

    /**
     * Get Number of chat theme backgrounds that can be set as chat background
     */
    public function getChatThemeBackgroundCount(): int
    {
        return $this->chatThemeBackgroundCount;
    }

    /**
     * Set Number of chat theme backgrounds that can be set as chat background
     */
    public function setChatThemeBackgroundCount(int $chatThemeBackgroundCount): self
    {
        $this->chatThemeBackgroundCount = $chatThemeBackgroundCount;

        return $this;
    }

    /**
     * Get True, if custom background can be set in the chat for all users
     */
    public function getCanSetCustomBackground(): bool
    {
        return $this->canSetCustomBackground;
    }

    /**
     * Set True, if custom background can be set in the chat for all users
     */
    public function setCanSetCustomBackground(bool $canSetCustomBackground): self
    {
        $this->canSetCustomBackground = $canSetCustomBackground;

        return $this;
    }

    /**
     * Get True, if custom emoji sticker set can be set for the chat
     */
    public function getCanSetCustomEmojiStickerSet(): bool
    {
        return $this->canSetCustomEmojiStickerSet;
    }

    /**
     * Set True, if custom emoji sticker set can be set for the chat
     */
    public function setCanSetCustomEmojiStickerSet(bool $canSetCustomEmojiStickerSet): self
    {
        $this->canSetCustomEmojiStickerSet = $canSetCustomEmojiStickerSet;

        return $this;
    }

    /**
     * Get True, if automatic translation of messages can be enabled in the chat
     */
    public function getCanEnableAutomaticTranslation(): bool
    {
        return $this->canEnableAutomaticTranslation;
    }

    /**
     * Set True, if automatic translation of messages can be enabled in the chat
     */
    public function setCanEnableAutomaticTranslation(bool $canEnableAutomaticTranslation): self
    {
        $this->canEnableAutomaticTranslation = $canEnableAutomaticTranslation;

        return $this;
    }

    /**
     * Get True, if speech recognition can be used for video note and voice note messages by all users
     */
    public function getCanRecognizeSpeech(): bool
    {
        return $this->canRecognizeSpeech;
    }

    /**
     * Set True, if speech recognition can be used for video note and voice note messages by all users
     */
    public function setCanRecognizeSpeech(bool $canRecognizeSpeech): self
    {
        $this->canRecognizeSpeech = $canRecognizeSpeech;

        return $this;
    }

    /**
     * Get True, if sponsored messages can be disabled in the chat
     */
    public function getCanDisableSponsoredMessages(): bool
    {
        return $this->canDisableSponsoredMessages;
    }

    /**
     * Set True, if sponsored messages can be disabled in the chat
     */
    public function setCanDisableSponsoredMessages(bool $canDisableSponsoredMessages): self
    {
        $this->canDisableSponsoredMessages = $canDisableSponsoredMessages;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatBoostLevelFeatures',
            'level' => $this->getLevel(),
            'story_per_day_count' => $this->getStoryPerDayCount(),
            'custom_emoji_reaction_count' => $this->getCustomEmojiReactionCount(),
            'title_color_count' => $this->getTitleColorCount(),
            'profile_accent_color_count' => $this->getProfileAccentColorCount(),
            'can_set_profile_background_custom_emoji' => $this->getCanSetProfileBackgroundCustomEmoji(),
            'accent_color_count' => $this->getAccentColorCount(),
            'can_set_background_custom_emoji' => $this->getCanSetBackgroundCustomEmoji(),
            'can_set_emoji_status' => $this->getCanSetEmojiStatus(),
            'chat_theme_background_count' => $this->getChatThemeBackgroundCount(),
            'can_set_custom_background' => $this->getCanSetCustomBackground(),
            'can_set_custom_emoji_sticker_set' => $this->getCanSetCustomEmojiStickerSet(),
            'can_enable_automatic_translation' => $this->getCanEnableAutomaticTranslation(),
            'can_recognize_speech' => $this->getCanRecognizeSpeech(),
            'can_disable_sponsored_messages' => $this->getCanDisableSponsoredMessages(),
        ];
    }
}
