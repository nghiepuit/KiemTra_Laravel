<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\TinTuc;

class TinTucController extends Controller
{

    public function trangchu()
    {
        $data = TinTuc::select()->get()->toArray();
        return view('trangchu',['data'=>$data]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TinTuc::select()->get()->toArray();
        return view('list',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tintuc = new TinTuc();
        $tintuc->danhmuc = $request->sltCate;
        $tintuc->tieude = $request->txtTitle;
        $tintuc->tacgia = $request->txtAuthor;
        $tintuc->trichdan = $request->txtIntro;
        $tintuc->noidung = $request->txtFull;
        $tintuc->hinh = $request->txtTitle;

        if($request->newsImg){
            $imageName = time().'.'.$request->newsImg->getClientOriginalExtension();
            $request->newsImg->move(public_path('images'), $imageName);
            $tintuc->hinh = $imageName;
        }

        $tintuc->congbo = $request->rdoPublic == 'Y' ? 1 : 0;
        $tintuc->created_at = new \DateTime();
        $tintuc->save();
        return redirect()->route('list');
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
        $data = TinTuc::find($id)->toArray();
        return view('edit',['data' => $data]);
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
        $tintuc = TinTuc::find($id);
        $tintuc->danhmuc = $request->sltCate;
        $tintuc->tieude = $request->txtTitle;
        $tintuc->tacgia = $request->txtAuthor;
        $tintuc->trichdan = $request->txtIntro;
        $tintuc->noidung = $request->txtFull;
        $tintuc->hinh = $request->txtTitle;
        $tintuc->congbo = $request->rdoPublic == 'Y' ? 1 : 0;
        $tintuc->save();
        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tintuc = TinTuc::find($id);
        $tintuc->delete();
        return redirect()->route('list');
    }
}
