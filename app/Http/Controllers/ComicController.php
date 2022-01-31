<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->paginate(4);
        
        return view('comics.home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate($this->getValidData(), $this->getMessageError());
        
        $data = $request->all();

        $new_comic = new Comic();
        $new_comic->slug = Str::slug($data['title'], '-');
        $new_comic->fill($data);
        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if ($comic){
          return view('comics.show', compact('comic'));  
        }
        abort(404, 'Fumetto non trovato nel database!');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if ($comic){
            return view('comics.edit', compact('comic'));  
        }
        abort(404, 'Fumetto non trovato nel database!');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate($this->getValidData(), $this->getMessageError());
        
        $data = $request->all();

        $data['slug'] = Str::slug($data['title'], '-');
        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', "Comic $comic->title has been deleted!");
    }



    //funzioni custom
    public function getValidData(){
        return [
            'title'=>"required|max:100",
            'description'=>"min:3",
            'image'=>"required",
            'price'=>"required|numeric|between:0,99.99",
            'series'=>"required|max:50",
            'sale_date'=>"required|date|max:20",
            'type'=>"required|max:50"  
        ];
    }

    public function getMessageError(){
        return [
            'title.required'=>'The title is compulsory',
            'title.max'=>'The title is too long',
            'description.min'=>'The description is too short',
            'image.required'=>'Image URL is compulsory',
            'price.required'=>'The price is compulsory',
            'price.numeric'=>'The price must be a number',
            'price.between'=>'The price has to be set between 0 and 99.99',
            'series.required'=>'Series is compulsory',
            'series.max'=>'Series is too long',
            'sale_date'=>'The date of sale is compulsory',
            'sale_date'=>'The date of sale is too long',
            'type.required'=>'Type is compulsory',
            'type.max'=>'Type is too long'

        ];
    }
}
