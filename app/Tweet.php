<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{

/** Variavel “fillable” com array com os campos que serão inseridos aqui. **/

    protected $fillable = ['content','retweets','likes','account','localizacao','criacao'];
    protected $guarded = ['id','created_at', 'update_at'];
    protected $table = 'tweets';


      public function saveTweet($data)
	{
		
		$this->content = $data['content'];
		$this->retweets = $data['retweets'];
		$this->likes = $data['likes'];
		$this->account = $data['account'];
		$this->localizacao = $data['localizacao'];
		$this->criacao = $data['criacao'];
		$this->save();
		return 1;
	}
	
}
