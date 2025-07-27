<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a message draft.
 */
class DraftMessage implements \JsonSerializable
{
    public function __construct(
        /** Information about the message to be replied; must be of the type inputMessageReplyToMessage; may be null if none */
        #[SerializedName('reply_to')]
        private InputMessageReplyTo|null $replyTo = null,
        /** Point in time (Unix timestamp) when the draft was created */
        #[SerializedName('date')]
        private int $date,
        /** Content of the message draft; must be of the type inputMessageText, inputMessageVideoNote, or inputMessageVoiceNote */
        #[SerializedName('input_message_text')]
        private InputMessageContent|null $inputMessageText = null,
        /** Identifier of the effect to apply to the message when it is sent; 0 if none */
        #[SerializedName('effect_id')]
        private int $effectId,
    ) {
    }

    /**
     * Get Information about the message to be replied; must be of the type inputMessageReplyToMessage; may be null if none.
     */
    public function getReplyTo(): InputMessageReplyTo|null
    {
        return $this->replyTo;
    }

    /**
     * Set Information about the message to be replied; must be of the type inputMessageReplyToMessage; may be null if none.
     */
    public function setReplyTo(InputMessageReplyTo|null $replyTo): self
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the draft was created.
     */
    public function getDate(): int
    {
        return $this->date;
    }

    /**
     * Set Point in time (Unix timestamp) when the draft was created.
     */
    public function setDate(int $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get Content of the message draft; must be of the type inputMessageText, inputMessageVideoNote, or inputMessageVoiceNote.
     */
    public function getInputMessageText(): InputMessageContent|null
    {
        return $this->inputMessageText;
    }

    /**
     * Set Content of the message draft; must be of the type inputMessageText, inputMessageVideoNote, or inputMessageVoiceNote.
     */
    public function setInputMessageText(InputMessageContent|null $inputMessageText): self
    {
        $this->inputMessageText = $inputMessageText;

        return $this;
    }

    /**
     * Get Identifier of the effect to apply to the message when it is sent; 0 if none.
     */
    public function getEffectId(): int
    {
        return $this->effectId;
    }

    /**
     * Set Identifier of the effect to apply to the message when it is sent; 0 if none.
     */
    public function setEffectId(int $effectId): self
    {
        $this->effectId = $effectId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'draftMessage',
            'reply_to' => $this->getReplyTo(),
            'date' => $this->getDate(),
            'input_message_text' => $this->getInputMessageText(),
            'effect_id' => $this->getEffectId(),
        ];
    }
}
