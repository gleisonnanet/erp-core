<?php

namespace erpCore\Eloquent\Repositories;

use erpCore\Contracts\Repositories\UnidadeMedidaFatorSinonimoRepository;
use erpCore\Eloquent\BaseRepository;
use erpCore\Eloquent\Model;
use erpCore\Eloquent\Models\UnidadeMedidaFatorSinonimo;

class UnidadeMedidaFatorSinonimoEloquentRepository extends BaseRepository implements UnidadeMedidaFatorSinonimoRepository
{

    /**
     * Cria o model eloquent
     *
     * @return Model
     */
    public function model()
    {
        return new UnidadeMedidaFatorSinonimo();
    }
    
    /**
     * Retorna uma fator de unidade de medida pelo simbolo
     *
     * @param string $simbolo
     * @return mixed
     */
    public function getBySimbolo($simbolo)
    {
        return $this->model()->where('simbolo', strtoupper($simbolo))->orWhere('simbolo', strtolower($simbolo))->first();
    }
}