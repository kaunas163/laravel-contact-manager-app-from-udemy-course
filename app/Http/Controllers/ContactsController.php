<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    private $limit = 10;

    public function index(Request $request)
    {
        if ($group_id = ($request->get('group_id')))
        {
            $contacts = Contact::where('group_id', $group_id)->paginate($this->limit);
        }
        else
        {
            $contacts = Contact::paginate(10);
        }
        return view('contacts.index', compact('contacts'));
    }
}
