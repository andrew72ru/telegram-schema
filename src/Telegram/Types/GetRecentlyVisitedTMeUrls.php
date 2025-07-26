<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns t.me URLs recently visited by a newly registered user @referrer Google Play referrer to identify the user
 */
class GetRecentlyVisitedTMeUrls extends TMeUrls implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('referrer')]
        private string $referrer,
    ) {
    }

    public function getReferrer(): string
    {
        return $this->referrer;
    }

    public function setReferrer(string $referrer): self
    {
        $this->referrer = $referrer;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getRecentlyVisitedTMeUrls',
            'referrer' => $this->getReferrer(),
        ];
    }
}
