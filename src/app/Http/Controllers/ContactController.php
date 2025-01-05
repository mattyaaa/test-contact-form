<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only([
            'first_name',
            'last_name', 
            'gender',
            'email',
            'phone1',
            'phone2',
            'phone3',
            'address',
            'building',
            'inquiry_type',
            'content']);
        $contact['tel'] = $contact['phone1'] . $contact['phone2'] . $contact['phone3'];
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only([
            'first_name',
            'last_name', 
            'gender',
            'email',
            'tel',
            'address',
            'building',
            'inquiry_type',
            'content']);
        Contact::create($contact);
        return view('thanks');
    }

}