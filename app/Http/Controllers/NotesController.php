<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    public function listAll(){
        $notes = Notes::get_all_notes();

        return $notes;
    }

    public function listNote($id){
        $note = Notes::get_single_note($id);

        return $note;
    }


    public function addAction(Request $request){
        $noteTitle = $request->input('title');
        $noteBody = $request->input('body');

        $noteId = Notes::insert_note($noteTitle, $noteBody);

        return $noteId;
    }


    public function editAction($id, Request $request){
        $noteTitle = $request->input('title');
        $noteBody = $request->input('body');

        Notes::update_note($id, $noteTitle, $noteBody);

        return 'Editada!';
    }

    public function deleteAction($id){
        Notes::delete_note($id);

        return 'Deletada!';
    }

}
