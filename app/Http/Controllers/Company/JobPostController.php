<?php

namespace App\Http\Controllers\Company;

use App\Constants\Status;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Location;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Gate;

class JobPostController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        $categories = Category::all();
        $posts = Post::all();
        return view('company.jobpost.index', compact('posts', 'locations', 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {


        $locations = Location::all();
        $categories = Category::all();

        return view('company.jobpost.create', compact('locations', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // dd($request);
        // $this->authorize('create', Post::class);
        // $this->authorize('create', Post::class);
        // if(Auth::guard('company')){
        //     return redirect()->route('company_show_login');
        // }

        $data = array_merge([
            'author_id' => auth()->guard('company')->id(),
            'status' => Status::DRAFT,
        ], $request->all());

        $post = Post::create($data);

        $post->categories()->sync($request->get('categories'));
        $post->locations()->sync($request->get('location'));

        return redirect()->back()->with('success', 'jobs created successfully');


        // $request->validate([

        //     'status' =>['required'],
        //     'title' => ['required'],
        //     'salary' => ['required'],
        //     'position' => ['required'],
        //     'address' => ['required'],
        //     'job_responsibilities' => ['required'],
        //     'required_skills' => ['required'],
        //     'deadline' => ['required'],
        //     'vacancy' => ['required'],

        // ]);


        // $posts = new Post();

        // $posts->title = $request->title;
        // $posts->salary = $request->salary;
        // $posts->position = $request->position;
        // $posts->address= $request->address;
        // $posts->job_responsibilities = $request->job_responsibilities;
        // $posts->required_skills = $request->required_skills;
        // $posts->deadline = $request->deadline;
        // $posts->vacancy= $request->vacancy;

        // $post->save();



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {

        // dd(auth()->guard('company')->user());
        // dd($post->company);
        // Gate::allows('edit-post', $post);
        // $this->authorize('update', $post);

   

        $locations = Location::all();
        $categories = Category::all();

        return view('company.jobpost.edit', compact('post', 'locations', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
