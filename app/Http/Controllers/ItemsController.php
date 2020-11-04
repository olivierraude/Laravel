<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Item;

class ItemsController extends Controller
{

    /**
     * @return response
     */

    public function index(){

        $title = "home";
        // User::create(['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => Hash::make('1234')]);
        // Auth::attempt(['email' => 'admin@admin.com', 'password' => '1234']);
        // Auth::logout();
        // dd(Auth::check());
        $labels = Item::whereRaw('year > 2019')->get();

        $items = Item::get();
        return view('items.index', compact('items', 'labels', 'title'));

    }

    public function show($id){

        $title = "title";

        $item = Item::findOrFail($id);
        return view('items.show', compact('item', 'title'));

    }

    public function edit($id){

        $title = "title";

        $item = Item::findOrFail($id);
        return view('items.edit', compact('item', 'title'));

    }

    public function update($id, Request $request){

        $item = Item::findOrFail($id);
        $validator = validator::make($request->all(), [
            'title'=>'required',
            'artist'=>'required',
            'label'=>'required',
            'year'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);

        if($validator->fails()){
            return redirect(route('items.edit', $id))->withErrors($validator->errors());
        } else {
            $item->update($request->all());
            return redirect(route('items.edit', $id));
        }

    }

    /**
     * @return response
     */

    public function create(){

        $title = "Nouvelle sortie";
        return view('items.create', compact('title'));

    }

    /**
     * @return response
     */

    public function store(Request $request){

        $validator = validator::make($request->all(), [
            'title'=>'required',
            'artist'=>'required',
            'label'=>'required',
            'year'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);

        if($validator->fails()){
            $item = $request->all();
            return redirect(route('items.create', $item))->withErrors($validator->errors());
        } else {
            $item = Item::create($request->all());
            return redirect(route('items.show', $item));
        }
    }

    public function destroy($id){

        $item = Item::findOrFail($id);
        $item->delete();
        return redirect(route('items.index'));
    }
}
