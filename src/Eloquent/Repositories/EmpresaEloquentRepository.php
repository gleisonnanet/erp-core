<?php

namespace erpCore\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use erpCore\Contracts\Repositories\EmpresaEntity;
use erpCore\Contracts\Repositories\EmpresaRepository;
use erpCore\Eloquent\BasePessoaRepository;
use erpCore\Eloquent\Models\Empresa;

class EmpresaEloquentRepository extends BasePessoaRepository implements EmpresaRepository
{
    /**
     * Cria o model eloquent
     *
     * @return Model
     */
    public function model()
    {
        return new Empresa();
    }

    /**
     * Retorna o primeira empresa do repositorio
     *
     * @return mixed
     */
    public function getFirst()
    {
        return $this->model()->first();
    }
}