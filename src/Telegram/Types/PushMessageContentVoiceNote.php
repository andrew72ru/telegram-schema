<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A voice note message @voice_note Message content; may be null @is_pinned True, if the message is a pinned message with the specified content.
 */
class PushMessageContentVoiceNote extends PushMessageContent implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('voice_note')]
        private VoiceNote|null $voiceNote = null,
        #[SerializedName('is_pinned')]
        private bool $isPinned,
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

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function setIsPinned(bool $isPinned): self
    {
        $this->isPinned = $isPinned;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pushMessageContentVoiceNote',
            'voice_note' => $this->getVoiceNote(),
            'is_pinned' => $this->getIsPinned(),
        ];
    }
}
