<?php

namespace App\Http\Controllers\Backend;
use App\Models\LettersTemplateCategory;
use DataTables;
use App\Http\Controllers\Controller;
use App\Models\MailTemplate;
use Illuminate\Http\Request;

class LetterTemplateController extends Controller
{
    public function index()
    {
        return view('backend.letter_templates.index');
    }

    public function delete($id)
    {
        MailTemplate::where('id',$id)->delete();
    }

    public function get_details(Request $request)
    {
        if($request->ajax())
        {
            $data = MailTemplate::all();
            return DataTables::of($data)
                ->addColumn('action', function($data){

                    $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    $button1 = '<a href="'.route('admin.letter_template_categories.edit',$data->id).'" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                    return $button1.' '.$button;
                })
                ->editColumn('status',function ($data){

                    if($data->is_purchased_status == 1){
                        return 'Enabled '.'<i class="fa fa-dot-circle" style="color: #00c509"></i>';
                    }else{
                        return 'Disabled '.'<i class="fa fa-dot-circle" style="color: #fe0e00"></i>';
                    }

                })
                ->rawColumns(['action','image','icon','status'])
                ->make(true);
        }
        return back();
    }

    public function create()
    {
        $letterCategories = LettersTemplateCategory::all();
        return view('backend.letter_templates.creator',[
            'letter_categories' => $letterCategories
        ]);
    }

}
