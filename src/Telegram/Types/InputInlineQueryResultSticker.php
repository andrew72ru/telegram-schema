<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a link to a WEBP, TGS, or WEBM sticker
 */
class InputInlineQueryResultSticker extends InputInlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** URL of the sticker thumbnail, if it exists */
        #[SerializedName('thumbnail_url')]
        private string $thumbnailUrl,
        /** The URL of the WEBP, TGS, or WEBM sticker (sticker file size must not exceed 5MB) */
        #[SerializedName('sticker_url')]
        private string $stickerUrl,
        /** Width of the sticker */
        #[SerializedName('sticker_width')]
        private int $stickerWidth,
        /** Height of the sticker */
        #[SerializedName('sticker_height')]
        private int $stickerHeight,
        /** The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageSticker, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Unique identifier of the query result
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the query result
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get URL of the sticker thumbnail, if it exists
     */
    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    /**
     * Set URL of the sticker thumbnail, if it exists
     */
    public function setThumbnailUrl(string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * Get The URL of the WEBP, TGS, or WEBM sticker (sticker file size must not exceed 5MB)
     */
    public function getStickerUrl(): string
    {
        return $this->stickerUrl;
    }

    /**
     * Set The URL of the WEBP, TGS, or WEBM sticker (sticker file size must not exceed 5MB)
     */
    public function setStickerUrl(string $stickerUrl): self
    {
        $this->stickerUrl = $stickerUrl;

        return $this;
    }

    /**
     * Get Width of the sticker
     */
    public function getStickerWidth(): int
    {
        return $this->stickerWidth;
    }

    /**
     * Set Width of the sticker
     */
    public function setStickerWidth(int $stickerWidth): self
    {
        $this->stickerWidth = $stickerWidth;

        return $this;
    }

    /**
     * Get Height of the sticker
     */
    public function getStickerHeight(): int
    {
        return $this->stickerHeight;
    }

    /**
     * Set Height of the sticker
     */
    public function setStickerHeight(int $stickerHeight): self
    {
        $this->stickerHeight = $stickerHeight;

        return $this;
    }

    /**
     * Get The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageSticker, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageSticker, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInlineQueryResultSticker',
            'id' => $this->getId(),
            'thumbnail_url' => $this->getThumbnailUrl(),
            'sticker_url' => $this->getStickerUrl(),
            'sticker_width' => $this->getStickerWidth(),
            'sticker_height' => $this->getStickerHeight(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
