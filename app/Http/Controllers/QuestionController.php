<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question= Question::all();
        //
        // return view('backend.questions.questiondisplay',['question'=>$data]);
        return view('backend.questions.questiondisplay',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.questions.question');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $req)
    {
        //
        $req->validate([
            'title' => 'required',
            'desc' => 'required',
            'type' => 'required',
            'status' => 'required',
            'position' => 'required',
        ]);

        // dd($req->all());
        $data = new Question; 
        $data->title=$req->title;
        $data->desc=$req->desc;
        $data->type=$req->type;
        $data->status=$req->status;
        $data->position=$req->position;
        $data->save();
        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */

    public function show(Question $question)
    {
        //


        

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        
        $data= Question::find($id);
        $data->delete();
        return redirect()->route('question.show');


        // $data =Question::where('id',$id)->firstOrFail();
        // $data->delete();
        // return redirect()->with(['message'=> 'Successfully deleted!!']);

        
    }
}
