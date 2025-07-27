<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of media previews of a bot @previews List of media previews.
 */
class BotMediaPreviews implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('previews')]
        private array|null $previews = null,
    ) {
    }

    public function getPreviews(): array|null
    {
        return $this->previews;
    }

    public function setPreviews(array|null $previews): self
    {
        $this->previews = $previews;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botMediaPreviews',
            'previews' => $this->getPreviews(),
        ];
    }
}
