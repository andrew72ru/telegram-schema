<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Represents a closed vector path. The path begins at the end point of the last command. The coordinate system origin is in the upper-left corner @commands List of vector path commands
 */
class ClosedVectorPath implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('commands')]
        private array|null $commands = null,
    ) {
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
            '@type' => 'closedVectorPath',
            'commands' => $this->getCommands(),
        ];
    }
}
