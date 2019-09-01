<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tweet;
use App\Http\Resources\Tweet as TweetResource;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
       
        $tweets = Tweet::paginate(3);
        
        return TweetResource::collection($tweets);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tweet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $tweet = new Tweet();
        $data = $this->validate($request, [
            'content',
            'retweets',
            'likes',
            'account',
            'localizacao',
            'criacao'
        ]);
       
        $tweet->saveTweet($data); /** Salva os dados na tabela tweets usando o método saveTweet que está em 
        app\Tweet.php **/
        
    }
    
   
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
   public function show ($id)
    {
        return new TweetResource(Tweet::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
    {
    
    }
    
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tweet  $tweet
     * @return \Illuminate\Http\Response
     */
    
    public function destroy($id)
    {
        
    }
}

