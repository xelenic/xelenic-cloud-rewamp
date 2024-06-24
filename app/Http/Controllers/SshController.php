<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpseclib3\Net\SSH2;
class SshController extends Controller
{
    public function executeCommand(Request $request)
    {
        $host = $request->input('host');
        $username = $request->input('username');
        $password = $request->input('password');
        $command = $request->input('command', 'whoami');

        // Establish SSH connection
        $ssh = new SSH2($host);

        if (!$ssh->login($username, $password)) {
            return response()->json(['message' => 'Login Failed'], 500);
        }

        // Execute a command
        $output = $ssh->exec($command);

        return response()->json(['output' => $output]);
    }

    public function product()
    {
        $array = [
            'name' => 'Product 1',
            'price' => 100,
            'description' => 'This is a product description',
            'sku'=> '443'
        ];
        return response()->json($array);
    }

}
