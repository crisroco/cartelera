<?php namespace App\Http\Controllers;
class PruebaController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return "Hello world from Controller";
    }
}