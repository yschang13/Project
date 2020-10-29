<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadedImage;

class UploadImageController extends Controller
{
    public function index() {
        $images = UploadedImage::all();
        
       return view('pages.uploadimage',compact('images')) ;
       
        }
    public function upload(Request $request){    //上傳功能
         $path = $request->file('fileToUpload')->store('public');
        UploadedImage::insert(["filename"=>basename($path)]);
        return redirect('uploadimg'); //確認選取完圖片回到 原本資料不會不見
    }  
    //上傳照片  未 完 成!!
        
}
