<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * The user must choose an option to report the story and repeat request with the chosen option @title Title for the option choice @options List of available options.
 */
class ReportStoryResultOptionRequired extends ReportStoryResult implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('title')]
        private string $title,
        #[SerializedName('options')]
        private array|null $options = null,
    ) {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getOptions(): array|null
    {
        return $this->options;
    }

    public function setOptions(array|null $options): self
    {
        $this->options = $options;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'reportStoryResultOptionRequired',
            'title' => $this->getTitle(),
            'options' => $this->getOptions(),
        ];
    }
}
