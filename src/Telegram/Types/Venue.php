<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a venue.
 */
class Venue implements \JsonSerializable
{
    public function __construct(
        /** Venue location; as defined by the sender */
        #[SerializedName('location')]
        private Location|null $location = null,
        /** Venue name; as defined by the sender */
        #[SerializedName('title')]
        private string $title,
        /** Venue address; as defined by the sender */
        #[SerializedName('address')]
        private string $address,
        /** Provider of the venue database; as defined by the sender. Currently, only "foursquare" and "gplaces" (Google Places) need to be supported */
        #[SerializedName('provider')]
        private string $provider,
        /** Identifier of the venue in the provider database; as defined by the sender */
        #[SerializedName('id')]
        private string $id,
        /** Type of the venue in the provider database; as defined by the sender */
        #[SerializedName('type')]
        private string $type,
    ) {
    }

    /**
     * Get Venue location; as defined by the sender.
     */
    public function getLocation(): Location|null
    {
        return $this->location;
    }

    /**
     * Set Venue location; as defined by the sender.
     */
    public function setLocation(Location|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get Venue name; as defined by the sender.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Venue name; as defined by the sender.
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Venue address; as defined by the sender.
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * Set Venue address; as defined by the sender.
     */
    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get Provider of the venue database; as defined by the sender. Currently, only "foursquare" and "gplaces" (Google Places) need to be supported.
     */
    public function getProvider(): string
    {
        return $this->provider;
    }

    /**
     * Set Provider of the venue database; as defined by the sender. Currently, only "foursquare" and "gplaces" (Google Places) need to be supported.
     */
    public function setProvider(string $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get Identifier of the venue in the provider database; as defined by the sender.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Identifier of the venue in the provider database; as defined by the sender.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Type of the venue in the provider database; as defined by the sender.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set Type of the venue in the provider database; as defined by the sender.
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'venue',
            'location' => $this->getLocation(),
            'title' => $this->getTitle(),
            'address' => $this->getAddress(),
            'provider' => $this->getProvider(),
            'id' => $this->getId(),
            'type' => $this->getType(),
        ];
    }
}
