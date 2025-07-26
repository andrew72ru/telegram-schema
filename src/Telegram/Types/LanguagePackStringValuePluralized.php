<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A language pack string which has different forms based on the number of some object it mentions. See https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html for more information
 */
class LanguagePackStringValuePluralized extends LanguagePackStringValue implements \JsonSerializable
{
    public function __construct(
        /** Value for zero objects */
        #[SerializedName('zero_value')]
        private string $zeroValue,
        /** Value for one object */
        #[SerializedName('one_value')]
        private string $oneValue,
        /** Value for two objects */
        #[SerializedName('two_value')]
        private string $twoValue,
        /** Value for few objects */
        #[SerializedName('few_value')]
        private string $fewValue,
        /** Value for many objects */
        #[SerializedName('many_value')]
        private string $manyValue,
        /** Default value */
        #[SerializedName('other_value')]
        private string $otherValue,
    ) {
    }

    /**
     * Get Value for zero objects
     */
    public function getZeroValue(): string
    {
        return $this->zeroValue;
    }

    /**
     * Set Value for zero objects
     */
    public function setZeroValue(string $zeroValue): self
    {
        $this->zeroValue = $zeroValue;

        return $this;
    }

    /**
     * Get Value for one object
     */
    public function getOneValue(): string
    {
        return $this->oneValue;
    }

    /**
     * Set Value for one object
     */
    public function setOneValue(string $oneValue): self
    {
        $this->oneValue = $oneValue;

        return $this;
    }

    /**
     * Get Value for two objects
     */
    public function getTwoValue(): string
    {
        return $this->twoValue;
    }

    /**
     * Set Value for two objects
     */
    public function setTwoValue(string $twoValue): self
    {
        $this->twoValue = $twoValue;

        return $this;
    }

    /**
     * Get Value for few objects
     */
    public function getFewValue(): string
    {
        return $this->fewValue;
    }

    /**
     * Set Value for few objects
     */
    public function setFewValue(string $fewValue): self
    {
        $this->fewValue = $fewValue;

        return $this;
    }

    /**
     * Get Value for many objects
     */
    public function getManyValue(): string
    {
        return $this->manyValue;
    }

    /**
     * Set Value for many objects
     */
    public function setManyValue(string $manyValue): self
    {
        $this->manyValue = $manyValue;

        return $this;
    }

    /**
     * Get Default value
     */
    public function getOtherValue(): string
    {
        return $this->otherValue;
    }

    /**
     * Set Default value
     */
    public function setOtherValue(string $otherValue): self
    {
        $this->otherValue = $otherValue;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'languagePackStringValuePluralized',
            'zero_value' => $this->getZeroValue(),
            'one_value' => $this->getOneValue(),
            'two_value' => $this->getTwoValue(),
            'few_value' => $this->getFewValue(),
            'many_value' => $this->getManyValue(),
            'other_value' => $this->getOtherValue(),
        ];
    }
}
