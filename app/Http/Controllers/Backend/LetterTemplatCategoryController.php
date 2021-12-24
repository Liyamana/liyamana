<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\LettersTemplateCategory;

class LetterTemplatCategoryController extends Controller
{
    public function index()
    {
        return view('backend.template_categories.index');
    }

    public function update(Request $request)
    {
        LettersTemplateCategory::where('id',$request->id)->update([
            'category_name' => $request->category_name,
            'feature_image' => $request->feature_image,
            'status' => $request->published,
            'features' => $request->features,
            'description' => $request->description,
            'icon' => $request->icon,
            'order' => $request->order,
        ]);
        return redirect()->route('admin.letter_template_categories.index')
            ->withFlashSuccess('Template Categories Edited');
    }

    public function delete($id)
    {
        LettersTemplateCategory::where('id',$id)->delete();
        return back()->withFlashSuccess('Template Categories Deleted');
    }

    public function edit($id)
    {
        $details =  LettersTemplateCategory::where('id',$id)->first();
        return view('backend.template_categories.edit',[
            'category_details' => $details
        ]);
    }

    public function store(Request $request)
    {
        $categories = new LettersTemplateCategory;
        $categories->category_name = $request->category_name;
        $categories->feature_image = $request->feature_image;
        $categories->status = $request->published;
        $categories->features = $request->features;
        $categories->description = $request->description;
        $categories->icon = $request->icon;
        $categories->order = $request->order;
        $slugpane =  str_replace(' ', '-', $request->category_name).'-'.rand(1000,10000);
        $categories->slug = $slugpane;
        $categories->save();

        return redirect()->route('admin.letter_template_categories.index')
            ->withFlashSuccess('Template Categories Created');

    }

    public function create()
    {
        return view('backend.template_categories.creator');
    }

    public function get_details(Request $request)
    {
        if($request->ajax())
        {
            $data = LettersTemplateCategory::all();
            return DataTables::of($data)
                ->addColumn('action', function($data){

                    $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                    $button1 = '<a href="'.route('admin.letter_template_categories.edit',$data->id).'" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                    return $button1.' '.$button;
                })
                ->editColumn('icon',function ($data){

                    if($data->icon == 'empty'){
                        return '<div style="text-align: center"> Empty Icon</div>';
                    }else{
                        return '<div style="text-align: center"><i style="font-size: 30px;padding: 4px;background-color: #ffffff;border-radius: 13px;" class="'.$data->icon.'"></i></div>';

                    }

                })
                ->editColumn('status',function ($data){

                    if($data->status == 1){
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
}
