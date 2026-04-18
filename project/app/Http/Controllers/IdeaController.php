<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $ideas = session()->get('ideas', []);

        // $ideas = \Illuminate\Support\Facades\DB::table('ideas')->get();
        
        $ideas = idea::all();
        // $ideas = idea::find(1);
        // $ideas = idea::where('state', 'pending')->get();
        // $ideas = idea::query()
        //     ->when(request('state'), function($query, $state) {
        //         // dd($state);
        //         $query->where('state', $state);
        //     })
        //     ->get();

        // dd($ideas);
        
        // return $ideas;
        // return $ideas[0];
        // return $ideas[0]->description;

        return view('ideas/index', [
	    'ideas' => $ideas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('ideas/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $idea = request('idea');

        // session()->push('ideas', $idea);

        idea::create([
            'description' => request('description'),
            'state' => 'pending',
        ]);

        return redirect('/ideas');
    }

    /**
     * Display the specified resource.
     */
    public function show(idea $idea)
    {
        // dd($id);
        // $idea = idea::find($id);

        if (is_null($idea)) {
            abort(404);
        }

        // return $idea;
        return view('ideas/show', [
	   'idea' => $idea,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(idea $idea)
    {
         return view('ideas/edit', [
	    'idea' => $idea,
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, idea $idea)
    {
        $idea->update([
            'description' => request ('description')
        ]);
        return redirect ('/ideas/' . $idea->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(idea $idea)
    {
        $idea->delete();

        return redirect('/ideas');
    }

    /**
     * Remove all ideas.
     */
    public function deleteIdeas()
    {
        // session()->forget('ideas');
        idea::truncate();

        return redirect('/ideas');
    }
}
