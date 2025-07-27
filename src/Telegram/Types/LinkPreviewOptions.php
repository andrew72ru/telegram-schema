<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Options to be used for generation of a link preview.
 */
class LinkPreviewOptions implements \JsonSerializable
{
    public function __construct(
        /** True, if link preview must be disabled */
        #[SerializedName('is_disabled')]
        private bool $isDisabled,
        /** URL to use for link preview. If empty, then the first URL found in the message text will be used */
        #[SerializedName('url')]
        private string $url,
        /** True, if shown media preview must be small; ignored in secret chats or if the URL isn't explicitly specified */
        #[SerializedName('force_small_media')]
        private bool $forceSmallMedia,
        /** True, if shown media preview must be large; ignored in secret chats or if the URL isn't explicitly specified */
        #[SerializedName('force_large_media')]
        private bool $forceLargeMedia,
        /** True, if link preview must be shown above message text; otherwise, the link preview will be shown below the message text; ignored in secret chats */
        #[SerializedName('show_above_text')]
        private bool $showAboveText,
    ) {
    }

    /**
     * Get True, if link preview must be disabled.
     */
    public function getIsDisabled(): bool
    {
        return $this->isDisabled;
    }

    /**
     * Set True, if link preview must be disabled.
     */
    public function setIsDisabled(bool $isDisabled): self
    {
        $this->isDisabled = $isDisabled;

        return $this;
    }

    /**
     * Get URL to use for link preview. If empty, then the first URL found in the message text will be used.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set URL to use for link preview. If empty, then the first URL found in the message text will be used.
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get True, if shown media preview must be small; ignored in secret chats or if the URL isn't explicitly specified.
     */
    public function getForceSmallMedia(): bool
    {
        return $this->forceSmallMedia;
    }

    /**
     * Set True, if shown media preview must be small; ignored in secret chats or if the URL isn't explicitly specified.
     */
    public function setForceSmallMedia(bool $forceSmallMedia): self
    {
        $this->forceSmallMedia = $forceSmallMedia;

        return $this;
    }

    /**
     * Get True, if shown media preview must be large; ignored in secret chats or if the URL isn't explicitly specified.
     */
    public function getForceLargeMedia(): bool
    {
        return $this->forceLargeMedia;
    }

    /**
     * Set True, if shown media preview must be large; ignored in secret chats or if the URL isn't explicitly specified.
     */
    public function setForceLargeMedia(bool $forceLargeMedia): self
    {
        $this->forceLargeMedia = $forceLargeMedia;

        return $this;
    }

    /**
     * Get True, if link preview must be shown above message text; otherwise, the link preview will be shown below the message text; ignored in secret chats.
     */
    public function getShowAboveText(): bool
    {
        return $this->showAboveText;
    }

    /**
     * Set True, if link preview must be shown above message text; otherwise, the link preview will be shown below the message text; ignored in secret chats.
     */
    public function setShowAboveText(bool $showAboveText): self
    {
        $this->showAboveText = $showAboveText;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreviewOptions',
            'is_disabled' => $this->getIsDisabled(),
            'url' => $this->getUrl(),
            'force_small_media' => $this->getForceSmallMedia(),
            'force_large_media' => $this->getForceLargeMedia(),
            'show_above_text' => $this->getShowAboveText(),
        ];
    }
}
