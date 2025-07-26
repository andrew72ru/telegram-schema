<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of story areas to be added @areas List of input story areas. Currently, a story can have
 */
class InputStoryAreas implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('areas')]
        private array|null $areas = null,
    ) {
    }

    public function getAreas(): array|null
    {
        return $this->areas;
    }

    public function setAreas(array|null $areas): self
    {
        $this->areas = $areas;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputStoryAreas',
            'areas' => $this->getAreas(),
        ];
    }
}
