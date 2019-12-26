<?php

namespace erp-core\Http\Controllers;

use erp-core\Contracts\Repositories\ContatoRepository;
use erp-core\Http\Requests\ContatoSalvarRequest;

class ContatoController extends Controller
{
    /**
     * Repositorio de contato
     *
     * @var ContatoRepository
     */
    private $contatoRepository;

    /**
     * ContatoController constructor.
     *
     * @param $enderecoRepository
     */
    public function __construct(ContatoRepository $contatoRepository)
    {
        $this->contatoRepository = $contatoRepository;
    }

    /**
     * Salva um contato
     */
    public function salvar(ContatoSalvarRequest $request) {

        $this->contatoRepository->save($request->get('contato'));

        return redirect()->back()->with('alert', 'O contato foi salvo com sucesso!');
    }

    /**
     * Exclui um contato
     *
     * @return Response
     */
    public function excluir($id) {

        if(!$this->contatoRepository->remove($id))
            return redirect()->back()->with('erro', 'O contato não pode ser removido. Verifique se existe algum dado relacionado a ele.');

        return redirect()->back()->with('alert', 'O contato foi removido com sucesso');
    }
}
