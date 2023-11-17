<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albums;


class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Albums::all();

        return view('albums.index', ['albums' => $albums]);
    }

    public function show($id)
    {
        $album = Albums::find($id);

        return view('albums.show',compact('album'));
    }
    public function edit($id)
    {
        $album = Albums::find($id);

        return view('Albums.edit', [
            'id' => $id,
            'name' => $album->name,
            'year' => $album->year,

        ]);
    }
    public function update(Request $request, $id)
    {
        // Validatie van de input
        $validatedData = $request->validate([
            'name' => 'required|string',
            'year' => 'required|integer|digits:4',
            'times_sold' => 'nullable|integer',
        ]);

        // Zoek het album in de database
        $album = Albums::find($id);

        // Update de velden met de nieuwe waarden
        $album->name = $validatedData['name'];
        $album->year = $validatedData['year'];
      

        // Sla de wijzigingen op
        $album->save();

        // Redirect naar de lijst met albums of een andere gewenste pagina
        return redirect()->route('albums.index')->with('success', 'Album is succesvol bijgewerkt');
    }
    public function create()
{
    return view('albums.create');
}

public function store(Request $request)
{
    // Valideer de invoer
    $newalbum = $request->validate([
        'name' => 'required|string',
        'year' => 'required|integer|digits:4',
        'times_sold' => 'nullable|integer',
    ]);

   Albums::create($newalbum);

    // Redirect naar de lijst van songs of een andere pagina
    return redirect()->route('albums.index')->with('success', 'Album is succesvol Aangemaakt');
}
    public function destroy($id)
{
        
         $album = Albums::find($id);
         $album->delete();
        // Haal alle songs op uit de database
        $albums = Albums::all();
   

        // Geef de lijst van titels door aan de view
        return view('albums.index', ['albums' =>$albums]);
} 
}
