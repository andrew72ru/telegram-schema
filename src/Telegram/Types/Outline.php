<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents outline of an image @paths The list of closed vector paths
 */
class Outline implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('paths')]
        private array|null $paths = null,
    ) {
    }

    public function getPaths(): array|null
    {
        return $this->paths;
    }

    public function setPaths(array|null $paths): self
    {
        $this->paths = $paths;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'outline',
            'paths' => $this->getPaths(),
        ];
    }
}
