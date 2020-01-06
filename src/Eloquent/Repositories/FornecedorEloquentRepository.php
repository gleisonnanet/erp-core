<?php

namespace erpcore\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use erpcore\Contracts\Repositories\FornecedorRepository;
use erpcore\Eloquent\BasePessoaRepository;
use erpcore\Eloquent\Models\Fornecedor;

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