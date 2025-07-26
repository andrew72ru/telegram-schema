<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A voice note
 */
class PageBlockVoiceNote extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Voice note; may be null */
        #[SerializedName('voice_note')]
        private VoiceNote|null $voiceNote = null,
        /** Voice note caption */
        #[SerializedName('caption')]
        private PageBlockCaption|null $caption = null,
    ) {
    }

    /**
     * Get Voice note; may be null
     */
    public function getVoiceNote(): VoiceNote|null
    {
        return $this->voiceNote;
    }

    /**
     * Set Voice note; may be null
     */
    public function setVoiceNote(VoiceNote|null $voiceNote): self
    {
        $this->voiceNote = $voiceNote;

        return $this;
    }

    /**
     * Get Voice note caption
     */
    public function getCaption(): PageBlockCaption|null
    {
        return $this->caption;
    }

    /**
     * Set Voice note caption
     */
    public function setCaption(PageBlockCaption|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockVoiceNote',
            'voice_note' => $this->getVoiceNote(),
            'caption' => $this->getCaption(),
        ];
    }
}
