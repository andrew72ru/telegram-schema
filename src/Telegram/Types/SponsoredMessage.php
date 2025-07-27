<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a sponsored message.
 */
class SponsoredMessage implements \JsonSerializable
{
    public function __construct(
        /** Message identifier; unique for the chat to which the sponsored message belongs among both ordinary and sponsored messages */
        #[SerializedName('message_id')]
        private int $messageId,
        /** True, if the message needs to be labeled as "recommended" instead of "sponsored" */
        #[SerializedName('is_recommended')]
        private bool $isRecommended,
        /** True, if the message can be reported to Telegram moderators through reportChatSponsoredMessage */
        #[SerializedName('can_be_reported')]
        private bool $canBeReported,
        /** Content of the message. Currently, can be only of the types messageText, messageAnimation, messagePhoto, or messageVideo. Video messages can be viewed fullscreen */
        #[SerializedName('content')]
        private MessageContent|null $content = null,
        /** Information about the sponsor of the message */
        #[SerializedName('sponsor')]
        private AdvertisementSponsor|null $sponsor = null,
        /** Title of the sponsored message */
        #[SerializedName('title')]
        private string $title,
        /** Text for the message action button */
        #[SerializedName('button_text')]
        private string $buttonText,
        /** Identifier of the accent color for title, button text and message background */
        #[SerializedName('accent_color_id')]
        private int $accentColorId,
        /** Identifier of a custom emoji to be shown on the message background; 0 if none */
        #[SerializedName('background_custom_emoji_id')]
        private int $backgroundCustomEmojiId,
        /** If non-empty, additional information about the sponsored message to be shown along with the message */
        #[SerializedName('additional_info')]
        private string $additionalInfo,
    ) {
    }

    /**
     * Get Message identifier; unique for the chat to which the sponsored message belongs among both ordinary and sponsored messages.
     */
    public function getMessageId(): int
    {
        return $this->messageId;
    }

    /**
     * Set Message identifier; unique for the chat to which the sponsored message belongs among both ordinary and sponsored messages.
     */
    public function setMessageId(int $messageId): self
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get True, if the message needs to be labeled as "recommended" instead of "sponsored".
     */
    public function getIsRecommended(): bool
    {
        return $this->isRecommended;
    }

    /**
     * Set True, if the message needs to be labeled as "recommended" instead of "sponsored".
     */
    public function setIsRecommended(bool $isRecommended): self
    {
        $this->isRecommended = $isRecommended;

        return $this;
    }

    /**
     * Get True, if the message can be reported to Telegram moderators through reportChatSponsoredMessage.
     */
    public function getCanBeReported(): bool
    {
        return $this->canBeReported;
    }

    /**
     * Set True, if the message can be reported to Telegram moderators through reportChatSponsoredMessage.
     */
    public function setCanBeReported(bool $canBeReported): self
    {
        $this->canBeReported = $canBeReported;

        return $this;
    }

    /**
     * Get Content of the message. Currently, can be only of the types messageText, messageAnimation, messagePhoto, or messageVideo. Video messages can be viewed fullscreen.
     */
    public function getContent(): MessageContent|null
    {
        return $this->content;
    }

    /**
     * Set Content of the message. Currently, can be only of the types messageText, messageAnimation, messagePhoto, or messageVideo. Video messages can be viewed fullscreen.
     */
    public function setContent(MessageContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get Information about the sponsor of the message.
     */
    public function getSponsor(): AdvertisementSponsor|null
    {
        return $this->sponsor;
    }

    /**
     * Set Information about the sponsor of the message.
     */
    public function setSponsor(AdvertisementSponsor|null $sponsor): self
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    /**
     * Get Title of the sponsored message.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the sponsored message.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Text for the message action button.
     */
    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    /**
     * Set Text for the message action button.
     */
    public function setButtonText(string $buttonText): self
    {
        $this->buttonText = $buttonText;

        return $this;
    }

    /**
     * Get Identifier of the accent color for title, button text and message background.
     */
    public function getAccentColorId(): int
    {
        return $this->accentColorId;
    }

    /**
     * Set Identifier of the accent color for title, button text and message background.
     */
    public function setAccentColorId(int $accentColorId): self
    {
        $this->accentColorId = $accentColorId;

        return $this;
    }

    /**
     * Get Identifier of a custom emoji to be shown on the message background; 0 if none.
     */
    public function getBackgroundCustomEmojiId(): int
    {
        return $this->backgroundCustomEmojiId;
    }

    /**
     * Set Identifier of a custom emoji to be shown on the message background; 0 if none.
     */
    public function setBackgroundCustomEmojiId(int $backgroundCustomEmojiId): self
    {
        $this->backgroundCustomEmojiId = $backgroundCustomEmojiId;

        return $this;
    }

    /**
     * Get If non-empty, additional information about the sponsored message to be shown along with the message.
     */
    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }

    /**
     * Set If non-empty, additional information about the sponsored message to be shown along with the message.
     */
    public function setAdditionalInfo(string $additionalInfo): self
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'sponsoredMessage',
            'message_id' => $this->getMessageId(),
            'is_recommended' => $this->getIsRecommended(),
            'can_be_reported' => $this->getCanBeReported(),
            'content' => $this->getContent(),
            'sponsor' => $this->getSponsor(),
            'title' => $this->getTitle(),
            'button_text' => $this->getButtonText(),
            'accent_color_id' => $this->getAccentColorId(),
            'background_custom_emoji_id' => $this->getBackgroundCustomEmojiId(),
            'additional_info' => $this->getAdditionalInfo(),
        ];
    }
}
