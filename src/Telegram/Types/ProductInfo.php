<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains information about a product that can be paid with invoice
 */
class ProductInfo implements \JsonSerializable
{
    public function __construct(
        /** Product title */
        #[SerializedName('title')]
        private string $title,
        /** Contains information about a product that can be paid with invoice */
        #[SerializedName('description')]
        private FormattedText|null $description = null,
        /** Product photo; may be null */
        #[SerializedName('photo')]
        private Photo|null $photo = null,
    ) {
    }

    /**
     * Get Product title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set Product title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get Contains information about a product that can be paid with invoice
     */
    public function getDescription(): FormattedText|null
    {
        return $this->description;
    }

    /**
     * Set Contains information about a product that can be paid with invoice
     */
    public function setDescription(FormattedText|null $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get Product photo; may be null
     */
    public function getPhoto(): Photo|null
    {
        return $this->photo;
    }

    /**
     * Set Product photo; may be null
     */
    public function setPhoto(Photo|null $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'productInfo',
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'photo' => $this->getPhoto(),
        ];
    }
}
