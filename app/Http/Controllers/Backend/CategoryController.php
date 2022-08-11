<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
 
class CategoryController extends Controller
{
    public function CategoryView(){

    	$category = Category::latest()->get();
    	return view('backend.category.category_view',compact('category'));
    }

    public function CategoryStore(Request $request){

       $request->validate([
    		'category_name' => 'required',
    		'category_icon' => 'required',
    	],[
    		'category_name.required' => 'Entrez le nom de la catégorie',
    		
    	]);

    	 

	Category::insert([
		'category_name' => $request->category_name,
		
		'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
		'category_icon' => $request->category_icon,

    	]);

	    return redirect()
            ->route("all.category")
            ->with("message", "Catégorie insérée avec succès");

    } // end method 


    public function CategoryEdit($id){
    	$category = Category::findOrFail($id);
    	return view('backend.category.category_edit',compact('category'));

    }


    public function CategoryUpdate(Request $request ,$id){

    	 $cat_id = $request->id;

      Category::findOrFail($cat_id)->update([
		'category_name' => $request->category_name,
		'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
		'category_icon' => $request->category_icon,

    	]);

        return redirect()
        ->route("all.category")
        ->with("message", "Catégorie mise à jour avec succès");


    } // end method


    public function CategoryDelete($id){

    	Category::findOrFail($id)->delete();

    	return redirect()
        ->route("all.category")
        ->with("message", "Catégorie supprimée avec succès");

    } // end method 


}
 