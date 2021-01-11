<?php

//php artisan make:controller ContactController для вывода ошибок на странице

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller{

    public function submit (ContactRequest $req) {
    //     $validation = $req->validate([
    //     'subject'=>'required|min:5|max:50', //проеверка поля 
    //     'message'=>'required|min:15|max:500'
    // ]);
        // dd($req);
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->message;

        $contact->save();

        return redirect()->route('homeD')->with('success', 'сообщение было добавлено');

    }

    public function allData() {
        // $contact = new Contact();  //можно записать как $contact = Contact::all();
        // $contact->all()
        $contact = new Contact;
        return view('messages', ['data'=> $contact->all()]); //inRandomOrder (//asc - по возрастанию в другую сторону) //$contact->orderBy('id','desc')->take(2)->get()
        //$contact->where('subject','=','hello'->get())
        //$contact->orderBy('id','desc')->get()
    }

    public function showOneMessage($id) {
        $contact = new Contact;
        return view('one-message', ['data'=> $contact->find($id)]);
    }

    public function updateMessage($id) {
        $contact = new Contact;
        return view('update-message', ['data'=> $contact->find($id)]);
    }

    public function updateMessageSubmit ($id, ContactRequest $req) {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->message;

        $contact->save();

        return redirect()->route('contactD-data-one', $id)->with('success', 'сообщение было обновлено');
    }
    public function deleteMessage($id) {
        $contact = Contact::find($id)->delete();
        return redirect()->route('contactD-data')->with('success', 'сообщение было удалено'); //inRandomOrder (//asc - по возрастанию в другую сторону) //$contact->orderBy('id','desc')->take(2)->get()
        
        }
}

