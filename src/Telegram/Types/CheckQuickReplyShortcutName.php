<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Checks validness of a name for a quick reply shortcut. Can be called synchronously @name The name of the shortcut; 1-32 characters.
 */
class CheckQuickReplyShortcutName extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('name')]
        private string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'checkQuickReplyShortcutName',
            'name' => $this->getName(),
        ];
    }
}
