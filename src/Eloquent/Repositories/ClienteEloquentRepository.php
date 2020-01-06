<?php

namespace erpcore\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use erpcore\Contracts\Repositories\ClienteRepository;
use erpcore\Eloquent\BasePessoaRepository;
use erpcore\Eloquent\Models\Cliente;

class ClienteEloquentRepository extends BasePessoaRepository implements ClienteRepository
{
    /**
     * Cria o model eloquent
     *
     * @return Model
     */
    public function model()
    {
        return new Cliente();
    }

}