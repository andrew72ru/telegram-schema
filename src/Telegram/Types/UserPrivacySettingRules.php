<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * A list of privacy rules. Rules are matched in the specified order. The first matched rule defines the privacy setting for a given user. If no rule matches, the action is not allowed @rules A list of rules.
 */
class UserPrivacySettingRules implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('rules')]
        private array|null $rules = null,
    ) {
    }

    public function getRules(): array|null
    {
        return $this->rules;
    }

    public function setRules(array|null $rules): self
    {
        $this->rules = $rules;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'userPrivacySettingRules',
            'rules' => $this->getRules(),
        ];
    }
}
