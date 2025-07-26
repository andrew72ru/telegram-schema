<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about the sticker, which was used to create the chat photo. The sticker is shown at the center of the photo and occupies at most 67% of it
 */
class ChatPhotoSticker implements \JsonSerializable
{
    public function __construct(
        /** Type of the sticker */
        #[SerializedName('type')]
        private ChatPhotoStickerType|null $type = null,
        /** The fill to be used as background for the sticker; rotation angle in backgroundFillGradient isn't supported */
        #[SerializedName('background_fill')]
        private BackgroundFill|null $backgroundFill = null,
    ) {
    }

    /**
     * Get Type of the sticker
     */
    public function getType(): ChatPhotoStickerType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the sticker
     */
    public function setType(ChatPhotoStickerType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get The fill to be used as background for the sticker; rotation angle in backgroundFillGradient isn't supported
     */
    public function getBackgroundFill(): BackgroundFill|null
    {
        return $this->backgroundFill;
    }

    /**
     * Set The fill to be used as background for the sticker; rotation angle in backgroundFillGradient isn't supported
     */
    public function setBackgroundFill(BackgroundFill|null $backgroundFill): self
    {
        $this->backgroundFill = $backgroundFill;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatPhotoSticker',
            'type' => $this->getType(),
            'background_fill' => $this->getBackgroundFill(),
        ];
    }
}
