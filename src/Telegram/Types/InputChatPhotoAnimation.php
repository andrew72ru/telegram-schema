<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * An animation in MPEG4 format; must be square, at most 10 seconds long, have width between 160 and 1280 and be at most 2MB in size
 */
class InputChatPhotoAnimation extends InputChatPhoto implements \JsonSerializable
{
    public function __construct(
        /** Animation to be set as profile photo. Only inputFileLocal and inputFileGenerated are allowed */
        #[SerializedName('animation')]
        private InputFile|null $animation = null,
        /** Timestamp of the frame, which will be used as static chat photo */
        #[SerializedName('main_frame_timestamp')]
        private float $mainFrameTimestamp,
    ) {
    }

    /**
     * Get Animation to be set as profile photo. Only inputFileLocal and inputFileGenerated are allowed
     */
    public function getAnimation(): InputFile|null
    {
        return $this->animation;
    }

    /**
     * Set Animation to be set as profile photo. Only inputFileLocal and inputFileGenerated are allowed
     */
    public function setAnimation(InputFile|null $animation): self
    {
        $this->animation = $animation;

        return $this;
    }

    /**
     * Get Timestamp of the frame, which will be used as static chat photo
     */
    public function getMainFrameTimestamp(): float
    {
        return $this->mainFrameTimestamp;
    }

    /**
     * Set Timestamp of the frame, which will be used as static chat photo
     */
    public function setMainFrameTimestamp(float $mainFrameTimestamp): self
    {
        $this->mainFrameTimestamp = $mainFrameTimestamp;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputChatPhotoAnimation',
            'animation' => $this->getAnimation(),
            'main_frame_timestamp' => $this->getMainFrameTimestamp(),
        ];
    }
}
