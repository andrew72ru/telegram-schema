<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Completely deletes a sticker set @name Sticker set name. The sticker set must be owned by the current user
 */
class DeleteStickerSet extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('name')]
        private string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deleteStickerSet',
            'name' => $this->getName(),
        ];
    }
}
