<?php

namespace LaravelEveTools\EveApi\Jobs\Abstracts;

use App\Models\RefreshToken;

abstract class AbstractMailJob extends AbstractAuthCharacterJob
{

    /**
     * @var int
     */
    private $mail_id;

    public function __construct(int $mail_id, RefreshToken $token)
    {
        $this->mail_id = $mail_id;
        parent::__construct($token);
    }

    /**
     * @return int
     */
    public function getMailId(): int
    {
        return $this->mail_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(),[
            'mail_id' => $this->getMailId(),
        ]);
    }
}