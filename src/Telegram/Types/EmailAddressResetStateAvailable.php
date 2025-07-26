<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Email address can be reset after the given period. Call resetAuthenticationEmailAddress to reset it and allow the user to authorize with a code sent to the user's phone number
 */
class EmailAddressResetStateAvailable extends EmailAddressResetState implements \JsonSerializable
{
    public function __construct(
        /** Time required to wait before the email address can be reset; 0 if the user is subscribed to Telegram Premium */
        #[SerializedName('wait_period')]
        private int $waitPeriod,
    ) {
    }

    /**
     * Get Time required to wait before the email address can be reset; 0 if the user is subscribed to Telegram Premium
     */
    public function getWaitPeriod(): int
    {
        return $this->waitPeriod;
    }

    /**
     * Set Time required to wait before the email address can be reset; 0 if the user is subscribed to Telegram Premium
     */
    public function setWaitPeriod(int $waitPeriod): self
    {
        $this->waitPeriod = $waitPeriod;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'emailAddressResetStateAvailable',
            'wait_period' => $this->getWaitPeriod(),
        ];
    }
}
