<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A custom suggestion to be shown at the top of the chat list
 */
class SuggestedActionCustom extends SuggestedAction implements \JsonSerializable
{
    public function __construct(
        /** Unique name of the suggestion */
        #[SerializedName('name')]
        private string $name,
        /** Title of the suggestion */
        #[SerializedName('title')]
        private FormattedText|null $title = null,
        /** A custom suggestion to be shown at the top of the chat list */
        #[SerializedName('description')]
        private FormattedText|null $description = null,
        /** The link to open when the suggestion is clicked */
        #[SerializedName('url')]
        private string $url,
    ) {
    }

    /**
     * Get Unique name of the suggestion
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set Unique name of the suggestion
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get Title of the suggestion
     */
    public function getTitle(): FormattedText|null
    {
        return $this->title;
    }

    /**
     * Set Title of the suggestion
     */
    public function setTitle(FormattedText|null $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get A custom suggestion to be shown at the top of the chat list
     */
    public function getDescription(): FormattedText|null
    {
        return $this->description;
    }

    /**
     * Set A custom suggestion to be shown at the top of the chat list
     */
    public function setDescription(FormattedText|null $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get The link to open when the suggestion is clicked
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Set The link to open when the suggestion is clicked
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'suggestedActionCustom',
            'name' => $this->getName(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'url' => $this->getUrl(),
        ];
    }
}
