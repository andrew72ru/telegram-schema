<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Basic information about a topic in a forum chat was changed @info New information about the topic
 */
class UpdateForumTopicInfo extends Update implements \JsonSerializable
{
    public function __construct(
        #[SerializedName('info')]
        private ForumTopicInfo|null $info = null,
    ) {
    }

    public function getInfo(): ForumTopicInfo|null
    {
        return $this->info;
    }

    public function setInfo(ForumTopicInfo|null $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'updateForumTopicInfo',
            'info' => $this->getInfo(),
        ];
    }
}
