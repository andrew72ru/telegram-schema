<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Describes an instant view page for a web page.
 */
class WebPageInstantView implements \JsonSerializable
{
    public function __construct(
        /** Content of the instant view page */
        #[SerializedName('page_blocks')]
        private array|null $pageBlocks = null,
        /** Number of the instant view views; 0 if unknown */
        #[SerializedName('view_count')]
        private int $viewCount,
        /** Version of the instant view; currently, can be 1 or 2 */
        #[SerializedName('version')]
        private int $version,
        /** True, if the instant view must be shown from right to left */
        #[SerializedName('is_rtl')]
        private bool $isRtl,
        /** True, if the instant view contains the full page. A network request might be needed to get the full instant view */
        #[SerializedName('is_full')]
        private bool $isFull,
        /** An internal link to be opened to leave feedback about the instant view */
        #[SerializedName('feedback_link')]
        private InternalLinkType|null $feedbackLink = null,
    ) {
    }

    /**
     * Get Content of the instant view page.
     */
    public function getPageBlocks(): array|null
    {
        return $this->pageBlocks;
    }

    /**
     * Set Content of the instant view page.
     */
    public function setPageBlocks(array|null $pageBlocks): self
    {
        $this->pageBlocks = $pageBlocks;

        return $this;
    }

    /**
     * Get Number of the instant view views; 0 if unknown.
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    /**
     * Set Number of the instant view views; 0 if unknown.
     */
    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    /**
     * Get Version of the instant view; currently, can be 1 or 2.
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * Set Version of the instant view; currently, can be 1 or 2.
     */
    public function setVersion(int $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get True, if the instant view must be shown from right to left.
     */
    public function getIsRtl(): bool
    {
        return $this->isRtl;
    }

    /**
     * Set True, if the instant view must be shown from right to left.
     */
    public function setIsRtl(bool $isRtl): self
    {
        $this->isRtl = $isRtl;

        return $this;
    }

    /**
     * Get True, if the instant view contains the full page. A network request might be needed to get the full instant view.
     */
    public function getIsFull(): bool
    {
        return $this->isFull;
    }

    /**
     * Set True, if the instant view contains the full page. A network request might be needed to get the full instant view.
     */
    public function setIsFull(bool $isFull): self
    {
        $this->isFull = $isFull;

        return $this;
    }

    /**
     * Get An internal link to be opened to leave feedback about the instant view.
     */
    public function getFeedbackLink(): InternalLinkType|null
    {
        return $this->feedbackLink;
    }

    /**
     * Set An internal link to be opened to leave feedback about the instant view.
     */
    public function setFeedbackLink(InternalLinkType|null $feedbackLink): self
    {
        $this->feedbackLink = $feedbackLink;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'webPageInstantView',
            'page_blocks' => $this->getPageBlocks(),
            'view_count' => $this->getViewCount(),
            'version' => $this->getVersion(),
            'is_rtl' => $this->getIsRtl(),
            'is_full' => $this->getIsFull(),
            'feedback_link' => $this->getFeedbackLink(),
        ];
    }
}
