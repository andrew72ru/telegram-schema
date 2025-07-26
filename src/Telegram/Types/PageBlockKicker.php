<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A kicker @kicker Kicker
 */
class PageBlockKicker extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('kicker')]
        private RichText|null $kicker = null,
    ) {
    }

    public function getKicker(): RichText|null
    {
        return $this->kicker;
    }

    public function setKicker(RichText|null $kicker): self
    {
        $this->kicker = $kicker;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockKicker',
            'kicker' => $this->getKicker(),
        ];
    }
}
