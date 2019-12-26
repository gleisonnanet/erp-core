<?php

namespace erp-core\Contracts\Repositories;

use erp-core\Contracts\RepositoryInterface;

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