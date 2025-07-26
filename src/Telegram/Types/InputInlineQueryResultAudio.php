<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a link to an MP3 audio file
 */
class InputInlineQueryResultAudio extends InputInlineQueryResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the query result */
        #[SerializedName('id')]
        private string $id,
        /** Title of the audio file */
        #[SerializedName('title')]
        private string $title,
        /** Performer of the audio file */
        #[SerializedName('performer')]
        private string $performer,
        /** The URL of the audio file */
        #[SerializedName('audio_url')]
        private string $audioUrl,
        /** Audio file duration, in seconds */
        #[SerializedName('audio_duration')]
        private int $audioDuration,
        /** The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null */
        #[SerializedName('reply_markup')]
        private ReplyMarkup|null $replyMarkup = null,
        /** The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAudio, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact */
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
     * Get Title of the audio file
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the audio file
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Performer of the audio file
     */
    public function getPerformer(): string
    {
        return $this->performer;
    }

    /**
     * Set Performer of the audio file
     */
    public function setPerformer(string $performer): self
    {
        $this->performer = $performer;

        return $this;
    }

    /**
     * Get The URL of the audio file
     */
    public function getAudioUrl(): string
    {
        return $this->audioUrl;
    }

    /**
     * Set The URL of the audio file
     */
    public function setAudioUrl(string $audioUrl): self
    {
        $this->audioUrl = $audioUrl;

        return $this;
    }

    /**
     * Get Audio file duration, in seconds
     */
    public function getAudioDuration(): int
    {
        return $this->audioDuration;
    }

    /**
     * Set Audio file duration, in seconds
     */
    public function setAudioDuration(int $audioDuration): self
    {
        $this->audioDuration = $audioDuration;

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
     * Get The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAudio, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function getInputMessageContent(): InputMessageContent|null
    {
        return $this->inputMessageContent;
    }

    /**
     * Set The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAudio, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact
     */
    public function setInputMessageContent(InputMessageContent|null $inputMessageContent): self
    {
        $this->inputMessageContent = $inputMessageContent;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputInlineQueryResultAudio',
            'id' => $this->getId(),
            'title' => $this->getTitle(),
            'performer' => $this->getPerformer(),
            'audio_url' => $this->getAudioUrl(),
            'audio_duration' => $this->getAudioDuration(),
            'reply_markup' => $this->getReplyMarkup(),
            'input_message_content' => $this->getInputMessageContent(),
        ];
    }
}
