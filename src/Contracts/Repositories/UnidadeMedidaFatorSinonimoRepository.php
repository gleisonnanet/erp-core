<?php

namespace erpcore\Contracts\Repositories;

use erpcore\Contracts\RepositoryInterface;

interface UnidadeMedidaFatorSinonimoRepository extends RepositoryInterface
{
    /**
     * Retorna uma sininimo de fator de unidade de medida pelo simbolo
     *
     * @param string $simbolo
     * @return mixed
     */
    public function getBySimbolo($simbolo);
}