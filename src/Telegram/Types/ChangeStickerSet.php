<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Installs/uninstalls or activates/archives a sticker set @set_id Identifier of the sticker set @is_installed The new value of is_installed @is_archived The new value of is_archived. A sticker set can't be installed and archived simultaneously.
 */
class ChangeStickerSet extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('set_id')]
        private int $setId,
        #[SerializedName('is_installed')]
        private bool $isInstalled,
        #[SerializedName('is_archived')]
        private bool $isArchived,
    ) {
    }

    public function getSetId(): int
    {
        return $this->setId;
    }

    public function setSetId(int $setId): self
    {
        $this->setId = $setId;

        return $this;
    }

    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    public function setIsInstalled(bool $isInstalled): self
    {
        $this->isInstalled = $isInstalled;

        return $this;
    }

    public function getIsArchived(): bool
    {
        return $this->isArchived;
    }

    public function setIsArchived(bool $isArchived): self
    {
        $this->isArchived = $isArchived;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'changeStickerSet',
            'set_id' => $this->getSetId(),
            'is_installed' => $this->getIsInstalled(),
            'is_archived' => $this->getIsArchived(),
        ];
    }
}
