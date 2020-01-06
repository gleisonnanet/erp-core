<?php

namespace erpcore\Providers;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use gleisonnanet\Utils\Mask;
use gleisonnanet\Utils\Utils;
use erpcore\Contracts\Repositories\CidadeRepository;
use erpcore\Contracts\Repositories\ClienteRepository;
use erpcore\Contracts\Repositories\ContatoRepository;
use erpcore\Contracts\Repositories\EmpresaRepository;
use erpcore\Contracts\Repositories\EnderecoRepository;
use erpcore\Contracts\Repositories\FaturaRepository;
use erpcore\Contracts\Repositories\FornecedorRepository;
use erpcore\Contracts\Repositories\NotaFiscalItemRepository;
use erpcore\Contracts\Repositories\NotaFiscalRepository;
use erpcore\Contracts\Repositories\PessoaRepository;
use erpcore\Contracts\Repositories\ProdutoRepository;
use erpcore\Contracts\Repositories\UnidadeMedidaFatorRepository;
use erpcore\Contracts\Repositories\UnidadeMedidaFatorSinonimoRepository;
use erpcore\Contracts\Repositories\UnidadeMedidaRepository;
use erpcore\Exceptions\Handler;
use erpcore\Exceptions\WhoopsHandler;
use erpcore\Http\Middleware\SetupMiddleware;
use erpcore\Ordination\Facade;
use erpcore\Ordination\OrdinationServiceProvider;

class erpcoreServiceProvider extends ServiceProvider
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
        $this->publishes([__DIR__.'/../../config/erpcore.php' => config_path('erpcore.php')], 'erpcore');

        /*
         * Merge config
         */
        $this->mergeConfigFrom(__DIR__.'/../../config/erpcore.php', 'erpcore');

        /*
         * erpcore Middlewares...
         */
        $this->app->router->middleware('setup', SetupMiddleware::class);

        /*
         * Bind Repositories
         */
        $this->app->bind(CidadeRepository::class, config('erpcore.repositories.CidadeRepository'));
        $this->app->bind(ClienteRepository::class, config('erpcore.repositories.ClienteRepository'));
        $this->app->bind(ContatoRepository::class, config('erpcore.repositories.ContatoRepository'));
        $this->app->bind(EmpresaRepository::class, config('erpcore.repositories.EmpresaRepository'));
        $this->app->bind(EnderecoRepository::class, config('erpcore.repositories.EnderecoRepository'));
        $this->app->bind(FornecedorRepository::class, config('erpcore.repositories.FornecedorRepository'));
        $this->app->bind(PessoaRepository::class, config('erpcore.repositories.PessoaRepository'));
        $this->app->bind(ProdutoRepository::class, config('erpcore.repositories.ProdutoRepository'));
        $this->app->bind(UnidadeMedidaRepository::class, config('erpcore.repositories.UnidadeMedidaRepository'));
        $this->app->bind(UnidadeMedidaFatorRepository::class, config('erpcore.repositories.UnidadeMedidaFatorRepository'));
        $this->app->bind(UnidadeMedidaFatorSinonimoRepository::class, config('erpcore.repositories.UnidadeMedidaFatorSinonimoRepository'));
        $this->app->bind(NotaFiscalRepository::class, config('erpcore.repositories.NotaFiscalRepository'));
        $this->app->bind(NotaFiscalItemRepository::class, config('erpcore.repositories.NotaFiscalItemRepository'));
        $this->app->bind(FaturaRepository::class, config('erpcore.repositories.FaturaRepository'));

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
         * erpcore Routes...
         */
        include __DIR__ . '/../Http/routes.php';
    }

}
