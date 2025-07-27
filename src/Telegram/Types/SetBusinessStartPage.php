<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the business start page of the current user. Requires Telegram Business subscription @start_page The new start page of the business; pass null to remove custom start page.
 */
class SetBusinessStartPage extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('start_page')]
        private InputBusinessStartPage|null $startPage = null,
    ) {
    }

    public function getStartPage(): InputBusinessStartPage|null
    {
        return $this->startPage;
    }

    public function setStartPage(InputBusinessStartPage|null $startPage): self
    {
        $this->startPage = $startPage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessStartPage',
            'start_page' => $this->getStartPage(),
        ];
    }
}
