<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
=======
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
<<<<<<< HEAD
     */
    public function register(): void
=======
<<<<<<< HEAD
     */
    public function register(): void
=======
     *
     * @return void
     */
    public function register()
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
    {
        //
    }

    /**
     * Bootstrap any application services.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a873a32 (Initialisation du dépôt)
     */
    public function boot(): void
    {
       Schema::defaultStringLength(191);
<<<<<<< HEAD
=======
=======
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
    }
}
