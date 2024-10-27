<?php

namespace App\Providers;

use App\Repositories\AboutRepository;
use App\Repositories\ApplyWorkRepository;
use App\Repositories\CentralServiceRepository;
use App\Repositories\DetailTypePostRepository;
use App\Repositories\FieldRepository;
use App\Repositories\Interfaces\AboutInterface;
use App\Repositories\Interfaces\ApplyWorkInterface;
use App\Repositories\Interfaces\CentralServiceInterface;
use App\Repositories\Interfaces\DetailTypePostInterface;
use App\Repositories\Interfaces\FieldInterface;
use App\Repositories\Interfaces\PostInterface;
use App\Repositories\Interfaces\RecruitmentInterface;
use App\Repositories\Interfaces\SliderInterface;
use App\Repositories\Interfaces\TypePostInterface;
use App\Repositories\Interfaces\TypeWorkInterface;
use App\Repositories\Interfaces\UserInterface;
use App\Repositories\Interfaces\WorkingPlaceInterface;
use App\Repositories\PostRepository;
use App\Repositories\RecruitmentRepository;
use App\Repositories\SliderRepository;
use App\Repositories\TypePostRepository;
use App\Repositories\TypeWorkRepository;
use App\Repositories\UserRepository;
use App\Repositories\WorkingPlaceRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AboutInterface::class,AboutRepository::class);
        $this->app->bind(ApplyWorkInterface::class,ApplyWorkRepository::class);
        $this->app->bind(CentralServiceInterface::class,CentralServiceRepository::class);
        $this->app->bind(DetailTypePostInterface::class,DetailTypePostRepository::class);
        $this->app->bind(FieldInterface::class,FieldRepository::class);
        $this->app->bind(PostInterface::class,PostRepository::class);
        $this->app->bind(RecruitmentInterface::class,RecruitmentRepository::class);
        $this->app->bind(SliderInterface::class,SliderRepository::class);
        $this->app->bind(TypePostInterface::class,TypePostRepository::class);
        $this->app->bind(TypeWorkInterface::class,TypeWorkRepository::class);
        $this->app->bind(UserInterface::class,UserRepository::class);
        $this->app->bind(WorkingPlaceInterface::class,WorkingPlaceRepository::class);


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
