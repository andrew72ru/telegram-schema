<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Clears the list of recently searched for hashtags or cashtags @clear_cashtags Pass true to clear the list of recently searched for cashtags; otherwise, the list of recently searched for hashtags will be cleared.
 */
class ClearSearchedForTags extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('clear_cashtags')]
        private bool $clearCashtags,
    ) {
    }

    public function getClearCashtags(): bool
    {
        return $this->clearCashtags;
    }

    public function setClearCashtags(bool $clearCashtags): self
    {
        $this->clearCashtags = $clearCashtags;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'clearSearchedForTags',
            'clear_cashtags' => $this->getClearCashtags(),
        ];
    }
}
