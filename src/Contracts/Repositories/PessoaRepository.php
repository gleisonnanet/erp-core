<?php

namespace erpCore\Contracts\Repositories;

use erpCore\Contracts\RepositoryInterface;

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