<?php

namespace App\Http\Controllers;

use App\About_us;
use App\image_main as LessonsImages;
use App\About_us as aboutAs;
use App\ToursModel as tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $nearestTour = tours::getNearestTour();
        $tour = $nearestTour->count() ? $nearestTour[0] : null;
        $aboutUs = About_us::get();
        if($aboutUs->count() == 0) $aboutUs = null;
        $mainImage = LessonsImages::get();
        return view('index', compact('aboutUs', 'mainImage', 'tour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $post = new image_main();

        $post->title = $request->title;
        $request->file('img');
        $path = Storage::putFile('public', $request->file('img'));
        $url = Storage::url($path);
        $post->img = $url;
        $post->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
