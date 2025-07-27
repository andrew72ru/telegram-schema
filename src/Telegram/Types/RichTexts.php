<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A concatenation of rich texts @texts Texts.
 */
class RichTexts extends RichText implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('texts')]
        private array|null $texts = null,
    ) {
    }

    public function getTexts(): array|null
    {
        return $this->texts;
    }

    public function setTexts(array|null $texts): self
    {
        $this->texts = $texts;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'richTexts',
            'texts' => $this->getTexts(),
        ];
    }
}
