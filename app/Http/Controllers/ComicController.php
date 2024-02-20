<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = $this->validation($request->all());

        $comic = new Comic();
        /* $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type']; */

        $comic->fill($form_data);

        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);
        return view('single', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::find($id);
        return view('edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $form_data = $this->validation($request->all());

        $comic = Comic::find($id);
        /*  $comic->title = $form_data['title'];
        $comic->description = $form_data['description'];
        $comic->thumb = $form_data['thumb'];
        $comic->price = $form_data['price'];
        $comic->series = $form_data['series'];
        $comic->sale_date = $form_data['sale_date'];
        $comic->type = $form_data['type']; */

        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comic::find($id);

        $comics->delete();

        return redirect()->route('comics.index');
    }

    private function validation($data)
    {

        $validator = Validator::make(
            $data,
            [
                'title' => 'required|max:60',
                'description' => 'required|',
                'thumb' => 'required|',
                'price' => 'required|max:20',
                'series' => 'required|max:50',
                'sale_date' => 'required|',
                'type' => 'required|max:20'
            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.max' => 'Il titolo non può superare i 60 caratteri',
                'description.required' => 'la descrizione è obbligatoria',
                'thumb.required' => 'SRC è obbligatoriO',
                'price.required' => 'Il prezzo è obbligatorio',
                'price.max' => 'Il prezzo non può superare i 20 caratteri',
                'series.required' => 'la serie è obbligatoria',
                'series.max' => 'la serie non può superare i 50 caratteri',
                'sale_date.required' => 'la data è obbligatoria',
                'type.required' => 'il tipo è obbligatorio',
                'type.max' => 'il tipo non può superare i 20 caratteri',
            ]
        )->validate();

        return $validator;
    }
}
