<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            ['id' => 1, 'nama' => 'Demas Darrel Putra Andhyna', 'email' => 'darrel.gantenk.kesayangan.ibu&ayah@example.com', 'no_hp' => '081234567890'],
            ['id' => 2, 'nama' => 'Bunga Lestari', 'email' => 'bunga@example.com', 'no_hp' => '081298765432'],
            ['id' => 3, 'nama' => 'Citra Kirana', 'email' => 'citra@example.com', 'no_hp' => '081311112222'],
            ['id' => 4, 'nama' => 'Dimas Anggara', 'email' => 'dimas@example.com', 'no_hp' => '081322223333'],
            ['id' => 5, 'nama' => 'Eka Putri', 'email' => 'eka@example.com', 'no_hp' => '081344445555'],
        ];

        return view('members.index', compact('members'));
    }
}