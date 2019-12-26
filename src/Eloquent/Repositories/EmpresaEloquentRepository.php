<?php

namespace erp-core\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use erp-core\Contracts\Repositories\EmpresaEntity;
use erp-core\Contracts\Repositories\EmpresaRepository;
use erp-core\Eloquent\BasePessoaRepository;
use erp-core\Eloquent\Models\Empresa;

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