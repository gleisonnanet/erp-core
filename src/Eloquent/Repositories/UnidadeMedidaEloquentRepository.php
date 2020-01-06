<?php

namespace erpcore\Eloquent\Repositories;


use erpcore\Contracts\Repositories\UnidadeMedidaRepository;
use erpcore\Eloquent\BaseRepository;
use erpcore\Eloquent\Model;
use erpcore\Eloquent\Models\UnidadeMedida;

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