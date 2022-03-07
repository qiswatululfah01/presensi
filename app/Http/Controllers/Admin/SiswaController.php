<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Request\Admin\SiswaRequest;
use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $items = Siswa::all();

        return view('pages.admin.siswa.index',[
            'siswa' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $siswa = Siswa::all();
        // return view('pages.admin.siswa.create', [
        //     'siswa' => $siswa
        // ]);

        $model = new Siswa;
        return view('pages.admin.siswa.create', compact(
            'model'
        ));
    }

    public function createortu()
    {
        // $siswa = Siswa::all();
        // return view('pages.admin.siswa.create', [
        //     'siswa' => $siswa
        // ]);

        $model = new Siswa;
        return view('pages.admin.siswa.createortu', compact(
            'model'
        ));
    }


    public function createjuara()
    {
        // $siswa = Siswa::all();
        // return view('pages.admin.siswa.create', [
        //     'siswa' => $siswa
        // ]);

        $model = new Siswa;
        return view('pages.admin.siswa.createjuara', compact(
            'model'
        ));
    }

    public function createsku()
    {
        // $siswa = Siswa::all();
        // return view('pages.admin.siswa.create', [
        //     'siswa' => $siswa
        // ]);

        $model = new Siswa;
        return view('pages.admin.siswa.createsku', compact(
            'model'
        ));
    }

    public function createskk()
    {
        // $siswa = Siswa::all();
        // return view('pages.admin.siswa.create', [
        //     'siswa' => $siswa
        // ]);

        $model = new Siswa;
        return view('pages.admin.siswa.createskk', compact(
            'model'
        ));
    }

    public function creategaruda()
    {
        // $siswa = Siswa::all();
        // return view('pages.admin.siswa.create', [
        //     'siswa' => $siswa
        // ]);

        $model = new Siswa;
        return view('pages.admin.siswa.creategaruda', compact(
            'model'
        ));
    }

    public function createkegiatan()
    {
        // $siswa = Siswa::all();
        // return view('pages.admin.siswa.create', [
        //     'siswa' => $siswa
        // ]);

        $model = new Siswa;
        return view('pages.admin.siswa.createkegiatan', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SiswaRequest $request)
    {
        $data = $request->all();
        $data['slug']= Str::slug($request->title);

        Siswa::create($data);
        return redirect()->route('siswa.index');
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
