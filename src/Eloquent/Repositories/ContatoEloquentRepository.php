<?php

namespace erpcore\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use erpcore\Contracts\Repositories\ContatoRepository;
use erpcore\Eloquent\BaseRepository;
use erpcore\Eloquent\Models\Contato;

class ContatoEloquentRepository extends BaseRepository implements ContatoRepository
{
    /**
     * Cria o model eloquent
     *
     * @return Model
     */
    public function model()
    {
        return new Contato();
    }
}