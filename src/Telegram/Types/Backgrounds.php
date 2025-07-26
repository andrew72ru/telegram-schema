<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of backgrounds @backgrounds A list of backgrounds
 */
class Backgrounds implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('backgrounds')]
        private array|null $backgrounds = null,
    ) {
    }

    public function getBackgrounds(): array|null
    {
        return $this->backgrounds;
    }

    public function setBackgrounds(array|null $backgrounds): self
    {
        $this->backgrounds = $backgrounds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'backgrounds',
            'backgrounds' => $this->getBackgrounds(),
        ];
    }
}
