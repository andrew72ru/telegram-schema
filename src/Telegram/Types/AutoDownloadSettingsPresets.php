<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains auto-download settings presets for the current user
 */
class AutoDownloadSettingsPresets implements \JsonSerializable
{
    public function __construct(
        /** Preset with lowest settings; expected to be used by default when roaming */
        #[SerializedName('low')]
        private AutoDownloadSettings|null $low = null,
        /** Preset with medium settings; expected to be used by default when using mobile data */
        #[SerializedName('medium')]
        private AutoDownloadSettings|null $medium = null,
        /** Preset with highest settings; expected to be used by default when connected on Wi-Fi */
        #[SerializedName('high')]
        private AutoDownloadSettings|null $high = null,
    ) {
    }

    /**
     * Get Preset with lowest settings; expected to be used by default when roaming
     */
    public function getLow(): AutoDownloadSettings|null
    {
        return $this->low;
    }

    /**
     * Set Preset with lowest settings; expected to be used by default when roaming
     */
    public function setLow(AutoDownloadSettings|null $low): self
    {
        $this->low = $low;

        return $this;
    }

    /**
     * Get Preset with medium settings; expected to be used by default when using mobile data
     */
    public function getMedium(): AutoDownloadSettings|null
    {
        return $this->medium;
    }

    /**
     * Set Preset with medium settings; expected to be used by default when using mobile data
     */
    public function setMedium(AutoDownloadSettings|null $medium): self
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * Get Preset with highest settings; expected to be used by default when connected on Wi-Fi
     */
    public function getHigh(): AutoDownloadSettings|null
    {
        return $this->high;
    }

    /**
     * Set Preset with highest settings; expected to be used by default when connected on Wi-Fi
     */
    public function setHigh(AutoDownloadSettings|null $high): self
    {
        $this->high = $high;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'autoDownloadSettingsPresets',
            'low' => $this->getLow(),
            'medium' => $this->getMedium(),
            'high' => $this->getHigh(),
        ];
    }
}
