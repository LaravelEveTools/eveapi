<?php

namespace LaravelEveTools\EveApi\Traits;

trait HasCompositePrimaryKey
{
    public function getIncrementing()
    {
        return false;
    }

    public function setKeysForSaveQuery(Build $query)
    {
        if(is_array($this->getKeyName())){
            foreach((array) $this->getKeyName() as $keyField){
                $query->where($keyField, '=', $this->original[$keyField]);
            }
            return $query;
        }
        return parent::setKeysForSaveQuery($query);
    }
}