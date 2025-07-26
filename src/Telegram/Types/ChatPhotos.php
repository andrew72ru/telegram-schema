<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of chat or user profile photos @total_count Total number of photos @photos List of photos
 */
class ChatPhotos implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('total_count')]
        private int $totalCount,
        #[SerializedName('photos')]
        private array|null $photos = null,
    ) {
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setTotalCount(int $totalCount): self
    {
        $this->totalCount = $totalCount;

        return $this;
    }

    public function getPhotos(): array|null
    {
        return $this->photos;
    }

    public function setPhotos(array|null $photos): self
    {
        $this->photos = $photos;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'chatPhotos',
            'total_count' => $this->getTotalCount(),
            'photos' => $this->getPhotos(),
        ];
    }
}
