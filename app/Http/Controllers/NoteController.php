<?php

namespace App\Http\Controllers;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class NoteController extends Controller
{
    public function create(){
        return view('notes.create');
    }

    public function store(Request $request){

        //Validation
        $request->validate([
          'content' => 'required|string',
        
        ]);
  
  
  
        Note::create([
          'content' => $request->content,
          'user_id' => Auth::user()->id,
  
        ]);
        return redirect(route('books.index'));
      }
}
