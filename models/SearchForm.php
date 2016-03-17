<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\authclient\clients\Twitter;
use yii\authclient\OAuthToken;
/**
 * LoginForm is the model behind the login form.
 */
class SearchForm extends Model
{
    public $tweet;
    public $answer;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
           
            ['tweet' , 'required']
           
        ];
    }

  
    public function GetTweets($attribute, $params)
    {
         die;
    }

     
    public function search()
    {
	$token = new OAuthToken([
    'token' => Yii::$app->params['twitterAccessToken'],
    'tokenSecret' => Yii::$app->params['twitterAccessTokenSecret']
	]);
 
 
	$twitter = new Twitter([
    'accessToken' => $token,
    'consumerKey' => Yii::$app->params['twitterApiKey'],
    'consumerSecret' => Yii::$app->params['twitterApiSecret']
	]);
 
     
	  $this->answer= array_shift  ($twitter->api('search/tweets.json', 'GET', $params = ['q'=> $this->tweet ,'count'=>100]));
	 return true;   
	}
 
  
}
