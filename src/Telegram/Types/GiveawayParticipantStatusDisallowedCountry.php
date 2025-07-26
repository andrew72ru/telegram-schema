<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user can't participate in the giveaway, because they phone number is from a disallowed country @user_country_code A two-letter ISO 3166-1 alpha-2 country code of the user's country
 */
class GiveawayParticipantStatusDisallowedCountry extends GiveawayParticipantStatus implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('user_country_code')]
        private string $userCountryCode,
    ) {
    }

    public function getUserCountryCode(): string
    {
        return $this->userCountryCode;
    }

    public function setUserCountryCode(string $userCountryCode): self
    {
        $this->userCountryCode = $userCountryCode;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giveawayParticipantStatusDisallowedCountry',
            'user_country_code' => $this->getUserCountryCode(),
        ];
    }
}
