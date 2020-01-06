<?php

namespace erpCore\Eloquent\Repositories;


use erpCore\Contracts\Repositories\UnidadeMedidaRepository;
use erpCore\Eloquent\BaseRepository;
use erpCore\Eloquent\Model;
use erpCore\Eloquent\Models\UnidadeMedida;

class UnidadeMedidaEloquentRepository extends BaseRepository implements UnidadeMedidaRepository
{

    /**
     * Cria o model eloquent
     *
     * @return Model
     */
    public function model()
    {
        return new UnidadeMedida();
    }
}