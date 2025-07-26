<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Reports a video message advertisement to Telegram moderators
 */
class ReportVideoMessageAdvertisement extends ReportSponsoredResult implements \JsonSerializable
{
    public function __construct(
        /** Unique identifier of the advertisement */
        #[SerializedName('advertisement_unique_id')]
        private int $advertisementUniqueId,
        /** Option identifier chosen by the user; leave empty for the initial request */
        #[SerializedName('option_id')]
        private string $optionId,
    ) {
    }

    /**
     * Get Unique identifier of the advertisement
     */
    public function getAdvertisementUniqueId(): int
    {
        return $this->advertisementUniqueId;
    }

    /**
     * Set Unique identifier of the advertisement
     */
    public function setAdvertisementUniqueId(int $advertisementUniqueId): self
    {
        $this->advertisementUniqueId = $advertisementUniqueId;

        return $this;
    }

    /**
     * Get Option identifier chosen by the user; leave empty for the initial request
     */
    public function getOptionId(): string
    {
        return $this->optionId;
    }

    /**
     * Set Option identifier chosen by the user; leave empty for the initial request
     */
    public function setOptionId(string $optionId): self
    {
        $this->optionId = $optionId;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportVideoMessageAdvertisement',
            'advertisement_unique_id' => $this->getAdvertisementUniqueId(),
            'option_id' => $this->getOptionId(),
        ];
    }
}
