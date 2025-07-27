<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a time zone.
 */
class TimeZone implements \JsonSerializable
{
    public function __construct(
        /** Unique time zone identifier */
        #[SerializedName('id')]
        private string $id,
        /** Time zone name */
        #[SerializedName('name')]
        private string $name,
        /** Current UTC time offset for the time zone */
        #[SerializedName('utc_time_offset')]
        private int $utcTimeOffset,
    ) {
    }

    /**
     * Get Unique time zone identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Unique time zone identifier.
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Time zone name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Time zone name.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Current UTC time offset for the time zone.
     */
    public function getUtcTimeOffset(): int
    {
        return $this->utcTimeOffset;
    }

    /**
     * Set Current UTC time offset for the time zone.
     */
    public function setUtcTimeOffset(int $utcTimeOffset): self
    {
        $this->utcTimeOffset = $utcTimeOffset;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'timeZone',
            'id' => $this->getId(),
            'name' => $this->getName(),
            'utc_time_offset' => $this->getUtcTimeOffset(),
        ];
    }
}
