<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a link to an opus-encoded audio file within an OGG container, single channel audio.
 */
class InputInlineQueryResultVoiceNote extends InputInlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Title of the voice note */
        #[SerializedName('title')]
        private string $title,
        /** The URL of the voice note file */
        #[SerializedName('voice_note_url')]
        private string $voiceNoteUrl,
        /** Duration of the voice note, in seconds */
        #[SerializedName('voice_note_duration')]
        private int $voiceNoteDuration,
        /** The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVoiceNote, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact */
        #[SerializedName('input_message_content')]
        private InputMessageContent|null $inputMessageContent = null,
    ) {
    }

    /**
     * Get Unique identifier of the query result.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique identifier of the query result.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Title of the voice note.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the voice note.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get The URL of the voice note file.
     */
    public function getVoiceNoteUrl(): string
    {
        return $this->voiceNoteUrl;
    }

    /**
     * Set The URL of the voice note file.
     */
    public function setVoiceNoteUrl(string $voiceNoteUrl): self
    {
        $this->voiceNoteUrl = $voiceNoteUrl;

        return $this;
    }

    /**
     * Get Duration of the voice note, in seconds.
     */
    public function getVoiceNoteDuration(): int
    {
        return $this->voiceNoteDuration;
    }

    /**
     * Set Duration of the voice note, in seconds.
     */
    public function setVoiceNoteDuration(int $voiceNoteDuration): self
    {
        $this->voiceNoteDuration = $voiceNoteDuration;

        return $this;
    }

    /**
     * Get The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
     */
    public function getReplyMarkup(): ReplyMarkup|null
    {
        return $this->replyMarkup;
    }

    /**
     * Set The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
     */
    public function setReplyMarkup(ReplyMarkup|null $replyMarkup): self
    {
        $this->replyMarkup = $replyMarkup;

        return $this;
    }

    /**
     * Get The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVoiceNote, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVoiceNote, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInlineQueryResultVoiceNote',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'voice_note_url' => $this->getVoiceNoteUrl(),
            'voice_note_duration' => $this->getVoiceNoteDuration(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
