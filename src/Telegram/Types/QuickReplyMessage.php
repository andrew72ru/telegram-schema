<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a message that can be used for quick reply
 */
class QuickReplyMessage implements \JsonSerializable
{
    public function __construct(
        /** Unique message identifier among all quick replies */
        #[SerializedName('id')]
        private int $id,
        /** The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent */
        #[SerializedName('sending_state')]
        private MessageSendingState|null $sendingState = null,
        /** True, if the message can be edited */
        #[SerializedName('can_be_edited')]
        private bool $canBeEdited,
        /** The identifier of the quick reply message to which the message replies; 0 if none */
        #[SerializedName('reply_to_message_id')]
        private int $replyToMessageId,
        /** If non-zero, the user identifier of the bot through which this message was sent */
        #[SerializedName('via_bot_user_id')]
        private int $viaBotUserId,
        /** Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums */
        #[SerializedName('media_album_id')]
        private int $mediaAlbumId,
        /** Content of the message */
        #[SerializedName('content')]
        private MessageContent|null $content = null,
        /** Inline keyboard reply markup for the message; may be null if none */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
    ) {
    }

    /**
     * Get Unique message identifier among all quick replies
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Unique message identifier among all quick replies
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent
     */
    public function getSendingState(): MessageSendingState|null
    {
        return $this->sendingState;
    }

    /**
     * Set The sending state of the message; may be null if the message isn't being sent and didn't fail to be sent
     */
    public function setSendingState(MessageSendingState|null $sendingState): self
    {
        $this->sendingState = $sendingState;

        return $this;
    }

    /**
     * Get True, if the message can be edited
     */
    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    /**
     * Set True, if the message can be edited
     */
    public function setCanBeEdited(bool $canBeEdited): self
    {
        $this->canBeEdited = $canBeEdited;

        return $this;
    }

    /**
     * Get The identifier of the quick reply message to which the message replies; 0 if none
     */
    public function getReplyToMessageId(): int
    {
        return $this->replyToMessageId;
    }

    /**
     * Set The identifier of the quick reply message to which the message replies; 0 if none
     */
    public function setReplyToMessageId(int $replyToMessageId): self
    {
        $this->replyToMessageId = $replyToMessageId;

        return $this;
    }

    /**
     * Get If non-zero, the user identifier of the bot through which this message was sent
     */
    public function getViaBotUserId(): int
    {
        return $this->viaBotUserId;
    }

    /**
     * Set If non-zero, the user identifier of the bot through which this message was sent
     */
    public function setViaBotUserId(int $viaBotUserId): self
    {
        $this->viaBotUserId = $viaBotUserId;

        return $this;
    }

    /**
     * Get Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums
     */
    public function getMediaAlbumId(): int
    {
        return $this->mediaAlbumId;
    }

    /**
     * Set Unique identifier of an album this message belongs to; 0 if none. Only audios, documents, photos and videos can be grouped together in albums
     */
    public function setMediaAlbumId(int $mediaAlbumId): self
    {
        $this->mediaAlbumId = $mediaAlbumId;

        return $this;
    }

    /**
     * Get Content of the message
     */
    public function getContent(): MessageContent|null
    {
        return $this->content;
    }

    /**
     * Set Content of the message
     */
    public function setContent(MessageContent|null $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get Inline keyboard reply markup for the message; may be null if none
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set Inline keyboard reply markup for the message; may be null if none
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'quickReplyMessage',
            'id' => $this->getId(),
            'sending_state' => $this->getSendingState(),
            'can_be_edited' => $this->getCanBeEdited(),
            'reply_to_message_id' => $this->getReplyToMessageId(),
            'via_bot_user_id' => $this->getViaBotUserId(),
            'media_album_id' => $this->getMediaAlbumId(),
            'content' => $this->getContent(),
            'reply_markup' => $this->getReplyMarkup(),
        ];
    }
}
