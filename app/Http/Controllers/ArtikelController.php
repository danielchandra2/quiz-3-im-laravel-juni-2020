<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
	return view('artikel.index');
    }

    public function create(){
    return view('artikel.form');
    }

    public function store(){
    }

    public function show(){
    return view('artikel.detail');
    }

    public function edit(){
    return view('artikel.edit');
    }

    public function update(){
    
    }

    public function destroy(){
    	
    }
}
