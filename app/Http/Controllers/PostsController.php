<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $icons = Post::orderBy('name','asc')->get();
        return view('navbar.iconsComp')->with('icons',$icons);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'iconName' => 'required',
            // 'iconCategory' => 'required',
            // 'iconSize' => 'required',
            // 'iconType' => 'required',
            'iconVisual' => 'image|nullable|max:1999',
        ]);

        //handle image upload
        $filenameWithExt = $request->file('iconVisual')->getClientOriginalName();
        // get file name
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // get extansion
        $extension = $request->file('iconVisual')->getClientOriginalExtension();
        // file name to store
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // upload the image
        $path = $request->file('iconVisual')->storeAs('public/icons', $filenameToStore);

        $post = new Post;
        $post->name = $request->input('iconName');
        $post->category = $request->input('iconCategory');
        $post->type = $request->input('iconType');
        $post->size = $request->input('iconSize');
        $post->icon_visual = $filenameToStore;
        $post->save();

        return redirect('/icons')->with('success','Icon has been saved');
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
