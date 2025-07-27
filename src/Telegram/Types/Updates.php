<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of updates @updates List of updates.
 */
class Updates implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('updates')]
        private array|null $updates = null,
    ) {
    }

    public function getUpdates(): array|null
    {
        return $this->updates;
    }

    public function setUpdates(array|null $updates): self
    {
        $this->updates = $updates;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updates',
            'updates' => $this->getUpdates(),
        ];
    }
}
