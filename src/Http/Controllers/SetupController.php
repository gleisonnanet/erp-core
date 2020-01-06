<?php

namespace erpcore\Http\Controllers;

use erpcore\Contracts\Repositories\ContatoRepository;
use erpcore\Contracts\Repositories\EmpresaRepository;
use erpcore\Contracts\Repositories\EnderecoRepository;
use erpcore\Http\Requests;
use erpcore\Http\Requests\SetupSalvarRequest;


class SetupController extends Controller
{
    /**
     * Exibe formulario para cadastrar uma empresa inicial
     *
     * @return  View
     */
    public function index() {
        return view('setup.index');
    }

    /**
     * Salva as dados da empresa
     *
     * @return Response
     */
    public function salvar(SetupSalvarRequest $setupSalvarRequest, EmpresaRepository $empresaRepository, EnderecoRepository $enderecoRepository, ContatoRepository $contatoRepository) {

        /*
         * Salvando dados da empresa
         */
        $empresa = $empresaRepository->save($setupSalvarRequest->all());

        /*
         * Salvando endereço
         */
        $endereco = $setupSalvarRequest->get('endereco');
        $endereco['pessoa_id'] = $empresa->pessoa_id;

        $enderecoRepository->save($endereco);

        /*
         * Salvando contato
         */
        $contato = $setupSalvarRequest->get('contato');
        $contato['pessoa_id'] = $empresa->pessoa_id;

        $contatoRepository->save($contato);

        return redirect()->route('dashboard.index');
    }
}
