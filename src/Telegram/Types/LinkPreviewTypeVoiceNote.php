<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a voice note message @voice_note The voice note.
 */
class LinkPreviewTypeVoiceNote extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('voice_note')]
        private VoiceNote|null $voiceNote = null,
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

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeVoiceNote',
            'voice_note' => $this->getVoiceNote(),
        ];
    }
}
