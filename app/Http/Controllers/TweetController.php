<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    public function index(){

        //Hole mir Alle Tweets aus der Datenbank
        $tweets = Tweet::all();

        // Daten in die View übergeben
        return view('tweets.index', [
            'tweets' => $tweets
        ]);
    }

    public function create(){ 
        return view('tweets.create');
    }


    // STORE TWEET 

    public function store(Request $request){

        // Erstelle einen Eintrag mit meinen Formulardaten in der Datenbank bzw. in der Datenbanktabelle tweets
        // Nutze dazu das Model "Tweet"
        
        // 1. Pulling the tweet and validate it to put it in the DB. 

        $validated = $request->validate([
            'title' => 'required|max:50|min:5',
            'text' => 'required |max:150|min:20',
        ]); 

        // Tweet ist validiert. 


        $tweet=Tweet::create([
        'title'=>$request->title,
        'text'=>$request->text,
        ]);

        // 2. Zurück zum index. 
        return redirect("tweets");

    }

    // Show delected tweet getting the ID from the DB.

    public function show($id){

        // $id = 4;

        // Einzelnen Tweet aus der DB holen und in Variabel $tweet speichern
        $tweet = Tweet::find($id);


        // Variabel an die View tweets.show übergeben


        return view('tweets.show', [
            'tweet' => $tweet
        ]);
    }

    // TWEET LÖSCHEN UND NACHER ZURÜCK IMDEX SITE.

    public function destroy($id) {
        $tweet = Tweet::find($id);
        $tweet -> delete();
        

    return redirect()->route('eingabe');

    }

    
    public function getTweet($id)
    {
        //Hole mir einen einzelnen Tweet (id) aus der Datenbank
        $tweet = Tweet::find($id);
        return view('tweet', 
        ['tweet' => $tweet]);
      
    }


}
    








       
    

