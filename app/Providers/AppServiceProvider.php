<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Repositories\Facades\ExamRepository;

class AppServiceProvider extends ServiceProvider
{
    protected $repositories = [
        'User',
        'Student', 
        'Class', 
        'Exam', 
        'Room', 
        'Shift', 
        'Subject',
        'Teacher',
        'Location',
        'Test'
    ];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setFacadesRepositories();
        Schema::defaultStringLength(191);
        View::share('exams', ExamRepository::all());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerRepositories();
    }

     private function registerRepositories()
    {
        foreach ($this->repositories as $repository) {
            $this->app->bindIf(
                "App\\Repositories\\Contracts\\${repository}Interface",
                "App\\Repositories\\${repository}Repository"
            );
        }
    }
    /**
     * set Facade for repositories without implement instants container.
     */
    private function setFacadesRepositories()
    {
        foreach ($this->repositories as $repository) {
            $this->app->alias(
                "${repository}Repository",
                "App\\Repositories\\Facades\\${repository}Repository"
            );
        }
    }
}
