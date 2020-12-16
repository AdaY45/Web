<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Custom_field;
use App\Modules\Parser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::paginate(40);
        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }

    public function create() {
        $entity = $_GET['entity'];
        
        $field_brands = DB::table('fields')->orderBy('index')->where('field_name', 'brands')->get();
        $field_makeup = DB::table('fields')->orderBy('index')->where('field_name', 'makeup')->get();
        $field_care = DB::table('fields')->orderBy('index')->where('field_name', 'care')->get();
        $field_hair = DB::table('fields')->orderBy('index')->where('field_name', 'hair')->get();

        return view('admin.categories.create', [
            'category' => [],
            'categories' => Category::with('children')->where('parent_id','0')->get(),
            'delimiter' => '',
            'entity' => $entity,
            'field_brands' => $field_brands,
            'field_makeup' => $field_makeup,
            'field_care' => $field_care,
            'field_hair' => $field_hair
        ]);
    }

    public function store(Request $request) {
        $this->category = new Category();
        $this->custom = new Custom_field();
        DB::beginTransaction();
        try {
            $category = $this->category->create([
                'parent_id' => $request->get('parent_id'),
                'img' => "category" . $request->get('parent_id'),
                'aliasOf' => $request->get('aliasOf'),
                'title' => $request->get('title'),
                'content' => $request->get('content'),
                'entity' => $request->get('entity')
            ]);

            $fields = DB::table('fields')->orderBy('created_at')->get();

            foreach($fields as $field) {
                if($request->has($field->field)) {
                    $custom = $this->custom->create([
                        'category_id' => $category->id,
                        'field' => $field->field,
                        'value' => $request->get($field->field)
                    ]);
                    if($custom && $category) {
                        DB::commit();
                    } else {
                        DB::rollback();
                    }
                }
            }
            return redirect()->route('admin.category.index');
        } catch(Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.category.index');
        }

        
    }

    public function edit(Category $category) {
        return view('admin.categories.edit', [
            'category' => $category,
            'categories' => Category::with('children')->where('parent_id','0')->get(),
            'delimiter' => ''
        ]);
    }

    public function update(Request $request, Category $category) {
        $category->update($request->all());
        
        return redirect()->route('admin.category.index');
    }

    public function show($id) {
        if($id == 0) {
            $categories = Category::orderBy('created_at')->get();
        }else if($id > 0){
            $categories = Category::orderBy('created_at')->where('parent_id', $id)->get();
        } else if($id == -1) {
            $categories = Category::orderBy('id')->get();
        } else {
            $categories = Category::orderBy('updated_at')->get();
        }

        return view('admin.categories.index', [
            'categories' => $categories
        ]);
    }
    
    public function openCategory($id) {
        $category = Category::where('id',$id)->first();
        $fields = Custom_field::where('category_id',$category->id)->get();
        return view('oneCategory.oneCategory', [
            'category' => $category,
            'fields' => $fields
        ]);
    }

    public function type(){
        return view('admin.categories.type', [
            'categories' => Category::with('children')->where('parent_id','0')->get(),
            'entities' => DB::table('entities')->orderBy('id')->get()
        ]);
    }
}






