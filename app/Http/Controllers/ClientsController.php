<?php
/**
 * Created by PhpStorm.
 * User: antonmartsyniuk
 * Date: 11/6/18
 * Time: 19:12
 */

namespace App\Http\Controllers;

use App\Clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Redirector;

class ClientsController extends Controller
{
    public function showAllClients()
    {
        return view('clients.all', ['clients' => Clients::on()->paginate(10)]);
    }

    public function showClient($id = false)
    {
        if ($id !== false) {
            return view('clients.client', ['client' => Clients::on()->findOrFail($id)]);
        }
        return  view('clients.client', ['client' => []]);
    }

    public function addOrUpdateClient(Request $request, $id = false)
    {
        if ($id !== false) {
            $client = Clients::on()->find($id);
        } else {
            $client = new Clients();
        }

        $client->first_name = $request->first_name;
        $client->last_name  = $request->last_name;
        $client->email      = $request->email;
        $client->password   = Hash::make($request->password);

        $client->save();
        return redirect()->action('ClientsController@showAllClients');
    }

    public function deleteClient($id)
    {
        Clients::on()->find($id)->delete();
        return redirect()->action('ClientsController@showAllClients');
    }
}