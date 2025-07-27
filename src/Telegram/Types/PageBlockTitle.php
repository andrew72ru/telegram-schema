<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The title of a page @title Title.
 */
class PageBlockTitle extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private RichText|null $title = null,
    ) {
    }

    public function getTitle(): RichText|null
    {
        return $this->title;
    }

    public function setTitle(RichText|null $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockTitle',
            'title' => $this->getTitle(),
        ];
    }
}
