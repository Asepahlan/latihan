<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProdukController extends Controller
{
        //member
        function index(){
            $data ['produk'] = produk::all();
            return view('produk.produk', $data);
        }

        function searchProduk(Request $req){
            $where = array(
                'nm_produk'=>$req->cari
            );

            $data['produk'] = produk::where('nm_produk', 'like', '%', $req->cari .'%')->orwhere('kd_produk', 'like', '%', $req->cari.'%')->get();
            return view('produk.produk', $data);
        }

        function addproduk(){
            $data = [
                'kd_produk' => '',
                'nm_produk' => '',
                'harga' => '',
                'deskripsi' => '',
                'image' => '',
                'kd_kategori' => '',
                'action' => url('/produk/create'),
                'tombol' => "SIMPAN"
                ];
            return view('produk.addproduk',$data);
        }

        function createProduk(Request $req){
            if($req->hasFile('image')){
            $image = $req->file('image')->store('image');
        }else{
            $image = "";
        }
            $data = [
                'kd_produk'=>$req->kd_produk,
                'nm_produk'=>$req->nm_produk,
                'harga'=>$req->harga,
                'deskripsi'=>$req->deskripsi,
                'gambar'=>$image,
                'kd_kategori'=>$req->kd_kategori
            ];
            produk::create($data);
            return redirect('/produk');
        }

        function deleteProduk(Request $req){
            $delete = produk::where('id', $req->id)->delete();
            if ($delete) {
                return Redirect('/produk')->with('pesan', 'Data Berhasil di Hapus');
            }else{
                return redirect('/produk')->with('pesan', 'Data Gagal di Hapus');
            }
        }

        function editProduk(Request $req){
            $edit = produk::find($req->id);
            $data = [
                'kd_produk' => $edit->kd_produk,
                'nm_produk' => $edit->nm_produk,
                'harga' => $edit->harga,
                'deskripsi' => $edit->deskripsi,
                'image' => $edit->gambar,
                'kd_kategori' => $edit->kd_kategori,
                'action' => url('/produk/update').'/'.$edit->kd_produk,
                'tombol' => "UPDATE"
                ];

                return view('produk.addProduk',$data);
            }

            function updateProduk( Request $req){
                $data = [
                    'kd_produk' => $req->kd_produk,
                    'nm_produk' => $req->nm_produk,
                    'harga' => $req->harga,
                    'deskripsi' => $req->deskripsi,
                    'kd_kategori' => $req->kd_kategori,
                ];

                if($req->hasFile('image')){
                    $data['image'] = $req->file('image')->store('image');

                }

                produk::where('kd_produk', $req->kd_produk)->update($data);
                return redirect('/produk');
            }

}
