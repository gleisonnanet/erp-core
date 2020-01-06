<?php

namespace erpCore\Providers;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use gleisonnanet\Utils\Mask;
use gleisonnanet\Utils\Utils;
use erpCore\Contracts\Repositories\CidadeRepository;
use erpCore\Contracts\Repositories\ClienteRepository;
use erpCore\Contracts\Repositories\ContatoRepository;
use erpCore\Contracts\Repositories\EmpresaRepository;
use erpCore\Contracts\Repositories\EnderecoRepository;
use erpCore\Contracts\Repositories\FaturaRepository;
use erpCore\Contracts\Repositories\FornecedorRepository;
use erpCore\Contracts\Repositories\NotaFiscalItemRepository;
use erpCore\Contracts\Repositories\NotaFiscalRepository;
use erpCore\Contracts\Repositories\PessoaRepository;
use erpCore\Contracts\Repositories\ProdutoRepository;
use erpCore\Contracts\Repositories\UnidadeMedidaFatorRepository;
use erpCore\Contracts\Repositories\UnidadeMedidaFatorSinonimoRepository;
use erpCore\Contracts\Repositories\UnidadeMedidaRepository;
use erpCore\Exceptions\Handler;
use erpCore\Exceptions\WhoopsHandler;
use erpCore\Http\Middleware\SetupMiddleware;
use erpCore\Ordination\Facade;
use erpCore\Ordination\OrdinationServiceProvider;

class erpCoreServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

        /*
         * Publish migration's
         */
        $this->publishes([__DIR__.'/../../database/migrations/' => base_path('database/migrations')], 'migrations');

        /*
         * Publish seed's
         */
        $this->publishes([__DIR__.'/../../database/seeds/' => base_path('database/seeds')], 'migrations');

        /*
         * Publish config
         */
        $this->publishes([__DIR__.'/../../config/erpCore.php' => config_path('erpCore.php')], 'erpCore');

        /*
         * Merge config
         */
        $this->mergeConfigFrom(__DIR__.'/../../config/erpCore.php', 'erpCore');

        /*
         * erpCore Middlewares...
         */
        $this->app->router->middleware('setup', SetupMiddleware::class);

        /*
         * Bind Repositories
         */
        $this->app->bind(CidadeRepository::class, config('erpCore.repositories.CidadeRepository'));
        $this->app->bind(ClienteRepository::class, config('erpCore.repositories.ClienteRepository'));
        $this->app->bind(ContatoRepository::class, config('erpCore.repositories.ContatoRepository'));
        $this->app->bind(EmpresaRepository::class, config('erpCore.repositories.EmpresaRepository'));
        $this->app->bind(EnderecoRepository::class, config('erpCore.repositories.EnderecoRepository'));
        $this->app->bind(FornecedorRepository::class, config('erpCore.repositories.FornecedorRepository'));
        $this->app->bind(PessoaRepository::class, config('erpCore.repositories.PessoaRepository'));
        $this->app->bind(ProdutoRepository::class, config('erpCore.repositories.ProdutoRepository'));
        $this->app->bind(UnidadeMedidaRepository::class, config('erpCore.repositories.UnidadeMedidaRepository'));
        $this->app->bind(UnidadeMedidaFatorRepository::class, config('erpCore.repositories.UnidadeMedidaFatorRepository'));
        $this->app->bind(UnidadeMedidaFatorSinonimoRepository::class, config('erpCore.repositories.UnidadeMedidaFatorSinonimoRepository'));
        $this->app->bind(NotaFiscalRepository::class, config('erpCore.repositories.NotaFiscalRepository'));
        $this->app->bind(NotaFiscalItemRepository::class, config('erpCore.repositories.NotaFiscalItemRepository'));
        $this->app->bind(FaturaRepository::class, config('erpCore.repositories.FaturaRepository'));

        /*
         * Service Providers...
         */
        $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        $this->app->register(OrdinationServiceProvider::class);

        /*
         * Singletons
         */
        $this->app->singleton(ExceptionHandler::class, WhoopsHandler::class, Handler::class);

        /*
         * Removendo empresa_id da sessão caso efetue logout
         */
        Event::listen('auth.logout', function($user){
            Request::session()->forget('empresa_id');
        });

        /*
         * Register Aliases
         */
        $loader = AliasLoader::getInstance();
        $loader->alias('Utils', Utils::class);
        $loader->alias('Mask', Mask::class);
        $loader->alias('Order', Facade::class);

        /*
         * erpCore Routes...
         */
        include __DIR__ . '/../Http/routes.php';
    }

}
