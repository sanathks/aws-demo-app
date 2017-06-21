<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        Storage::disk('s3_original')->put($imageName, file_get_contents($image), 'public');
        $postData = $request->all();
        $postData['image'] = $imageName;
        Post::create($postData);

        return redirect()->route('overview');
    }

    public function view($id)
    {
        $post = Post::find($id);

        return view('view')
            ->with(compact('post'));
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $this->deleteImages($post->image);
        $post->delete();
        return redirect()->route('overview');
    }

    private function deleteImages($image)
    {
        if (Storage::disk('s3_original')->exists($image)) {
            Storage::disk('s3_original')->delete($image);
        }

        if (Storage::disk('s3_thumbs')->exists($image)) {
            Storage::disk('s3_thumbs')->delete($image);
        }

    }
}
