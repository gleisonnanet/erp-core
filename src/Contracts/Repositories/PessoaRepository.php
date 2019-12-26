<?php

namespace erp-core\Contracts\Repositories;

use erp-core\Contracts\RepositoryInterface;

interface PessoaRepository extends RepositoryInterface
{
    /**
     * Retorna uma Pessoa pelo documento
     *
     * @param int $documento
     * @return mixed
     */
    public function getByDocumento($documento);
}