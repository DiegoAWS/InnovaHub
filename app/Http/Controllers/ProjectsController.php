<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * 
     * 
     * @return Application|Factory|View
     */
    public function index()
    {
        $path = 'images/gallery/';
        $projectImages = [$path . 'proj-1.jpg', 
                          $path . 'proj-2.jpg', 
                          $path . 'proj-3.jpg', 
                          $path . 'proj-4.jpg',
                          $path . 'proj-5.jpg',
                          $path . 'proj-6.jpg',
                          $path . 'proj-7.jpg', 
                          $path . 'proj-8.jpg'];

        return view('projects.index', compact('projectImages'));
    }

    /**
     * 
     * 
     * @return Application|Factory|View
     */
    public function show( )
    {
       return view('projects.show');
    }
}
