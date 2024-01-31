<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('site.contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:254',
            'email' => 'required|email|max:254',
            'subject' => 'required|string|max:254',
            'message' => 'required|string',
        ]);

        try {
            Contact::query()->create($data);

            return back()->with('success', 'Menssagem enviada com sucesso!');
        } catch (\Throwable $th) {
            return back()->with('error', 'Ocorreu um erro na hora de enviar a menssagem, por favor tenten novamente!');
        }
    }

    public function show()
    {
        return view('contatc.index',[
            'contacts' => Contact::query()->latest()->paginate()
        ]);
    }
}
