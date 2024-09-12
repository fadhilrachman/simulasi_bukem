<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    //
      //
      function pageGetNews()  {
        $data = News::paginate(9);
        return view('dashboard.news',["data"=>$data]);
    }

    function pageCreateNews()  {
        return view('dashboard.news-create');
    }

    function createNews(Request $request)  {
      $data = new News();
      $data->title=$request->title;
      $data->news=$request->news;
      $data->save();
      Alert::success('Succes Menyimpan Data');

      return redirect()->route('news');
    }

    function updateNewsPage($id)  {
      $data =  News::find($id);
      return view('dashboard.news-update',['id'=>$id,"data"=>$data]);
    }
    
    function updateNews(Request $request,$id){
      $data = News::find($id);
      $data->title=$request->title;
      $data->news=$request->news;
      $data->save();
      Alert::success('Succes Menyimpan Data');

      return redirect()->route('news');

    }

    public function deleteNews($id)
    {
        $delet = News::find($id);

        $delet->delete();
        Alert::success('Succes Hapus Data');

        return redirect('/nilai');
    }

}
