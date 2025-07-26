<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about a given collectible item that was purchased at https://fragment.com
 */
class GetCollectibleItemInfo extends CollectibleItemInfo implements \JsonSerializable
{
    public function __construct(
        /** Type of the collectible item. The item must be used by a user and must be visible to the current user */
        #[SerializedName('type')]
        private CollectibleItemType|null $type = null,
    ) {
    }

    /**
     * Get Type of the collectible item. The item must be used by a user and must be visible to the current user
     */
    public function getType(): CollectibleItemType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the collectible item. The item must be used by a user and must be visible to the current user
     */
    public function setType(CollectibleItemType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getCollectibleItemInfo',
            'type' => $this->getType(),
        ];
    }
}
