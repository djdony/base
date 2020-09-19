<?php

namespace App\Providers;

use App\Models\CarType;
use App\Models\Currency;
use App\Models\Customer;
use App\Models\Location;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['backend.cars.fields'], function ($view) {
            $car_typeItems = CarType::pluck('name','id');
            $view->with('car_typeItems', $car_typeItems);
        });
        View::composer(['backend.bookings.fields'], function ($view) {
            $locations = Location::whereIn('type', [4,5])->pluck('name','id');
            $customers = Customer::all()->pluck('name','id');
            $partners = User::all()->pluck('name','id');
            $currencies = Currency::all()->pluck('name','id');
            $view->with([
                'locations'=>$locations,
                'customers'=>$customers,
                'currencies'=>$currencies,
                'partners'=>$partners,
                ]);
        });
    }
}
