<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;


class BandsController extends Controller
{
    public function index()
    {
        $bands = Band::all();

        return view('bands.index', ['bands' => $bands]);
    }

    public function show($id)
    {
        $band = Band::find($id);

        return view('bands.show',compact('band'));
    }
    public function edit($id)
    {
        $band = Band::find($id);
        return view('bands.edit', [
            'id' => $id,
            'name' => $band->name,
            'genre' => $band->genre,
            'founded' => $band->founded,

        ]);
    }
    public function update(Request $request, $id)
    {
        // Validatie van de input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'founded' => 'required|string|max:255',
        ]);

        // Zoek het album in de database
        $band = Band::find($id);

        // Update de velden met de nieuwe waarden
        $band->name = $validatedData['name'];
        $band->genre = $validatedData['genre'];
        $band->founded = $validatedData['founded'];
      

        // Sla de wijzigingen op
        $band->save();

        // Redirect naar de lijst met albums of een andere gewenste pagina
        return redirect()->route('bands.index')->with('success', 'bands is succesvol bijgewerkt');
    }
    public function create()
{
    return view('bands.create');
}

public function store(Request $request)
{
    // Valideer de invoer
    $newband = $request->validate([
        'name' => 'required|string',
        'genre' => 'required|string',
        'founded' => 'required|string',
    ]);

   Band::create($newband);

    // Redirect naar de lijst van songs of een andere pagina
    return redirect()->route('bands.index')->with('success', 'Album is succesvol Aangemaakt');
}
    public function destroy($id)
{
        
         $band = Band::find($id);
         $band->delete();
        // Haal alle songs op uit de database
        $bands = Band::all();
   

        // Geef de lijst van titels door aan de view
        return view('bands.index', ['bands' =>$bands]);
} 
}
