<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a command supported by a bot @command Text of the bot command @param_description Description of the bot command
 */
class BotCommand implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('command')]
        private string $command,
        /** Represents a command supported by a bot @command Text of the bot command @param_description Description of the bot command */
        #[SerializedName('description')]
        private string $description,
    ) {
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function setCommand(string $command): self
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get Represents a command supported by a bot @command Text of the bot command @param_description Description of the bot command
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Represents a command supported by a bot @command Text of the bot command @param_description Description of the bot command
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'botCommand',
            'command' => $this->getCommand(),
            'description' => $this->getDescription(),
        ];
    }
}
