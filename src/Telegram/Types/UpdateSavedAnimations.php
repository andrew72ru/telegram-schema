<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of saved animations was updated @animation_ids The new list of file identifiers of saved animations
 */
class UpdateSavedAnimations extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('animation_ids')]
        private array|null $animationIds = null,
    ) {
    }

    public function getAnimationIds(): array|null
    {
        return $this->animationIds;
    }

    public function setAnimationIds(array|null $animationIds): self
    {
        $this->animationIds = $animationIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateSavedAnimations',
            'animation_ids' => $this->getAnimationIds(),
        ];
    }
}
