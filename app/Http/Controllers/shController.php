<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;


class shController extends Controller
{
    //
    public function try(){

        return redirect('https://docs.google.com/document/d/1pRiHQeujNk_XLhTO_W_ZDEbtB6821zXfVh0F6FlUxoI/edit');
    }

    public function head(){

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'apikey'=>'ad34def1e9394b73b37aa8129237bb0f'
        ])->get('https://api.rebrandly.com/v1/links' );
        $data = json_decode($response->getBody(true)->getContents());
        return view('homepage', ['data'=>$data]);
    }

    public function add(Request $request){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'apikey'=>'ad34def1e9394b73b37aa8129237bb0f'
        ])->post('https://api.rebrandly.com/v1/links',[
            "title" => $request->title,
            "slashtag" => Str::random(7),
            "destination" => $request->url
            ] );
        $data = json_decode($response->getBody(true)->getContents());
        return $this->head();
    }

    public function delete($id){
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'apikey'=>'ad34def1e9394b73b37aa8129237bb0f'
        ])->delete("https://api.rebrandly.com/v1/links/$id",[
            "id" => $id
            ] );
        $data = json_decode($response->getBody(true)->getContents());
        return $this->head();
    }
}