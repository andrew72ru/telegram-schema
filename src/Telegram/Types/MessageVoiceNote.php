<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A voice note message @voice_note The voice note description @caption Voice note caption @is_listened True, if at least one of the recipients has listened to the voice note
 */
class MessageVoiceNote extends MessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('voice_note')]
        private VoiceNote|null $voiceNote = null,
        #[SerializedName('caption')]
        private FormattedText|null $caption = null,
        #[SerializedName('is_listened')]
        private bool $isListened,
    ) {
    }

    public function getVoiceNote(): VoiceNote|null
    {
        return $this->voiceNote;
    }

    public function setVoiceNote(VoiceNote|null $voiceNote): self
    {
        $this->voiceNote = $voiceNote;

        return $this;
    }

    public function getCaption(): FormattedText|null
    {
        return $this->caption;
    }

    public function setCaption(FormattedText|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function getIsListened(): bool
    {
        return $this->isListened;
    }

    public function setIsListened(bool $isListened): self
    {
        $this->isListened = $isListened;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageVoiceNote',
            'voice_note' => $this->getVoiceNote(),
            'caption' => $this->getCaption(),
            'is_listened' => $this->getIsListened(),
        ];
    }
}
