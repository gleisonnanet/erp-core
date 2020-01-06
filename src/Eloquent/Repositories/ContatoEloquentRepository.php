<?php

namespace erpCore\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use erpCore\Contracts\Repositories\ContatoRepository;
use erpCore\Eloquent\BaseRepository;
use erpCore\Eloquent\Models\Contato;

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