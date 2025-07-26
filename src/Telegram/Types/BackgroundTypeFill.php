<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A filled background @fill The background fill
 */
class BackgroundTypeFill extends BackgroundType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('fill')]
        private BackgroundFill|null $fill = null,
    ) {
    }

    public function getFill(): BackgroundFill|null
    {
        return $this->fill;
    }

    public function setFill(BackgroundFill|null $fill): self
    {
        $this->fill = $fill;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'backgroundTypeFill',
            'fill' => $this->getFill(),
        ];
    }
}
