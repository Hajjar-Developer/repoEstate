<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Es;
use Auth;
use App\http\Requests\EsRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Arr;
use DB;
use DataTables;

class EsController extends Controller
{
    public function index(){
       $data = Es::latest()->paginate(3);
    	 return view('admin.es.index', compact('data'))
                       ->with('i', (request()->input('page', 1) - 1) * 3);

    }

     public function create(){
    	 return view('admin.es.add');
    }
     public function show($id)
    {
           $data = Es::findOrFail($id);
        return view('admin.es.view', compact('data'));
    }
//     public function store(EsRequest $esRequest,Es $es){
public function store(Request $request){
  $user=Auth::user();
          $request->validate([
              'es_name'=>'required|min:1|max:100',
             'es_price'=>'required', 
             'es_rent'=>'required|integer',
              'es_sequar'=>'required|min:2|max:100',
               'es_type'=>'required|integer', 
               'es_small_dis'=>'required|min:5|max:160',
                'es_meta'=>'required|min:5|max:200', 
                'es_langtuide'=>'required',
                 'es_latitude'=>'required',
                  'es_larg_dis'=>'required|min:5',
                   'es_status'=>'required|integer', 
                   'es_rooms'=>'required',
                   'es_place'=>'required',
                   'es_image'=>'required|image|max:2048',
        ]);

        $image = $request->file('es_image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
              'es_name'=>$request->es_name,
              'es_price'=>$request->es_price, 
              'es_rent'=>$request->es_rent,
              'es_sequar'=>$request->es_sequar,
              'es_type'=>$request->es_type, 
              'es_small_dis'=>$request->es_small_dis,
              'es_meta'=>$request->es_meta, 
              'es_langtuide'=>$request->es_langtuide,
              'es_latitude'=>$request->es_latitude,
              'es_larg_dis'=>$request->es_larg_dis,
              'es_status'=>$request->es_status,
              'user_id'=>$user->id,
              'es_rooms'=>$request->es_rooms,
              'es_place'=>  $request->es_place,
              'es_image'     =>  $new_name
        );

        Es::create($form_data);

        return redirect('/adminpannel/es')->with('success', 'Data Added successfully.');




      /*  $user=Auth::user();

        $data=[
              'es_name'=>$esRequest->es_name,
              'es_price'=>$esRequest->es_name, 
              'es_rent'=>$esRequest->es_rent,
              'es_sequar'=>$esRequest->es_sequar,
              'es_type'=>$esRequest->es_type, 
              'es_small_dis'=>$esRequest->es_small_dis,
              'es_meta'=>$esRequest->es_meta, 
              'es_langtuide'=>$esRequest->es_langtuide,
              'es_latitude'=>$esRequest->es_latitude,
              'es_larg_dis'=>$esRequest->es_larg_dis,
              'es_status'=>$esRequest->es_status,
              'user_id'=>$user->id,
              'es_rooms'=>$esRequest->es_rooms,
              'es_place'=>  $esRequest->es_place,
              'es_image'     =>  $new_name,
        ];
        $es->create($data);
        alert()->success('succesfull Add','will disappear after few seconds.');
        return redirect('/adminpannel/es')->withFlashMessage('succesfull estate Add');
        */
    }
    public function edit ($id){
        $data =Es::find($id);
        return view('admin.es.edit',compact('data','id'));
    }
    public function update(Request $request,$id){
$user=Auth::user();
    $image_name = $request->hidden_image;
        $image = $request->file('es_image');
        if($image != '')
        {
            $request->validate([
                 'es_name'=>'required|min:1|max:100',
             'es_price'=>'required', 
             'es_rent'=>'required|integer',
              'es_sequar'=>'required|min:2|max:100',
               'es_type'=>'required|integer', 
               'es_small_dis'=>'required|min:5|max:160',
                'es_meta'=>'required|min:5|max:200', 
                'es_langtuide'=>'required',
                 'es_latitude'=>'required',
                  'es_larg_dis'=>'required|min:5',
                   'es_status'=>'required|integer', 
                   'es_rooms'=>'required',
                   'es_place'=>'required',
                   'es_image'=>'required|image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'es_name'=>'required|min:1|max:100',
             'es_price'=>'required', 
             'es_rent'=>'required|integer',
              'es_sequar'=>'required|min:2|max:100',
               'es_type'=>'required|integer', 
               'es_small_dis'=>'required|min:5|max:160',
                'es_meta'=>'required|min:5|max:200', 
                'es_langtuide'=>'required',
                 'es_latitude'=>'required',
                  'es_larg_dis'=>'required|min:5',
                   'es_status'=>'required|integer', 
                   'es_rooms'=>'required',
                   'es_place'=>'required'
            ]);
        }

        $form_data = array(
          'es_name'=>$request->es_name,
              'es_price'=>$request->es_price, 
              'es_rent'=>$request->es_rent,
              'es_sequar'=>$request->es_sequar,
              'es_type'=>$request->es_type, 
              'es_small_dis'=>$request->es_small_dis,
              'es_meta'=>$request->es_meta, 
              'es_langtuide'=>$request->es_langtuide,
              'es_latitude'=>$request->es_latitude,
              'es_larg_dis'=>$request->es_larg_dis,
              'es_status'=>$request->es_status,
              'user_id'=>$user->id,
              'es_rooms'=>$request->es_rooms,
              'es_place'=>  $request->es_place,
              'es_image'     =>  $image_name
        );
  
        Es::whereId($id)->update($form_data);

        return redirect('/adminpannel/es')->with('success', 'Data is successfully updated');



      /*  $estateUpdated=Es::find( $id );
        $estateUpdated->fill('es_image')(arr::except($request->all(),['es_image']))->save();

        if($request->file('es_image')){
          $fileName=$request->file('es_image')->getClientOrginalName();
          $request->file()->move(base::path().'/public/website/es_images/', $fileName);
        }
        alert()->success('succesfull Update','will disappear after few seconds.');
        return Redirect::back()->withFlashMessage('succesfull Update');
*/
    }
    public function destroy($id){
    
          
           $data = Es::findOrFail($id);
        $data->delete();
        return redirect('/adminpannel/es')->withFlashMessage('succesfull delete','Data is successfully deleted');
            }

   /* public function anyData(Es $es)
    {

    
      $ess = $es->all();

        return DataTables::of($ess)

            ->editColumn('es_name', function ($model) {
                return '<a href="'.url('/adminpanel/es/' . $model->id . '/edit').'">'.$model->es_name.'</a>';
            })
            ->editColumn('es_type', function ($model) {
            	$type=es_type();
                return  '<span class="badge badge-info">' . $type[$model->es_type] . '</span>';
            })
   			->editColumn('es_status', function ($model) {
                return $model->es_status == 0 ? '<span class="badge badge-info">' . 'active' . '</span>' : '<span class="badge badge-warning">' . 'non active' . '</span>';
            })

          
            
            ->editColumn('control', function ($model) {
                $all = '<a href="' . url('/adminpanel/se/' . $model->id . '/edit') . '" class="btn btn-info btn-circle"><i class="fa fa-edit"></i></a> ';
                    $all .= '<a href="' . url('/adminpanel/es/' . $model->id . '/delete') . '" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a>';
                return $all;
            })
            ->make(true);

    }*/
    public function showAllEnable(Es $es){
        $esAll=$es->where('es_status',0)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
    }
     public function forRent(Es $es){
        $esAll=$es->where('es_status',1)->where('es_rent',1)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
    }
     public function forBuy(Es $es){
        $esAll=$es->where('es_status',0)->where('es_rent',0)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
    }
       public function forMortgage(Es $es){
        $esAll=$es->where('es_status',1)->where('es_rent',2)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
    }
    public function showByType($type , Es $es){
      if(in_array($type, ['0','1','2'])){
        $esAll=$es->where('es_status',1)->where('es_type',$type)->orderBy('id','desc')->paginate(15);
        return view('website.es.all',compact('esAll'));
      }
        else return Redirect::back();
    }

     public function search(Request $request,Es $es){


            $requestAll=Arr::except($request->toArray(),['submit','_token','page']);
            $query=DB::table('es')->select('*');
            $array=[];
            $cout=count($requestAll);
            $i=0;

            foreach ($requestAll as $key => $req) {
              $i++;
                if($req != '')
                {
                  if($key=='es_price_from' && $request->es_price_to =='')
                    $query->where('es_price','>=',$req);
                  elseif($key=='es_price_to' && $request->es_price_from =='')
                    $query->where('es_price','<=',$req);
                  else
                   { if($key!='es_price_to' && $key!='es_price_from')
                    $query->where($key,$req);
                    }
                    $array[$key]=$req;
                  
                    

                }
                 elseif($cout==$i && $request->es_price_to !='' && $request->es_price_from){ 
                $query->whereBetween('es_price',[$request->es_price_from , $request->es_price_to]);
                       $array[$key]=$req;
                  }   

              }
               
            $esAll=$query->paginate(15);   
        return view('website.es.all',compact('esAll','array'));
    }
    public function showSingle($id){
      $es=Es::find($id);

      $esinfo=Es::findOrFail($id);
      $same_rent=$es->where('es_rent',$esinfo->es_rent)->orderBy(DB::raw('RAND()'))->take(1)->get();
      $same_type=$es->where('es_type',$esinfo->es_type)->orderBy(DB::raw('RAND()'))->take(1)->get();
      
        return view('website.es.esinfo',compact('esinfo','same_rent','same_type'));
    }
    
}
