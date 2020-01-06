<?php

namespace erpcore\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use erpcore\Contracts\Repositories\EmpresaEntity;
use erpcore\Contracts\Repositories\EmpresaRepository;
use erpcore\Eloquent\BasePessoaRepository;
use erpcore\Eloquent\Models\Empresa;

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