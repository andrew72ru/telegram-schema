<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The link must be opened in an Instant View. Call getWebPageInstantView with the given URL to process the link.
 */
class InternalLinkTypeInstantView extends InternalLinkType implements \JsonSerializable
{
    public function __construct(
        /** URL to be passed to getWebPageInstantView */
        #[SerializedName('url')]
        private string $url,
        /** An URL to open if getWebPageInstantView fails */
        #[SerializedName('fallback_url')]
        private string $fallbackUrl,
    ) {
    }

    /**
     * Get URL to be passed to getWebPageInstantView.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL to be passed to getWebPageInstantView.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get An URL to open if getWebPageInstantView fails.
     */
    public function getFallbackUrl(): string
    {
        return $this->fallbackUrl;
    }

    /**
     * Set An URL to open if getWebPageInstantView fails.
     */
    public function setFallbackUrl(string $fallbackUrl): self
    {
        $this->fallbackUrl = $fallbackUrl;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'internalLinkTypeInstantView',
            'url' => $this->getUrl(),
            'fallback_url' => $this->getFallbackUrl(),
        ];
    }
}
