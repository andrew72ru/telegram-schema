<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The footer of a page @footer Footer
 */
class PageBlockFooter extends PageBlock implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('footer')]
        private RichText|null $footer = null,
    ) {
    }

    public function getFooter(): RichText|null
    {
        return $this->footer;
    }

    public function setFooter(RichText|null $footer): self
    {
        $this->footer = $footer;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'pageBlockFooter',
            'footer' => $this->getFooter(),
        ];
    }
}
