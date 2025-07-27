<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns information about the current localization target. This is an offline method if only_local is true. Can be called before authorization @only_local Pass true to get only locally available information without sending network requests.
 */
class GetLocalizationTargetInfo extends LocalizationTargetInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('only_local')]
        private bool $onlyLocal,
    ) {
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    public function setOnlyLocal(bool $onlyLocal): self
    {
        $this->onlyLocal = $onlyLocal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getLocalizationTargetInfo',
            'only_local' => $this->getOnlyLocal(),
        ];
    }
}
