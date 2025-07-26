<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Adds or changes business bot that is connected to the current user account @bot Connection settings for the bot
 */
class SetBusinessConnectedBot extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bot')]
        private BusinessConnectedBot|null $bot = null,
    ) {
    }

    public function getBot(): BusinessConnectedBot|null
    {
        return $this->bot;
    }

    public function setBot(BusinessConnectedBot|null $bot): self
    {
        $this->bot = $bot;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'setBusinessConnectedBot',
            'bot' => $this->getBot(),
        ];
    }
}
