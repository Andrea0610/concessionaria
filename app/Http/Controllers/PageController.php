<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    protected $data = [
        [
            'name' => 'Harry',
            'lastname' => 'Plotter'
        ],
        [
            'name' => 'Mario',
            'lastname' => 'Rossi'
        ],
        [
            'name' => 'Carlo',
            'lastname' => 'Bianchi'
        ],
    ];


    public function about(){
        return view('about');
    }
    
    public function staff(){
       
        return view('staffb', [
            'title' => 'Our Staff',
            'staff' => $this->data
        ]);
       
        /*
        $title = 'Our staff';
        $staff = $this->data;

        return view('staff', compact('title', 'staff'));
        */
    }
}
