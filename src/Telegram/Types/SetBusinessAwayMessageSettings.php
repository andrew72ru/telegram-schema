<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the business away message settings of the current user. Requires Telegram Business subscription @away_message_settings The new settings for the away message of the business; pass null to disable the away message.
 */
class SetBusinessAwayMessageSettings extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('away_message_settings')]
        private BusinessAwayMessageSettings|null $awayMessageSettings = null,
    ) {
    }

    public function getAwayMessageSettings(): BusinessAwayMessageSettings|null
    {
        return $this->awayMessageSettings;
    }

    public function setAwayMessageSettings(BusinessAwayMessageSettings|null $awayMessageSettings): self
    {
        $this->awayMessageSettings = $awayMessageSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessAwayMessageSettings',
            'away_message_settings' => $this->getAwayMessageSettings(),
        ];
    }
}
