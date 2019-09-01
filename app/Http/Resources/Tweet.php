<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tweet extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
   public function toArray($request)
   {
       return [
            'type' => 'tweet',
            'id' => (string) $this->id,
            'attributes' => [
            'content' => $this->content,
		    'retweets' => $this->retweets,
		    'likes' => $this->likes,
		    'account' => $this->account,
		    'localizacao'=> $this->localizacao,
		    'criacao'=> $this->criacao,	
            'created_at' => $this->created_at,
            'deleted_at' => $this->deleted_at,
           ]
           
        ];
    }

    public function with($request)
    {
      return ['included' => [new TweetResource($this->tweet)]];
    }
}
