<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns available emoji categories @var Type of emoji categories to return; pass null to get default emoji categories.
 */
class GetEmojiCategories extends EmojiCategories implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('type')]
        private EmojiCategoryType|null $type = null,
    ) {
    }

    public function getType(): EmojiCategoryType|null
    {
        return $this->type;
    }

    public function setType(EmojiCategoryType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getEmojiCategories',
            'type' => $this->getType(),
        ];
    }
}
