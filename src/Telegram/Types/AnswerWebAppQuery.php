<?php

declare(strict_types=1);

namespace App\Telegram\Types;

use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * Sets the result of interaction with a Web App and sends corresponding message on behalf of the user to the chat from which the query originated; for bots only
 */
class AnswerWebAppQuery extends SentWebAppMessage implements \JsonSerializable
{
    public function __construct(
        /** Identifier of the Web App query */
        #[SerializedName('web_app_query_id')]
        private string $webAppQueryId,
        /** The result of the query */
        #[SerializedName('result')]
        private InputInlineQueryResult|null $result = null,
    ) {
    }

    /**
     * Get Identifier of the Web App query
     */
    public function getWebAppQueryId(): string
    {
        return $this->webAppQueryId;
    }

    /**
     * Set Identifier of the Web App query
     */
    public function setWebAppQueryId(string $webAppQueryId): self
    {
        $this->webAppQueryId = $webAppQueryId;

        return $this;
    }

    /**
     * Get The result of the query
     */
    public function getResult(): InputInlineQueryResult|null
    {
        return $this->result;
    }

    /**
     * Set The result of the query
     */
    public function setResult(InputInlineQueryResult|null $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            '@type' => 'answerWebAppQuery',
            'web_app_query_id' => $this->getWebAppQueryId(),
            'result' => $this->getResult(),
        ];
    }
}
