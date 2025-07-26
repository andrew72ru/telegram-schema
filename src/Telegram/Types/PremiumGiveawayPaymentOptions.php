<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Contains a list of options for creating of Telegram Premium giveaway or manual distribution of Telegram Premium among chat members @options The list of options
 */
class PremiumGiveawayPaymentOptions implements \JsonSerializable
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
            '@type' => 'premiumGiveawayPaymentOptions',
            'options' => $this->getOptions(),
        ];
    }
}
