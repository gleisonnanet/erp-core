<?php

namespace erpCore\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Model;
use erpCore\Contracts\Repositories\ClienteRepository;
use erpCore\Eloquent\BasePessoaRepository;
use erpCore\Eloquent\Models\Cliente;

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