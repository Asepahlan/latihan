<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use Illuminate\Support\Facades\Redirect;

class MemberController extends Controller
{
    //member
    function index(){
        $data ['member'] = member::all();
        return view('member.member', $data);
    }

    function searchMember(Request $req){
        $where = array(
            'nama'=>$req->cari
        );

        $data['member'] = member::where
        ('nama', 'like', '%', $req->cari .'%')->orwhere
        ('email', 'like', '%', $req->cari.'%')->get();
        return view('member.member', $data);
    }

    function addmember(){
        $data = [
            'nama' => '',
            'email' => '',
            'nohp' => '',
            'id' => '',
            'foto' => '',
            'action' => url('/member/create'),
            'tombol' => "SIMPAN"
            ];
        return view('member.addMember',$data);
    }

    function createMember(Request $req){
        if($req->hasFile('foto')){
            $foto = $req->file('foto')->store('image');
        }else{
            $foto = "";
        }

        $data = [
            'nama'=>$req->nama,
            'email'=>$req->email,
            'nohp'=>$req->nohp,
            'foto'=>$foto
        ];
        member::create($data);
        return redirect('/member');
    }

    function deleteMember(Request $req){
        $delete = member::where('id', $req->id)->delete();
        if ($delete) {
            return Redirect('/member')->with('pesan', 'Data Berhasil di Hapus');
        }else{
            return redirect('/member')->with('pesan', 'Data Gagal di Hapus');
        }
    }

    function editMember(Request $req){
    $edit = member::find($req->id);
    $data = [
        'nama' => $edit->nama,
        'email' => $edit->email,
        'nohp' => $edit->nohp,
        'id' => $edit->id,
        'foto' => $edit->foto,
        'action' => url('/member/update').'/'.$edit->id,
        'tombol' => "UPDATE"
        ];

        return view('member.addMember',$data);
    }

    function updateMember( Request $req){

        $data = [
            'nama'=>$req->nama,
            'email'=>$req->email,
            'nohp'=>$req->nohp,
        ];

        if($req->hasFile('foto')){
            $data['foto'] = $req->file('foto')->store('image');

        }
        member::where('id', $req->id)->update($data);
        return redirect('/member');
    }

//     function create(){
//         return view('create');
//     }
}
