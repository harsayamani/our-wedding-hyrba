<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Models\Ucapan;

class HomeController extends Controller
{
    public function homeIndex() {
        return \redirect('/invitation/to/');
    }

    public function invitationIndex(string $name) {
        $ucapan = Ucapan::orderBy('created_at', 'desc')->paginate(10);
        return \view('home-dashboard', compact('name', 'ucapan'));
    }

    public function invitationWelcome(string $username = null) {
        $name = 'Tamu Undangan';
        try {
            if($username != null) {
                $tamu = Tamu::where('username', $username)->first();
                if($tamu) {
                    $name = $tamu->name;
                }
            }
            return \view('welcome', compact('name'));
        }catch(Exception $e) {
            return \view('welcome', compact('name'));
        }
    }

    public function sendWishes(Request $request) {
        $name = $request->name;
        $wishes = $request->wishes;

        $check = Ucapan::where('name', $name)->get()->count();
        if($check > 0) {
            return response()->json([
                'err'=> true,
                'message' => 'Whises already sent!'
            ], 400);
        }

        $ucapan = new Ucapan();
        $ucapan->name = $name;
        $ucapan->ucapan = $wishes;
        if($ucapan->save()) {
            return response()->json([
                'err'=> false,
                'name' => $name,
                'wishes' => $wishes
            ], 200);
        }
    }

    public function generateInvitationLinkIndex() {
        return \view('invitation-link');
    }

    public function generateInvitationLink(Request $request) {
        $name = $request->name;
        $link = '';
        $check = Tamu::where('name', $name)->get();
        if($check->count() < 1) {
            $username = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 12);
            $tamu = new Tamu();
            $tamu->name = $name;
            $tamu->username = $username;
            $tamu->address = 'Tempat';
            if($tamu->save()) {
                $link = 'https://balqis-harsa.life/invitation/to/'.$username.'';
            }
        } else {
            $link = 'https://balqis-harsa.life/invitation/to/'.$check[0]->username.'';
        }
        return response()->json([
            'err'=> false,
            'link' => $link,
            'name' => $name
        ], 200);

    }
}
