<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about countries @countries The list of countries
 */
class Countries implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('countries')]
        private array|null $countries = null,
    ) {
    }

    public function getCountries(): array|null
    {
        return $this->countries;
    }

    public function setCountries(array|null $countries): self
    {
        $this->countries = $countries;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'countries',
            'countries' => $this->getCountries(),
        ];
    }
}
