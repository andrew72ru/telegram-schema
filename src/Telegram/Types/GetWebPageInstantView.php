<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Returns an instant view version of a web page if available. This is an offline method if only_local is true. Returns a 404 error if the web page has no instant view page
 */
class GetWebPageInstantView extends WebPageInstantView implements \JsonSerializable
{
    public function __construct(
        /** The web page URL */
        #[SerializedName('url')]
        private string $url,
        /** Pass true to get only locally available information without sending network requests */
        #[SerializedName('only_local')]
        private bool $onlyLocal,
    ) {
    }

    /**
     * Get The web page URL
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set The web page URL
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get Pass true to get only locally available information without sending network requests
     */
    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    /**
     * Set Pass true to get only locally available information without sending network requests
     */
    public function setOnlyLocal(bool $onlyLocal): self
    {
        $this->onlyLocal = $onlyLocal;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'getWebPageInstantView',
            'url' => $this->getUrl(),
            'only_local' => $this->getOnlyLocal(),
        ];
    }
}
