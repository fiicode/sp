<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProductimageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }
    /**
     * @param $filename
     * @return Response
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function getImage($filename)
    {
		$file = Storage::disk('public')->get($filename);
        return new Response($file, 200);
	}
}