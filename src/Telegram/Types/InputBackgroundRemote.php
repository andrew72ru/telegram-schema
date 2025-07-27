<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A background from the server @background_id The background identifier.
 */
class InputBackgroundRemote extends InputBackground implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('background_id')]
        private int $backgroundId,
    ) {
    }

    public function getBackgroundId(): int
    {
        return $this->backgroundId;
    }

    public function setBackgroundId(int $backgroundId): self
    {
        $this->backgroundId = $backgroundId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'inputBackgroundRemote',
            'background_id' => $this->getBackgroundId(),
        ];
    }
}
