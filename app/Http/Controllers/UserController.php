<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserController extends Controller
{

    public function datauser()
    {
        $data = User::get();
        return view('welcome', compact('data'));
    }

    public function scan(Request $request)
    {
        return view('scan');
    }

    public function generate($id)
    {
        $emp = User::findOrFail($id);
        $qrcode = QrCode::size(400)->generate($emp->email);
        return view('qrcode', compact('qrcode'));
    }

    public function scanpost(Request $request)
    {
        $user = User::where('email', $request->data)->first();
        // dd($user->email);
        if ($user) {
            User::create([
                'name' => 'name',
                'email' => 'email@email.com',
                'password' => bcrypt('password')
            ]);
            return 1;
        } else {
            return 2;
        }
    }
}
