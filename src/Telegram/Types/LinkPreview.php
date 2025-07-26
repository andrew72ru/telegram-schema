<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes a link preview
 */
class LinkPreview implements \JsonSerializable
{
    public function __construct(
        /** Original URL of the link */
        #[SerializedName('url')]
        private string $url,
        /** URL to display */
        #[SerializedName('display_url')]
        private string $displayUrl,
        /** Short name of the site (e.g., Google Docs, App Store) */
        #[SerializedName('site_name')]
        private string $siteName,
        /** Title of the content */
        #[SerializedName('title')]
        private string $title,
        /** Describes a link preview */
        #[SerializedName('description')]
        private FormattedText|null $description = null,
        /** Author of the content */
        #[SerializedName('author')]
        private string $author,
        /** Type of the link preview */
        #[SerializedName('type')]
        private LinkPreviewType|null $type = null,
        /** True, if size of media in the preview can be changed */
        #[SerializedName('has_large_media')]
        private bool $hasLargeMedia,
        /** True, if large media preview must be shown; otherwise, the media preview must be shown small and only the first frame must be shown for videos */
        #[SerializedName('show_large_media')]
        private bool $showLargeMedia,
        /** True, if media must be shown above link preview description; otherwise, the media must be shown below the description */
        #[SerializedName('show_media_above_description')]
        private bool $showMediaAboveDescription,
        /** True, if there is no need to show an ordinary open URL confirmation, when opening the URL from the preview, because the URL is shown in the message text in clear */
        #[SerializedName('skip_confirmation')]
        private bool $skipConfirmation,
        /** True, if the link preview must be shown above message text; otherwise, the link preview must be shown below the message text */
        #[SerializedName('show_above_text')]
        private bool $showAboveText,
        /** Version of instant view (currently, can be 1 or 2) for the web page; 0 if none */
        #[SerializedName('instant_view_version')]
        private int $instantViewVersion,
    ) {
    }

    /**
     * Get Original URL of the link
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set Original URL of the link
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get URL to display
     */
    public function getDisplayUrl(): string
    {
        return $this->displayUrl;
    }

    /**
     * Set URL to display
     */
    public function setDisplayUrl(string $displayUrl): self
    {
        $this->displayUrl = $displayUrl;

        return $this;
    }

    /**
     * Get Short name of the site (e.g., Google Docs, App Store)
     */
    public function getSiteName(): string
    {
        return $this->siteName;
    }

    /**
     * Set Short name of the site (e.g., Google Docs, App Store)
     */
    public function setSiteName(string $siteName): self
    {
        $this->siteName = $siteName;

        return $this;
    }

    /**
     * Get Title of the content
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Title of the content
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Describes a link preview
     */
    public function getDescription(): FormattedText|null
    {
        return $this->description;
    }

    /**
     * Set Describes a link preview
     */
    public function setDescription(FormattedText|null $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Author of the content
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set Author of the content
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get Type of the link preview
     */
    public function getType(): LinkPreviewType|null
    {
        return $this->type;
    }

    /**
     * Set Type of the link preview
     */
    public function setType(LinkPreviewType|null $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get True, if size of media in the preview can be changed
     */
    public function getHasLargeMedia(): bool
    {
        return $this->hasLargeMedia;
    }

    /**
     * Set True, if size of media in the preview can be changed
     */
    public function setHasLargeMedia(bool $hasLargeMedia): self
    {
        $this->hasLargeMedia = $hasLargeMedia;

        return $this;
    }

    /**
     * Get True, if large media preview must be shown; otherwise, the media preview must be shown small and only the first frame must be shown for videos
     */
    public function getShowLargeMedia(): bool
    {
        return $this->showLargeMedia;
    }

    /**
     * Set True, if large media preview must be shown; otherwise, the media preview must be shown small and only the first frame must be shown for videos
     */
    public function setShowLargeMedia(bool $showLargeMedia): self
    {
        $this->showLargeMedia = $showLargeMedia;

        return $this;
    }

    /**
     * Get True, if media must be shown above link preview description; otherwise, the media must be shown below the description
     */
    public function getShowMediaAboveDescription(): bool
    {
        return $this->showMediaAboveDescription;
    }

    /**
     * Set True, if media must be shown above link preview description; otherwise, the media must be shown below the description
     */
    public function setShowMediaAboveDescription(bool $showMediaAboveDescription): self
    {
        $this->showMediaAboveDescription = $showMediaAboveDescription;

        return $this;
    }

    /**
     * Get True, if there is no need to show an ordinary open URL confirmation, when opening the URL from the preview, because the URL is shown in the message text in clear
     */
    public function getSkipConfirmation(): bool
    {
        return $this->skipConfirmation;
    }

    /**
     * Set True, if there is no need to show an ordinary open URL confirmation, when opening the URL from the preview, because the URL is shown in the message text in clear
     */
    public function setSkipConfirmation(bool $skipConfirmation): self
    {
        $this->skipConfirmation = $skipConfirmation;

        return $this;
    }

    /**
     * Get True, if the link preview must be shown above message text; otherwise, the link preview must be shown below the message text
     */
    public function getShowAboveText(): bool
    {
        return $this->showAboveText;
    }

    /**
     * Set True, if the link preview must be shown above message text; otherwise, the link preview must be shown below the message text
     */
    public function setShowAboveText(bool $showAboveText): self
    {
        $this->showAboveText = $showAboveText;

        return $this;
    }

    /**
     * Get Version of instant view (currently, can be 1 or 2) for the web page; 0 if none
     */
    public function getInstantViewVersion(): int
    {
        return $this->instantViewVersion;
    }

    /**
     * Set Version of instant view (currently, can be 1 or 2) for the web page; 0 if none
     */
    public function setInstantViewVersion(int $instantViewVersion): self
    {
        $this->instantViewVersion = $instantViewVersion;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'linkPreview',
            'url' => $this->getUrl(),
            'display_url' => $this->getDisplayUrl(),
            'site_name' => $this->getSiteName(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'author' => $this->getAuthor(),
            'type' => $this->getType(),
            'has_large_media' => $this->getHasLargeMedia(),
            'show_large_media' => $this->getShowLargeMedia(),
            'show_media_above_description' => $this->getShowMediaAboveDescription(),
            'skip_confirmation' => $this->getSkipConfirmation(),
            'show_above_text' => $this->getShowAboveText(),
            'instant_view_version' => $this->getInstantViewVersion(),
        ];
    }
}
