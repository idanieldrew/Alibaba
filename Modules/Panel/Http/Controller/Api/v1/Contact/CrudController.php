<?php

namespace Module\Panel\Http\Controller\Api\v1\Contact;

use App\Http\Controllers\Controller;
use Module\Contact\Entity\Contact;
use Module\Contact\Http\Resources\v1\ContactResource;

class CrudController extends Controller
{
    public function index()
    {
        $info = Contact::all();
dd(new ContactResource($info));
        return new ContactResource($info);
    }
}