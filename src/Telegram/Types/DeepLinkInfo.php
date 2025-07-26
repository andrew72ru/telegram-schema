<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a tg: deep link @text Text to be shown to the user @need_update_application True, if the user must be asked to update the application
 */
class DeepLinkInfo implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        #[SerializedName('need_update_application')]
        private bool $needUpdateApplication,
    ) {
    }

    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getNeedUpdateApplication(): bool
    {
        return $this->needUpdateApplication;
    }

    public function setNeedUpdateApplication(bool $needUpdateApplication): self
    {
        $this->needUpdateApplication = $needUpdateApplication;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'deepLinkInfo',
            'text' => $this->getText(),
            'need_update_application' => $this->getNeedUpdateApplication(),
        ];
    }
}
