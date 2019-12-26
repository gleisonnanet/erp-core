<?php

namespace erp-core\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use erp-core\Contracts\Repositories\ContatoRepository;
use erp-core\Eloquent\BaseRepository;
use erp-core\Eloquent\Models\Contato;

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