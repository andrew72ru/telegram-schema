<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns a list of sticker sets attached to a file, including regular, mask, and emoji sticker sets. Currently, only animations, photos, and videos can have attached sticker sets @file_id File identifier
 */
class GetAttachedStickerSets extends StickerSets implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('file_id')]
        private int $fileId,
    ) {
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function setFileId(int $fileId): self
    {
        $this->fileId = $fileId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getAttachedStickerSets',
            'file_id' => $this->getFileId(),
        ];
    }
}
