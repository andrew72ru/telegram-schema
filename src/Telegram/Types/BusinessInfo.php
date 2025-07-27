<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a Telegram Business account.
 */
class BusinessInfo implements \JsonSerializable
{
    public function __construct(
        /** Location of the business; may be null if none */
        #[SerializedName('location')]
        private BusinessLocation|null $location = null,
        /** Opening hours of the business; may be null if none. The hours are guaranteed to be valid and has already been split by week days */
        #[SerializedName('opening_hours')]
        private BusinessOpeningHours|null $openingHours = null,
        /** Opening hours of the business in the local time; may be null if none. The hours are guaranteed to be valid and has already been split by week days. */
        #[SerializedName('local_opening_hours')]
        private BusinessOpeningHours|null $localOpeningHours = null,
        /** Time left before the business will open the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes */
        #[SerializedName('next_open_in')]
        private int $nextOpenIn,
        /** Time left before the business will close the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes */
        #[SerializedName('next_close_in')]
        private int $nextCloseIn,
        /** The greeting message; may be null if none or the Business account is not of the current user */
        #[SerializedName('greeting_message_settings')]
        private BusinessGreetingMessageSettings|null $greetingMessageSettings = null,
        /** The away message; may be null if none or the Business account is not of the current user */
        #[SerializedName('away_message_settings')]
        private BusinessAwayMessageSettings|null $awayMessageSettings = null,
        /** Information about start page of the account; may be null if none */
        #[SerializedName('start_page')]
        private BusinessStartPage|null $startPage = null,
    ) {
    }

    /**
     * Get Location of the business; may be null if none.
     */
    public function getLocation(): BusinessLocation|null
    {
        return $this->location;
    }

    /**
     * Set Location of the business; may be null if none.
     */
    public function setLocation(BusinessLocation|null $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get Opening hours of the business; may be null if none. The hours are guaranteed to be valid and has already been split by week days.
     */
    public function getOpeningHours(): BusinessOpeningHours|null
    {
        return $this->openingHours;
    }

    /**
     * Set Opening hours of the business; may be null if none. The hours are guaranteed to be valid and has already been split by week days.
     */
    public function setOpeningHours(BusinessOpeningHours|null $openingHours): self
    {
        $this->openingHours = $openingHours;

        return $this;
    }

    /**
     * Get Opening hours of the business in the local time; may be null if none. The hours are guaranteed to be valid and has already been split by week days..
     */
    public function getLocalOpeningHours(): BusinessOpeningHours|null
    {
        return $this->localOpeningHours;
    }

    /**
     * Set Opening hours of the business in the local time; may be null if none. The hours are guaranteed to be valid and has already been split by week days..
     */
    public function setLocalOpeningHours(BusinessOpeningHours|null $localOpeningHours): self
    {
        $this->localOpeningHours = $localOpeningHours;

        return $this;
    }

    /**
     * Get Time left before the business will open the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes.
     */
    public function getNextOpenIn(): int
    {
        return $this->nextOpenIn;
    }

    /**
     * Set Time left before the business will open the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes.
     */
    public function setNextOpenIn(int $nextOpenIn): self
    {
        $this->nextOpenIn = $nextOpenIn;

        return $this;
    }

    /**
     * Get Time left before the business will close the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes.
     */
    public function getNextCloseIn(): int
    {
        return $this->nextCloseIn;
    }

    /**
     * Set Time left before the business will close the next time, in seconds; 0 if unknown. An updateUserFullInfo update is not triggered when value of this field changes.
     */
    public function setNextCloseIn(int $nextCloseIn): self
    {
        $this->nextCloseIn = $nextCloseIn;

        return $this;
    }

    /**
     * Get The greeting message; may be null if none or the Business account is not of the current user.
     */
    public function getGreetingMessageSettings(): BusinessGreetingMessageSettings|null
    {
        return $this->greetingMessageSettings;
    }

    /**
     * Set The greeting message; may be null if none or the Business account is not of the current user.
     */
    public function setGreetingMessageSettings(BusinessGreetingMessageSettings|null $greetingMessageSettings): self
    {
        $this->greetingMessageSettings = $greetingMessageSettings;

        return $this;
    }

    /**
     * Get The away message; may be null if none or the Business account is not of the current user.
     */
    public function getAwayMessageSettings(): BusinessAwayMessageSettings|null
    {
        return $this->awayMessageSettings;
    }

    /**
     * Set The away message; may be null if none or the Business account is not of the current user.
     */
    public function setAwayMessageSettings(BusinessAwayMessageSettings|null $awayMessageSettings): self
    {
        $this->awayMessageSettings = $awayMessageSettings;

        return $this;
    }

    /**
     * Get Information about start page of the account; may be null if none.
     */
    public function getStartPage(): BusinessStartPage|null
    {
        return $this->startPage;
    }

    /**
     * Set Information about start page of the account; may be null if none.
     */
    public function setStartPage(BusinessStartPage|null $startPage): self
    {
        $this->startPage = $startPage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessInfo',
            'location' => $this->getLocation(),
            'opening_hours' => $this->getOpeningHours(),
            'local_opening_hours' => $this->getLocalOpeningHours(),
            'next_open_in' => $this->getNextOpenIn(),
            'next_close_in' => $this->getNextCloseIn(),
            'greeting_message_settings' => $this->getGreetingMessageSettings(),
            'away_message_settings' => $this->getAwayMessageSettings(),
            'start_page' => $this->getStartPage(),
        ];
    }
}
