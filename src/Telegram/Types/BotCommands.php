<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of bot commands @bot_user_id Bot's user identifier @commands List of bot commands
 */
class BotCommands implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bot_user_id')]
        private int $botUserId,
        #[SerializedName('commands')]
        private array|null $commands = null,
    ) {
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function setBotUserId(int $botUserId): self
    {
        $this->botUserId = $botUserId;

        return $this;
    }

    public function getCommands(): array|null
    {
        return $this->commands;
    }

    public function setCommands(array|null $commands): self
    {
        $this->commands = $commands;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botCommands',
            'bot_user_id' => $this->getBotUserId(),
            'commands' => $this->getCommands(),
        ];
    }
}
