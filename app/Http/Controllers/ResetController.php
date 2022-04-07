<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ResetController extends Controller
{
    public function reset()
    {
        foreach (['images/categories', 'images/products', 'instructions'] as $folder) {
            Artisan::call('migrate:fresh --seed');
            Storage::deleteDirectory($folder);
            Storage::makeDirectory($folder);
            $files = Storage::disk('reset')->files($folder);
            foreach ($files as $file) {
                Storage::put($file, Storage::disk('reset')->get($file));
            }
        }

        session()->flash('success', __('main.project_reset'));
        return redirect()->route('index');
    }
}
