<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\Http\Controllers\Controller;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return view('contact.index')->with('contact', $contact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,)
    {   

        // $validator = Validator::make($input = $request->all(), [
        //     'email' => 'required|unique:email|',
        // ]);
 
        // if ($validator->fails()) {
        //     echo '<div class="alert alert-danger" style="text-align: center;" role="alert">De email bestaat al. <p>Probeer een andere email.</p></div>';
        //     return redirect('create')->withErrors($validator)->withInput();
        // }else {
        //     Contact::create($input);
        //     return redirect('contact')->with('flash_message', 'contact toegevoegt');
        // }

        if (Contact::where('email', '=', $request->input('email'))->first()) {
            echo '<div class="alert alert-danger" style="text-align: center;" role="alert">De email bestaat al. <p>Probeer een andere email.</p></div>';
            return view('contact.create');

        } else {
            $input = $request->all();
            Contact::create($input);
            return redirect('contact')->with('flash_message', 'contact toegevoegt');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contact.show')->with('contact', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contact.edit')->with('contact', $contact);
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
        $contact = Contact::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('contact')->with('flash_message', 'contact geüpdatet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::destroy($id);
        return redirect('contact')->with('flash_message', 'contact verwijdert');
    }
}
