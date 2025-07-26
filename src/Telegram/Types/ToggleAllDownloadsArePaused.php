<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes pause state of all files in the file download list @are_paused Pass true to pause all downloads; pass false to unpause them
 */
class ToggleAllDownloadsArePaused extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('are_paused')]
        private bool $arePaused,
    ) {
    }

    public function getArePaused(): bool
    {
        return $this->arePaused;
    }

    public function setArePaused(bool $arePaused): self
    {
        $this->arePaused = $arePaused;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'toggleAllDownloadsArePaused',
            'are_paused' => $this->getArePaused(),
        ];
    }
}
