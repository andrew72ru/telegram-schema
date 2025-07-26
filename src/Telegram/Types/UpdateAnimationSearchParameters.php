<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The parameters of animation search through getOption("animation_search_bot_username") bot has changed @provider Name of the animation search provider @emojis The new list of emojis suggested for searching
 */
class UpdateAnimationSearchParameters extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('provider')]
        private string $provider,
        #[SerializedName('emojis')]
        private array|null $emojis = null,
    ) {
    }

    public function getProvider(): string
    {
        return $this->provider;
    }

    public function setProvider(string $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    public function getEmojis(): array|null
    {
        return $this->emojis;
    }

    public function setEmojis(array|null $emojis): self
    {
        $this->emojis = $emojis;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateAnimationSearchParameters',
            'provider' => $this->getProvider(),
            'emojis' => $this->getEmojis(),
        ];
    }
}
