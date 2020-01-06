<?php

namespace erpCore\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use erpCore\Contracts\Repositories\FornecedorRepository;
use erpCore\Eloquent\BasePessoaRepository;
use erpCore\Eloquent\Models\Fornecedor;

class FornecedorEloquentRepository extends BasePessoaRepository implements FornecedorRepository
{
    /**
     * Cria o model eloquent
     *
     * @return Model
     */
    public function model()
    {
        return new Fornecedor();
    }

}