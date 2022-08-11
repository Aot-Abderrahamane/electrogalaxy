<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\SubSubCategory;

class SubCategoryController extends Controller
{
	public function SubCategoryView()
	{
		$categories = Category::orderBy('category_name', 'ASC')->get();
		$subcategory = SubCategory::latest()->get();
		return view('backend.category.subcategory_view', compact('subcategory', 'categories'));
	}
	public function SubCategoryStore(Request $request)
	{
		$request->validate([
			'category_id' => 'required',
			'subcategory_name' => 'required',
		], [
			'category_id.required' => 'Veuillez sélectionner n\'importe quelle option',
			'subcategory_name.required' => 'Entrez le nom de la sous-catégorie',
		]);

		SubCategory::insert([
			'category_id' => $request->category_id,
			'subcategory_name' => $request->subcategory_name,
			'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
		]);

		return redirect()
			->route("all.subcategory")
			->with("message", "sub-Catégorie insérée avec succès");
	} // end method 



	public function SubCategoryEdit($id)
	{
		$categories = Category::orderBy('category_name', 'ASC')->get();
		$subcategory = SubCategory::findOrFail($id);
		return view('backend.category.subcategory_edit', compact('subcategory', 'categories'));
	}


	public function SubCategoryUpdate(Request $request)
	{

		$subcat_id = $request->id;

		SubCategory::findOrFail($subcat_id)->update([
			'category_id' => $request->category_id,
			'subcategory_name' => $request->subcategory_name,
			'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
		]);

		return redirect()
			->route("all.subcategory")
			->with("message", "sub-Catégorie mise à jour avec succès");
	}  // end method



	public function SubCategoryDelete($id)
	{

		SubCategory::findOrFail($id)->delete();

		return redirect()
			->route("all.subcategory")
			->with("message", "Sub-Catégorie supprimée avec succès");
	}


	/////////////////////////////////////////////////////////////
	/////////////// Cela pour SUB-> SUBCATEGORY ////////////////
	///////////////////////////////////////////////////////////

	public function SubSubCategoryView()
	{

		$categories = Category::orderBy('category_name', 'ASC')->get();
		$subsubcategory = SubSubCategory::latest()->get();
		return view('backend.category.sub_subcategory_view', compact('subsubcategory', 'categories'));
	}


	public function GetSubCategory($category_id)
	{

		$subcat = SubCategory::where('category_id', $category_id)->orderBy('subcategory_name', 'ASC')->get();
		return json_encode($subcat);
	}


	public function GetSubSubCategory($subcategory_id)
	{

		$subsubcat = SubSubCategory::where('subcategory_id', $subcategory_id)->orderBy('subsubcategory_name', 'ASC')->get();
		return json_encode($subsubcat);
	}



	public function SubSubCategoryStore(Request $request)
	{

		$request->validate([
			'category_id' => 'required',
			'subcategory_id' => 'required',
			'subsubcategory_name' => 'required',
		], [
			'category_id.required' => 'Veuillez sélectionner n\'importe quelle option',
			'subcategory_id.required' => 'Veuillez sélectionner n\'importe quelle option',
			'subsubcategory_name.required' => 'Entrez le nom de la sous sous-catégorie',
		]);



		SubSubCategory::insert([
			'category_id' => $request->category_id,
			'subcategory_id' => $request->subcategory_id,
			'subsubcategory_name' => $request->subsubcategory_name,
			'subsubcategory_slug' => strtolower(str_replace(' ', '-', $request->subsubcategory_name)),



		]);

		$notification = array(
			'message' => 'Sous-sous-catégorie insérée avec succès',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);
	}



	public function SubSubCategoryEdit($id)
	{
		$categories = Category::orderBy('category_name', 'ASC')->get();
		$subcategories = SubCategory::orderBy('subcategory_name', 'ASC')->get();
		$subsubcategories = SubSubCategory::findOrFail($id);
		return view('backend.category.sub_subcategory_edit', compact('categories', 'subcategories', 'subsubcategories'));
	}

	public function SubSubCategoryUpdate(Request $request)
	{

		$subsubcat_id = $request->id;
		$request->validate([
			'subsubcategory_name' => 'required',
		], [
			'subsubcategory_name.required' => ' Veuillez entrez le nom de la sous sous-catégorie',

		]);
		SubSubCategory::findOrFail($subsubcat_id)->update([
			'category_id' => $request->category_id,
			'subcategory_id' => $request->subcategory_id,
			'subsubcategory_name' => $request->subsubcategory_name,
			'subsubcategory_slug' => strtolower(str_replace(' ', '-', $request->subsubcategory_name)),
		]);

		$notification = array(
			'message' => 'Mise à jour de la sous-sous-catégorie réussie',
			'alert-type' => 'info'
		);

		return redirect()->route('all.subsubcategory')->with($notification);
	}


	public function SubSubCategoryDelete($id)
	{

		SubSubCategory::findOrFail($id)->delete();
		$notification = array(
			'message' => 'Sous-sous-catégorie supprimée avec succès',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);
	}
}
