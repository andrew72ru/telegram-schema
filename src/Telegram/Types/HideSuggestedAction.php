<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Hides a suggested action @action Suggested action to hide.
 */
class HideSuggestedAction extends Ok implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('action')]
        private SuggestedAction|null $action = null,
    ) {
    }

    public function getAction(): SuggestedAction|null
    {
        return $this->action;
    }

    public function setAction(SuggestedAction|null $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'hideSuggestedAction',
            'action' => $this->getAction(),
        ];
    }
}
