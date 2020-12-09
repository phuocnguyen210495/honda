<?php

namespace App\Provider;

use App\Exception\TableNotFoundSolutionProvider;
use Facade\Ignition\SolutionProviders\SolutionProviderRepository as SolutionProvidersSolutionProviderRepository;
use Facade\IgnitionContracts\SolutionProviderRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected SolutionProviderRepository $solutionProviderRepository;

    public function __construct()
    {
        $this->solutionProviderRepository = app(SolutionProviderRepository::class);
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->solutionProviderRepository->registerSolutionProviders([]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();
    }
}
