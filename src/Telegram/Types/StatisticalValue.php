<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A value with information about its recent changes @value The current value @previous_value The value for the previous day @growth_rate_percentage The growth rate of the value, as a percentage
 */
class StatisticalValue implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('value')]
        private float $value,
        #[SerializedName('previous_value')]
        private float $previousValue,
        #[SerializedName('growth_rate_percentage')]
        private float $growthRatePercentage,
    ) {
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getPreviousValue(): float
    {
        return $this->previousValue;
    }

    public function setPreviousValue(float $previousValue): self
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function getGrowthRatePercentage(): float
    {
        return $this->growthRatePercentage;
    }

    public function setGrowthRatePercentage(float $growthRatePercentage): self
    {
        $this->growthRatePercentage = $growthRatePercentage;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'statisticalValue',
            'value' => $this->getValue(),
            'previous_value' => $this->getPreviousValue(),
            'growth_rate_percentage' => $this->getGrowthRatePercentage(),
        ];
    }
}
