<?php

namespace App\Http\Controllers;
use JWTAuth;
use App\Task;
use Socialite; 
use Facebook;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;


class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){

    }

    public function post(Request $request)
    {
        $fb = new Facebook\Facebook([
            'app_id' => '951003058385926',
            'app_secret' => 'ba4c7c5f81ba7b36484b3ee09f7cef91',
            'default_graph_version' => 'v2.10',
            'default_access_token' => 'EAANg7qd5tAYBAESMauFIXeIVy1HHo77w4tQGSNYEPPO6YkpCvQkY5L2K8UcK7bNiDn54nbLPZAVtyQbtER9FCrHurZAGdmQHAPJYZBl1KLqtpGagKhiYGZCw2xebrqWMI4rB4PS80sd2ZAGeDxESDrnljYP8OYljijyNSAE51WuPQYI7H9On9VELXI9zEvh4Fq0TXGZCU97wZDZD', // optional
          ]);     

          $link = $request->input('href');
          $message = $request->input('title');
          
          $linkData = [
            'link' => $link,
            'message' => $message,
        ];
          
            try {
                // Returns a `Facebook\FacebookResponse` object
                $response = $fb->post('/me/feed', $linkData, 'EAANg7qd5tAYBAESMauFIXeIVy1HHo77w4tQGSNYEPPO6YkpCvQkY5L2K8UcK7bNiDn54nbLPZAVtyQbtER9FCrHurZAGdmQHAPJYZBl1KLqtpGagKhiYGZCw2xebrqWMI4rB4PS80sd2ZAGeDxESDrnljYP8OYljijyNSAE51WuPQYI7H9On9VELXI9zEvh4Fq0TXGZCU97wZDZD');
              } catch(Facebook\Exceptions\FacebookResponseException $e) {
                echo 'Graph returned an error: ' . $e->getMessage();
                exit;
              } catch(Facebook\Exceptions\FacebookSDKException $e) {
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                exit;
              }
        
        $graphNode = $response->getGraphNode();
        
        return response()->json($graphNode['id']); 

    }
    

}