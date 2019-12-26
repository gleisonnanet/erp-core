<?php

namespace erp-core\Eloquent\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use erp-core\Contracts\Repositories\CidadeRepository;
use erp-core\Eloquent\BaseRepository;
use erp-core\Eloquent\Models\Cidade;

class CidadeEloquentRepository extends BaseRepository implements CidadeRepository
{
    /**
     * Cria o model eloquent
     *
     * @return Model
     */
    public function model()
    {
        return new Cidade();
    }

    /**
     * Pesquisa e retorna UF's distintas das cidades
     *
     * @return Collection
     */
    public function getUFs()
    {
        return $this->model()->select('uf')->distinct('uf')->orderBy('uf')->get();
    }

    /**
     * Retorna Cidades de uma determinada UF
     *
     * @param string $uf
     * @return Collection
     */
    public function getByUF($uf)
    {
        return $this->model()->where('uf', $uf)->orderBy('nome')->get();
    }

    /**
     * Retorna uma Cidade pelo nome e uf
     *
     * @param string $nome
     * @param string $uf
     * @return mixed
     */
    public function getByCidadeUF($nome, $uf)
    {
        return $this->model()->where('uf', $uf)->where(function($query) use ($nome) {
            $query->where('nome', $nome)
                ->orWhere('nome', strtoupper($nome))
                ->orWhere('nome', strtolower($nome));
        })->first();
    }
}