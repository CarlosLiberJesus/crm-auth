<?php

declare(strict_types=1);

namespace App\Providers;

use Carbon\CarbonImmutable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configCommands();
        $this->configModels();
        $this->configDates();
    }

    private function configCommands(): void
    {
        DB::prohibitDestructiveCommands(
            app()->environment('production'),
        );
    }

    private function configModels(): void
    {
        Model::unguard();
        Model::shouldBeStrict();
    }

    private function configDates(): void
    {
        Date::use(CarbonImmutable::class);
    }
}
