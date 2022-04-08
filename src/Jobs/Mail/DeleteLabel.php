<?php

namespace LaravelEveTools\EveApi\Jobs\Mail;

use LaravelEveTools\EveApi\Models\RefreshToken;
use LaravelEveTools\EveApi\Jobs\Abstracts\AbstractAuthCharacterJob;

/**
 * Delete a mail label
 * 
 * https://esi.evetech.net/ui/?version=dev#/Mail/delete_characters_character_id_mail_labels_label_id
 */
abstract class DeleteLabel extends AbstractAuthCharacterJob
{

    protected $method = 'delete';

    protected $endpoint = '/characters/{character_id}/mail/labels/{label_id}/';

    protected $scope = 'esi-mail.organize_mail.v1';

    protected $version = 'v1';
    /**
     * @var int
     */
    private $label_id;

    public function __construct(int $label_id, RefreshToken $token)
    {
        $this->label_id = $label_id;
        parent::__construct($token);
    }

    /**
     * @return int
     */
    public function getLabelId(): int
    {
        return $this->label_id;
    }

    protected function buildUriValues(): array
    {
        return array_merge(parent::buildUriValues(), [
            'label_id'=> $this->getLabelId(),
        ]);
    }

}