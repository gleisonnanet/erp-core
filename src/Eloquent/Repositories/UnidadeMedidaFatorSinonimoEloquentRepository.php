<?php

namespace erpcore\Eloquent\Repositories;

use erpcore\Contracts\Repositories\UnidadeMedidaFatorSinonimoRepository;
use erpcore\Eloquent\BaseRepository;
use erpcore\Eloquent\Model;
use erpcore\Eloquent\Models\UnidadeMedidaFatorSinonimo;

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