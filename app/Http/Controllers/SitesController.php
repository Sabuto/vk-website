<?php
/**
 * Copyright (c) 2016. Copyright of Robert Dunne @ Valkyrie-missile.com if you would like rights to the file or any in any subsequent projects then please email robertkdunne@valkyrie-missile.com
 */

namespace App\Http\Controllers;

use App\Http\Requests\SiteRequest;
use App\Site;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SitesController extends Controller
{
    /**
     * SitesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SiteRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiteRequest $request)
    {
        Site::create($request->all());

        flash()->success('Success', 'The Site has been added to the portfolio');

        return redirect()->back();

        //dont know why
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $name = str_replace('-', ' ', $name);
        $site = Site::whereName($name)->first();

        return view('sites.show', compact('site'));
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

    public function addPhoto($name, Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);

        $file = $request->file('file');

        $photoName = time() . $file->getClientOriginalName();


        $file->move('sites/photos', $photoName);

        $site = Site::whereName($name)->first();

        $site->photos()->create(['path' => "sites/photos/{$photoName}"]);

        return 'Done';
    }
}
