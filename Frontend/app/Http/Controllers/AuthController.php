<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
class AuthController extends Controller
{

    public function CheckAuth(){


        if (session()->exists('access_token')) {
            // return $next($request);

        }
        // session()->forget('access_token');
          // return redirect(route('dashboard'));
    }
    public function DestroySession(){

        session()->forget('access_token');
        session()->forget('username');
        session()->forget('name');
        session()->forget('address');
        session()->forget('bod');
        session()->forget('email');
          // return redirect(route('dashboard'));
    }
    //
    public function register(Request $request)
    {
        // dd($request->all());

        $response = Curl::to('http://localhost:8080/api/auth/register')
        ->withData( array( 'username' => $request->username, 'password' => $request->password, 'name' => $request->name, 'address' => $request->address, 'bod' => $request->bod, 'email' => $request->email ) )
        ->asJson()
        ->post();
        dd($response);

        // $response = Curl::to('http://localhost:8080/api/skills')
        // ->withHeader('Authorization: Bearer 3|jMnZeoGTPYNNtKAaOWVQogCo1xb5DUpSKeBWtczK')
        // ->asJson(true)
        // ->get();
        // dump($response);
        // foreach ($response as $res) {
        //     # code...
        //     dump($res->skillName);
        // }
        // $response = Curl::to('https://jsonplaceholder.typicode.com/posts')
        // ->returnResponseObject()->get();
        // dd($response);
        // $endpoint = "http://localhost:8080/api/skills";
        // $client = new Client();
        // $id = 5;
        // $value = "ABC";

        // $response = $client->request('GET', $endpoint, [
        //     'headers' => [ 'Authorization' => 'Bearer 3|jMnZeoGTPYNNtKAaOWVQogCo1xb5DUpSKeBWtczK' ],
        // ]);
        

        // url will be: http://my.domain.com/test.php?key1=5&key2=ABC;

        // $statusCode = $response->getStatusCode();
        // $content = $response->getBody();
        // $response = json_decode($request->getBody());
        // dd($response['data'][0]['id']);
    }

    // public function skills()
    // {

    //     $response = Curl::to('http://localhost:8080/api/skills')
    //     ->withHeader('Authorization: Bearer 5|ZEpfOr13fWeHRJnBdPh6WO8dJuobdg2HB6gQpERw')
    //     ->asJson(true)
    //     ->get();
    //     dd($response);
    // }

    public function login(Request $request)
    {
        // dd($request->all());
        $response = Curl::to('http://localhost:8080/api/auth/login')
        ->withData( array( 'username' => $request->username, 'password' => $request->password ) )
        ->asJson()
        ->post();
        // dd($response->access_token);

        session(['access_token' => $response->access_token]);

        $responseProfile = Curl::to('http://localhost:8080/api/auth/profile')
        ->withHeader('Authorization: Bearer '.$response->access_token)
        ->asJson()
        ->get();
        // dd($responseProfile);

        $username = $responseProfile->username;
        $name = $responseProfile->name;
        $address = $responseProfile->address;
        $bod = $responseProfile->bod;
        $email = $responseProfile->email;

        session(['username' => $username]);
        session(['name' => $name]);
        session(['address' => $address]);
        session(['bod' => $bod]);
        session(['email' => $email]);
        // dd($email);

        return redirect('/dashboard')
        ;
    }
}
