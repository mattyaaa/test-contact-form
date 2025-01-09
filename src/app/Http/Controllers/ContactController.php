<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
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
        $contact['category_id'] = Category::where('content', $contact['inquiry_type'])->first()->id;
        Contact::create($contact);
        return view('thanks');
    }

}