<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Changes the business greeting message settings of the current user. Requires Telegram Business subscription @greeting_message_settings The new settings for the greeting message of the business; pass null to disable the greeting message.
 */
class SetBusinessGreetingMessageSettings extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('greeting_message_settings')]
        private BusinessGreetingMessageSettings|null $greetingMessageSettings = null,
    ) {
    }

    public function getGreetingMessageSettings(): BusinessGreetingMessageSettings|null
    {
        return $this->greetingMessageSettings;
    }

    public function setGreetingMessageSettings(BusinessGreetingMessageSettings|null $greetingMessageSettings): self
    {
        $this->greetingMessageSettings = $greetingMessageSettings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessGreetingMessageSettings',
            'greeting_message_settings' => $this->getGreetingMessageSettings(),
        ];
    }
}
