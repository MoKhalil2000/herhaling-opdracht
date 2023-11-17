<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongContrller extends Controller
{
 // Zorg ervoor dat je het juiste model importeert

public function index()
{
    // Haal alle songs op uit de database
    $songs = Song::all();
   

    // Geef de lijst van titels door aan de view
    return view('song', ['songs' =>$songs]);
}
public function show($id)
{
    // Haal de song op basis van het meegegeven id
    $song = Song::find($id);

    // Controleer of de song is gevonden


    // Geef de details van de song door aan de view
    return view('show',['title'=>$song->title ,'singer'=>$song->singer , 'song'=>$id ]);
}
public function create()
{
    return view('create');
}

public function store(Request $request)
{
    // Valideer de invoer
    $newsong = $request->validate([
        'title' => 'required|string|max:255',
        'singer' => 'required|string|max:255',
    ]);

   Song::create($newsong);

    // Redirect naar de lijst van songs of een andere pagina
    return redirect('/song');
}
public function destroy($id)
{
         //$songs->delete();
         $song = Song::find($id);
         $song->delete();
        // Haal alle songs op uit de database
        $songs = Song::all();
   

        // Geef de lijst van titels door aan de view
        return view('song', ['songs' =>$songs]);
} 
public function edit($id)
{
    $song = Song::find($id);
    return view('edit',['id' => $id,'title'=>$song->title ,'singer'=>$song->singer,'song'=> $song]);
}
public function update(Request $request, $id)
{

    $song = Song::find($id);
    // Valideer de invoer
    $request->validate([
        'title' => 'required|string|max:255',
        'singer' => 'required|string|max:255',
        // Voeg hier andere validatieregels toe voor andere velden
    ]);

    // Werk het nummer bij
        $song->title = $request->input('title');
        $song->singer = $request->input('singer');
        // Voeg hier andere velden toe


    $song->save();

    return redirect('/song')->with('success', 'Song is succesvol bijgewerkt.');
}


}

    /**
     * Show the form for creating a new resource.
     */
 
//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
       
//         $songNaam = $request->input('title');
//         $nummers = ['Living on prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];

//         $nummers[] = $songNaam;
        
//         session(['song' => $nummers]);
//         return redirect('/song');
//     }

      
//     /**
//      * Display the specified resource.
//      */
    //     public function show(Request $request, $index)
    // {
    //     $nummers = ['Living on a Prayer', 'Nothing Else Matters', 'Thunderstruck', 'Back in Black', 'Ace of Spades'];
    
    //     // Controleer of de opgegeven index binnen de grenzen van de array valt
    //     if ($index >= 0 && $index < count($nummers)) {
    //        $nummer = $nummers[$index];
    //          return view('show', ['index' => $index, 'nummer' => $nummer]);
    //     } else {
    //          return "Ongeldige index";

    //     }
     
    // }
//     /**
//      * Show the form for editing the specified resource.
//      */


//     /**return view('edit');
//      * Update the specified resource in storage.
//      */
//   

//     /**
//      * Remove the specified resource from storage.
//      */
   
