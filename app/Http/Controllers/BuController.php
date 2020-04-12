<?php

namespace App\Http\Controllers;
use App\Bu;
use App\Http\Requests\BuRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuController extends Controller
{
    public function index(Bu $bul){
        $bul=$bul->all();
        return view('admin.bu.index',compact('bul'));
    }


    public function create(Bu $bul){

        return view('admin.bu.add',compact('bul'));
    }



    protected function store(BuRequest $request ,Bu $bul)
    {
        $user=Auth::user();
        \App\Bu::create([
            'bu_name' => $request->bu_name,
            'bu_square' => $request->bu_square,
            'bu_type' => $request->bu_type,
            'bu_meta' => $request->bu_meta,
            'bu_small_dis' => $request->bu_small_dis,
            'bu_price' => $request->bu_price,
            'bu_langtude' => $request->bu_langtude,
            'bu_latetude' => $request->bu_latetude,
            'bu_large_dis' => $request->bu_large_dis,
            'bu_rooms' => $request->bu_rooms,
            'bu_status' => $request->bu_status,
            'bu_rant' => $request->bu_rant,
            'user_id' => $user->id,

        ]);
        return redirect('/adminpanel/bu')->withFlashMassage('تمت اضافه العضو بنجاح ');
    }


    public function destroy($id,Bu $bu){
        $bu->find($id)->delete();
        return redirect('/adminpanel/bu')->withFlashMassage('تمت حذف العقار بنجاح ');
    }

    public function edit($id)
    {
        $bul=Bu::find($id);
        return view('admin.bu.edit',compact('bul'));
    }
    public function update(Request $request,$id)
    {
        Bu::find($id)->update($request->all());
        return redirect('/adminpanel/bu')->withFlashMassage('تمت التعديل العضو بنجاح ');

    }
    public function showallenable(Bu $bu){
        $buall=$bu->where('bu_status' ,'مفعل ')->orderBy('id','desc')->paginate(6);
        return view('website.bu.all',compact('buall'));
    }
    public function forrent(Bu $bu){
        $buall=$bu->where('bu_status' ,'مفعل ')->where('bu_rant' ,'ايجار ')->orderBy('id','desc')->paginate(6);
        return view('website.bu.all',compact('buall'));
    }
    public function forbay(Bu $bu){
        $buall=$bu->where('bu_status' ,'مفعل ')->where('bu_rant' ,'تمليك ')->orderBy('id','desc')->paginate(6);
        return view('website.bu.all',compact('buall'));

    }
    public function fortype($type, Bu $bu){
        if(in_array($type, ['شقه','فيله','شاليه'])){
            $buall=$bu->where('bu_status' ,'مفعل ')->where('bu_type' , $type)->orderBy('id','desc')->paginate(6);
            return view('website.bu.all',compact('buall'));
        }else{
            return redirect('/showallbulding')->withFlashMassage('هذا العقار غير مسجل لدينا ');
        }


    }
    public  function search(Request $request ,Bu $bu){
        $requestall =array_except($request->toArray(),['submit','_token']);
        $out='';
        $i =0;

        foreach ($requestall as $key =>$req){
          if ($req != ''){
               $where = $i== 0 ? " where " : " and ";
               $out .= $where. ' ' .$key.' = '.$req;
              $i=2;
    }
}
        $query ="select * from bu".$out;
        $buall=DB::select($query);

        $search='search';
      return view('website.bu.all',compact('buall' ,'search'));
    }


}
