<?php

namespace App\Modules;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Modules\API_V1\Models\Config_Model;
use Illuminate\Support\ServiceProvider as Service_Provider;

class ServiceProvider extends Service_Provider
{

    /**
     * @param  mixed $request
     * @return void
     */
    public function boot(Request $request)
    {
        //load confg from database
        // config(['global.settings' => Config_Model::all(['name', 'value'])->keyBy('name')->transform(function ($setting) {
        //     return $setting->value; // return only the value
        // })->toArray()]);

        $listModule = array_map('basename', File::directories(__DIR__));
        foreach ($listModule as $module) {
            if (file_exists(__DIR__ . '/' . $module . '/Routes.php')) {
                include __DIR__ . '/' . $module . '/Routes.php';
            }
            if (is_dir(__DIR__ . '/' . $module . '/Views')) {
                $this->loadViewsFrom(__DIR__ . '/' . $module . '/Views', $module);
            }
        }
    }

    public function register()
    {

    }
}
