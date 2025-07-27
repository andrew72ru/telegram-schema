<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Edits information about a custom local language pack in the current localization target. Can be called before authorization @info New information about the custom local language pack.
 */
class EditCustomLanguagePackInfo extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('info')]
        private LanguagePackInfo|null $info = null,
    ) {
    }

    public function getInfo(): LanguagePackInfo|null
    {
        return $this->info;
    }

    public function setInfo(LanguagePackInfo|null $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'editCustomLanguagePackInfo',
            'info' => $this->getInfo(),
        ];
    }
}
