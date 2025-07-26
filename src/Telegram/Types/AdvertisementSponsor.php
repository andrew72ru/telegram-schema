<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Information about the sponsor of an advertisement
 */
class AdvertisementSponsor implements \JsonSerializable
{
    public function __construct(
        /** URL of the sponsor to be opened when the advertisement is clicked */
        #[SerializedName('url')]
        private string $url,
        /** Photo of the sponsor; may be null if must not be shown */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
        /** Additional optional information about the sponsor to be shown along with the advertisement */
        #[SerializedName('info')]
        private string $info,
    ) {
    }

    /**
     * Get URL of the sponsor to be opened when the advertisement is clicked
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL of the sponsor to be opened when the advertisement is clicked
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Photo of the sponsor; may be null if must not be shown
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Photo of the sponsor; may be null if must not be shown
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get Additional optional information about the sponsor to be shown along with the advertisement
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * Set Additional optional information about the sponsor to be shown along with the advertisement
     */
    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'advertisementSponsor',
            'url' => $this->getUrl(),
            'photo' => $this->getPhoto(),
            'info' => $this->getInfo(),
        ];
    }
}
