<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a business chat link
 */
class BusinessChatLink implements \JsonSerializable
{
    public function __construct(
        /** The HTTPS link */
        #[SerializedName('link')]
        private string $link,
        /** Message draft text that will be added to the input field */
        #[SerializedName('text')]
        private FormattedText|null $text = null,
        /** Link title */
        #[SerializedName('title')]
        private string $title,
        /** Number of times the link was used */
        #[SerializedName('view_count')]
        private int $viewCount,
    ) {
    }

    /**
     * Get The HTTPS link
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Set The HTTPS link
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get Message draft text that will be added to the input field
     */
    public function getText(): FormattedText|null
    {
        return $this->text;
    }

    /**
     * Set Message draft text that will be added to the input field
     */
    public function setText(FormattedText|null $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get Link title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Link title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Number of times the link was used
     */
    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    /**
     * Set Number of times the link was used
     */
    public function setViewCount(int $viewCount): self
    {
        $this->viewCount = $viewCount;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'businessChatLink',
            'link' => $this->getLink(),
            'text' => $this->getText(),
            'title' => $this->getTitle(),
            'view_count' => $this->getViewCount(),
        ];
    }
}
