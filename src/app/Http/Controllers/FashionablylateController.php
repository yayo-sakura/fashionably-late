<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class FashionablylateController extends Controller
{
    public function index()
  {
    return view('index');
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel_first', 'tel_second', 'tel_third' ,'address', 'building', 'select', 'detail']);
    return view('confirm', ['contact' => $contact]);
  }

  public function store(ContactRequest $request)
  {
  $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel_first', 'tel_second', 'tel_third' ,'address', 'building', 'select', 'detail']);
  Contact::create($contact);
    return view('thanks');
  }

  public function admin()
  {
    return view('admin');
  }

  public function register()
  {
    return view('register');
  }

  public function login()
  {
    return view('login');
  }


}
