<?php

namespace LaravelEveTools\EveApi\Traits;

use LaravelEveTools\EveApi\Exceptions\ReadOnlyException;

trait IsReadOnly
{

    /**
     * @throws ReadOnlyException
     */
    public static function create(array $attributes = [])
    {
        throw new ReadOnlyException;
    }

    /**
     * @throws ReadOnlyException
     */
    public function firstOrCreate(array $arr)
    {
        throw new ReadOnlyException;
    }

    /**
     * @throws ReadOnlyException
     */
    public function save(array $options = [])
    {
        throw new ReadOnlyException;
    }

    /**
     * @throws ReadOnlyException
     */
    public function update(array $attributes = [], array $options = [])
    {
        throw new ReadOnlyException;
    }

    /**
     * @throws ReadOnlyException
     */
    public function delete()
    {
        throw new ReadOnlyException;
    }

    /**
     * @throws ReadOnlyException
     */
    public function forceDelete()
    {
        throw new ReadOnlyException;
    }



}