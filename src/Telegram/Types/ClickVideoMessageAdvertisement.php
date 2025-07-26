<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Informs TDLib that the user clicked a video message advertisement @advertisement_unique_id Unique identifier of the advertisement
 */
class ClickVideoMessageAdvertisement extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('advertisement_unique_id')]
        private int $advertisementUniqueId,
    ) {
    }

    public function getAdvertisementUniqueId(): int
    {
        return $this->advertisementUniqueId;
    }

    public function setAdvertisementUniqueId(int $advertisementUniqueId): self
    {
        $this->advertisementUniqueId = $advertisementUniqueId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clickVideoMessageAdvertisement',
            'advertisement_unique_id' => $this->getAdvertisementUniqueId(),
        ];
    }
}
