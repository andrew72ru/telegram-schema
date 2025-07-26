<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An audio file
 */
class PageBlockAudio extends PageBlock implements \JsonSerializable
{
    public function __construct(
        /** Audio file; may be null */
        #[SerializedName('audio')]
        private Audio|null $audio = null,
        /** Audio file caption */
        #[SerializedName('caption')]
        private PageBlockCaption|null $caption = null,
    ) {
    }

    /**
     * Get Audio file; may be null
     */
    public function getAudio(): Audio|null
    {
        return $this->audio;
    }

    /**
     * Set Audio file; may be null
     */
    public function setAudio(Audio|null $audio): self
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Get Audio file caption
     */
    public function getCaption(): PageBlockCaption|null
    {
        return $this->caption;
    }

    /**
     * Set Audio file caption
     */
    public function setCaption(PageBlockCaption|null $caption): self
    {
        $this->caption = $caption;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockAudio',
            'audio' => $this->getAudio(),
            'caption' => $this->getCaption(),
        ];
    }
}
