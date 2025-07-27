<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link is a link to a cloud theme. TDLib has no theme support yet @documents The list of files with theme description @settings Settings for the cloud theme; may be null if unknown.
 */
class LinkPreviewTypeTheme extends LinkPreviewType implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('documents')]
        private array|null $documents = null,
        #[SerializedName('settings')]
        private ThemeSettings|null $settings = null,
    ) {
    }

    public function getDocuments(): array|null
    {
        return $this->documents;
    }

    public function setDocuments(array|null $documents): self
    {
        $this->documents = $documents;

        return $this;
    }

    public function getSettings(): ThemeSettings|null
    {
        return $this->settings;
    }

    public function setSettings(ThemeSettings|null $settings): self
    {
        $this->settings = $settings;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewTypeTheme',
            'documents' => $this->getDocuments(),
            'settings' => $this->getSettings(),
        ];
    }
}
