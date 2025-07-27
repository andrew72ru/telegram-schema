<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of supported accent colors has changed.
 */
class UpdateAccentColors extends Update implements \JsonSerializable
{
    public function __construct(
        /** Information about supported colors; colors with identifiers 0 (red), 1 (orange), 2 (purple/violet), 3 (green), 4 (cyan), 5 (blue), 6 (pink) must always be supported */
        #[SerializedName('colors')]
        private array|null $colors = null,
        /** The list of accent color identifiers, which can be set through setAccentColor and setChatAccentColor. The colors must be shown in the specified order */
        #[SerializedName('available_accent_color_ids')]
        private array|null $availableAccentColorIds = null,
    ) {
    }

    /**
     * Get Information about supported colors; colors with identifiers 0 (red), 1 (orange), 2 (purple/violet), 3 (green), 4 (cyan), 5 (blue), 6 (pink) must always be supported.
     */
    public function getColors(): array|null
    {
        return $this->colors;
    }

    /**
     * Set Information about supported colors; colors with identifiers 0 (red), 1 (orange), 2 (purple/violet), 3 (green), 4 (cyan), 5 (blue), 6 (pink) must always be supported.
     */
    public function setColors(array|null $colors): self
    {
        $this->colors = $colors;

        return $this;
    }

    /**
     * Get The list of accent color identifiers, which can be set through setAccentColor and setChatAccentColor. The colors must be shown in the specified order.
     */
    public function getAvailableAccentColorIds(): array|null
    {
        return $this->availableAccentColorIds;
    }

    /**
     * Set The list of accent color identifiers, which can be set through setAccentColor and setChatAccentColor. The colors must be shown in the specified order.
     */
    public function setAvailableAccentColorIds(array|null $availableAccentColorIds): self
    {
        $this->availableAccentColorIds = $availableAccentColorIds;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateAccentColors',
            'colors' => $this->getColors(),
            'available_accent_color_ids' => $this->getAvailableAccentColorIds(),
        ];
    }
}
