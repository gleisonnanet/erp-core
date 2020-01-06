<?php

namespace erpCore\Contracts\Repositories;

use erpCore\Contracts\RepositoryInterface;

interface EmpresaRepository extends RepositoryInterface
{
    /**
     * Retorna uma Empresa pelo ID da Pessoa
     *
     * @param int $id
     * @return mixed
     */
    public function getByPessoaId($id);

    /**
     * Retorna o primeira empresa do repositorio
     *
     * @return mixed
     */
    public function getFirst();
}