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

    public function edit($id)
    {

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
                    $button1 = '<a href="" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Edit</a>';
                    return $button1.' '.$button;
                })
                ->rawColumns(['action','image'])
                ->make(true);
        }
        return back();
    }
}
