<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a background. Call searchBackground with the given background name to process the link.
 */
class InternalLinkTypeBackground extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** Name of the background */
        #[SerializedName('background_name')]
        private string $backgroundName,
    ) {
    }

    /**
     * Get Name of the background
     */
    public function getBackgroundName(): string
    {
        return $this->backgroundName;
    }

    /**
     * Set Name of the background
     */
    public function setBackgroundName(string $backgroundName): self
    {
        $this->backgroundName = $backgroundName;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeBackground',
            'background_name' => $this->getBackgroundName(),
        ];
    }
}
