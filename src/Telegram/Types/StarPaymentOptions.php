<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of options for buying Telegram Stars @options The list of options
 */
class StarPaymentOptions implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('options')]
        private array|null $options = null,
    ) {
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
            '@type' => 'starPaymentOptions',
            'options' => $this->getOptions(),
        ];
    }
}
