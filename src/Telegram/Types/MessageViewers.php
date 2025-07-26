<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a list of message viewers @viewers List of message viewers
 */
class MessageViewers implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('viewers')]
        private array|null $viewers = null,
    ) {
    }

    public function getViewers(): array|null
    {
        return $this->viewers;
    }

    public function setViewers(array|null $viewers): self
    {
        $this->viewers = $viewers;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'messageViewers',
            'viewers' => $this->getViewers(),
        ];
    }
}
