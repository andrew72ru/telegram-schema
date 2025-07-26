<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains examples of possible upgraded gifts for the given regular gift
 */
class GiftUpgradePreview implements \JsonSerializable
{
    public function __construct(
        /** Examples of possible models that can be chosen for the gift after upgrade */
        #[SerializedName('models')]
        private array|null $models = null,
        /** Examples of possible symbols that can be chosen for the gift after upgrade */
        #[SerializedName('symbols')]
        private array|null $symbols = null,
        /** Examples of possible backdrops that can be chosen for the gift after upgrade */
        #[SerializedName('backdrops')]
        private array|null $backdrops = null,
    ) {
    }

    /**
     * Get Examples of possible models that can be chosen for the gift after upgrade
     */
    public function getModels(): array|null
    {
        return $this->models;
    }

    /**
     * Set Examples of possible models that can be chosen for the gift after upgrade
     */
    public function setModels(array|null $models): self
    {
        $this->models = $models;

        return $this;
    }

    /**
     * Get Examples of possible symbols that can be chosen for the gift after upgrade
     */
    public function getSymbols(): array|null
    {
        return $this->symbols;
    }

    /**
     * Set Examples of possible symbols that can be chosen for the gift after upgrade
     */
    public function setSymbols(array|null $symbols): self
    {
        $this->symbols = $symbols;

        return $this;
    }

    /**
     * Get Examples of possible backdrops that can be chosen for the gift after upgrade
     */
    public function getBackdrops(): array|null
    {
        return $this->backdrops;
    }

    /**
     * Set Examples of possible backdrops that can be chosen for the gift after upgrade
     */
    public function setBackdrops(array|null $backdrops): self
    {
        $this->backdrops = $backdrops;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'giftUpgradePreview',
            'models' => $this->getModels(),
            'symbols' => $this->getSymbols(),
            'backdrops' => $this->getBackdrops(),
        ];
    }
}
