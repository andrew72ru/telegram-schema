<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of text entities @entities List of text entities.
 */
class TextEntities implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('entities')]
        private array|null $entities = null,
    ) {
    }

    public function getEntities(): array|null
    {
        return $this->entities;
    }

    public function setEntities(array|null $entities): self
    {
        $this->entities = $entities;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'textEntities',
            'entities' => $this->getEntities(),
        ];
    }
}
