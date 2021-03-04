<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index()
  {
    $blogs = Blog::all();

    return response()->json([
    	'data' => $blogs,
    	'status' => 'success'
    ]);
  }

  public function store(Request $request)
  {
  	$blog = new Blog();
  	$blog->title = $request->title;
  	$blog->content = $request->content;
  	$blog->save();

    return response()->json([
    	'data' => $blog,
    	'status' => 'success',
    	'message' => 'Blog berhasil dibuat!'
    ]);    
  }

  public function show($id)
  {
    $blog = Blog::find($id);

    return response()->json([
    	'data' => $blog,
    	'status' => 'success',
    ]);    
  }

  public function update(Request $request, $id)
  {
  	$blog = Blog::find($id);
  	$blog->title = $request->title;
  	$blog->content = $request->content;
		$course->save();

    return response()->json([
    	'data' => $blog,
    	'status' => 'success',
    	'message' => 'Blog berhasil diperbarui!'
    ]);    
  }

  public function destroy($id)
  {
    $blog = Blog::destroy($id);    

    return response()->json([
    	'data' => $blog,
    	'status' => 'success',
    	'message' => 'Blog berhasil dihapus!'
    ]);    
  }
}
