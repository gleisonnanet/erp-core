<?php

namespace erp-core\Eloquent\Repositories;


use erp-core\Contracts\Repositories\UnidadeMedidaRepository;
use erp-core\Eloquent\BaseRepository;
use erp-core\Eloquent\Model;
use erp-core\Eloquent\Models\UnidadeMedida;

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