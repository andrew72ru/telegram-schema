<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The list of bots added to attachment or side menu has changed @bots The new list of bots. The bots must not be shown on scheduled messages screen
 */
class UpdateAttachmentMenuBots extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('bots')]
        private array|null $bots = null,
    ) {
    }

    public function getBots(): array|null
    {
        return $this->bots;
    }

    public function setBots(array|null $bots): self
    {
        $this->bots = $bots;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateAttachmentMenuBots',
            'bots' => $this->getBots(),
        ];
    }
}
