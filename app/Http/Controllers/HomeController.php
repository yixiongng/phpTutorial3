<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Student;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lastStudentId = Cache::get('lastStudent');
        $student = Student::find($lastStudentId);
        $lastStudentName = $student->name;
        $websiteName =  config('app.websiteName');
        return view('home',['websiteName'=>$websiteName,'lastStudentName'=>$lastStudentName]);
    }
}
