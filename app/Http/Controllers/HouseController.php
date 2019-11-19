<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Models
use App\House;
use App\Contact;
use App\Category;
use App\Location;

class HouseController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function list()
    {
        $houses = House::all();
        $contact = Contact::first();
        $id = null;

        $data = [
            'houses' => $houses,
            'contact' => $contact,
            'id' => $id
        ];

        return view('property-list', $data);
    }

    public function show($id)
    {
        $house = House::find($id);
        $contact = Contact::first();

        $data = [
            'house' => $house,
            'contact' => $contact
        ];

        return view('property-description', $data);
    }

    public function listByCat($id)
    {
        $houses = House::where('category_id', $id)->get();
        $contact = Contact::first();
        $category = Category::find($id);
        $title_page = 'Kategori '.ucwords($category->name);

        $data = [
            'houses' => $houses,
            'contact' => $contact,
            'title_page' => $title_page,
            'id' => $id,
            'type' => 'category'
        ];

        return view('property-list', $data);
    }

    public function listByLoc($id)
    {
        $houses = House::where('location_id', $id)->get();
        $contact = Contact::first();
        $location = Location::find($id);
        $title_page = 'Lokasi '.ucwords($location->name);

        $data = [
            'houses' => $houses,
            'contact' => $contact,
            'title_page' => $title_page,
            'id' => $id,
            'type' => 'location'
        ];

        return view('property-list', $data);
    }
}
