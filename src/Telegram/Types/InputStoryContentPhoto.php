<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A photo story.
 */
class InputStoryContentPhoto extends InputStoryContent implements \JsonSerializable
{
    public function __construct(
        /** Photo to send. The photo must be at most 10 MB in size. The photo size must be 1080x1920 */
        #[SerializedName('photo')]
        private InputFile|null $photo = null,
        /** File identifiers of the stickers added to the photo, if applicable */
        #[SerializedName('added_sticker_file_ids')]
        private array|null $addedStickerFileIds = null,
    ) {
    }

    /**
     * Get Photo to send. The photo must be at most 10 MB in size. The photo size must be 1080x1920.
     */
    public function getPhoto(): InputFile|null
    {
        return $this->photo;
    }

    /**
     * Set Photo to send. The photo must be at most 10 MB in size. The photo size must be 1080x1920.
     */
    public function setPhoto(InputFile|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get File identifiers of the stickers added to the photo, if applicable.
     */
    public function getAddedStickerFileIds(): array|null
    {
        return $this->addedStickerFileIds;
    }

    /**
     * Set File identifiers of the stickers added to the photo, if applicable.
     */
    public function setAddedStickerFileIds(array|null $addedStickerFileIds): self
    {
        $this->addedStickerFileIds = $addedStickerFileIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryContentPhoto',
            'photo' => $this->getPhoto(),
            'added_sticker_file_ids' => $this->getAddedStickerFileIds(),
        ];
    }
}
