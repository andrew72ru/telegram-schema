<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about an unconfirmed session
 */
class UnconfirmedSession implements \JsonSerializable
{
    public function __construct(
        /** Session identifier */
        #[SerializedName('id')]
        private int $id,
        /** Point in time (Unix timestamp) when the user has logged in */
        #[SerializedName('log_in_date')]
        private int $logInDate,
        /** Model of the device that was used for the session creation, as provided by the application */
        #[SerializedName('device_model')]
        private string $deviceModel,
        /** A human-readable description of the location from which the session was created, based on the IP address */
        #[SerializedName('location')]
        private string $location,
    ) {
    }

    /**
     * Get Session identifier
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Session identifier
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Point in time (Unix timestamp) when the user has logged in
     */
    public function getLogInDate(): int
    {
        return $this->logInDate;
    }

    /**
     * Set Point in time (Unix timestamp) when the user has logged in
     */
    public function setLogInDate(int $logInDate): self
    {
        $this->logInDate = $logInDate;

        return $this;
    }

    /**
     * Get Model of the device that was used for the session creation, as provided by the application
     */
    public function getDeviceModel(): string
    {
        return $this->deviceModel;
    }

    /**
     * Set Model of the device that was used for the session creation, as provided by the application
     */
    public function setDeviceModel(string $deviceModel): self
    {
        $this->deviceModel = $deviceModel;

        return $this;
    }

    /**
     * Get A human-readable description of the location from which the session was created, based on the IP address
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Set A human-readable description of the location from which the session was created, based on the IP address
     */
    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'unconfirmedSession',
            'id' => $this->getId(),
            'log_in_date' => $this->getLogInDate(),
            'device_model' => $this->getDeviceModel(),
            'location' => $this->getLocation(),
        ];
    }
}
