@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-full">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Ajouter Une Produit </h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form method="post" action="{{ route('product-store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <!-- start 1st row  -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Sélection de la marque <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="brand_id" class="form-control" required="">
                                                        <option value="" selected="" disabled="">Sélectionner la marque
                                                        </option>
                                                        @foreach($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->brand_name_en }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('brand_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Sélection de catégorie <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="category_id" class="form-control" required="">
                                                        <option value="" selected="" disabled="">Choisir une catégorie
                                                        </option>
                                                        @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->category_name
                                                            }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Sélection de sous-catégorie <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="subcategory_id" class="form-control" required="">

                                                        <option value="" selected="" disabled="">Sélectionnez la
                                                            sous-catégorie
                                                        </option>
                                                    </select>
                                                    @error('subcategory_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->
                                    </div> <!-- end 1st row  -->
                                    <div class="row">
                                        <!-- start 2nd row  -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Sélectionner une sous-sous-catégorie <span
                                                        class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="subsubcategory_id" class="form-control" required="">
                                                        <option value="" selected="" disabled="">Sélectionnez la
                                                            sous-sous-catégorie
                                                        </option>
                                                    </select>
                                                    @error('subsubcategory_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Nom du produit <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="product_name" class="form-control"
                                                        required="">
                                                    @error('product_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Taille du produit <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="product_size" class="form-control"
                                                        value="Small,Midium,Large" data-role="tagsinput" required="">
                                                    @error('product_size')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col md 4 -->
                                    </div>
                                    <!-- end 2nd row  -->
                                    <div class="row">
                                        <!-- start 3RD row  -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>code produit <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="product_code" class="form-control"
                                                        required="">
                                                    @error('product_code')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>La quantité de produit <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="product_qty" class="form-control"
                                                        required="">
                                                    @error('product_qty')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5> Tags de produit<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="product_tags" class="form-control"
                                                        value="Lorem,Ipsum,Amet" data-role="tagsinput" required="">
                                                    @error('product_tags')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->
                                    </div> <!-- end 3RD row  -->
                                    <div class="row">
                                        <!-- start 4th row  -->
                                        <div class="col-md-4">
                                        </div>
                                        <!-- end col md 4 -->
                                    </div>
                                    <!-- end 4th row  -->
                                    <div class="row">
                                        <!-- start 5th row  -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Prix de vente du produit <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="selling_price" class="form-control"
                                                        required="">
                                                    @error('selling_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Prix réduit du produit <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="discount_price" class="form-control"
                                                        required="">
                                                    @error('discount_price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- end col md 4 -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Couleur du produit <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="product_color" class="form-control"
                                                        value="red,black,white" data-role="tagsinput" required="">
                                                    @error('product_color')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col md 4 -->
                                    </div>
                                    <!-- end 5th row  -->
                                    <div class="row">
                                        <!-- start 6th row  -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Main Thambnail <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="product_thambnail" class="form-control"
                                                        onChange="mainThamUrl(this)" required="">
                                                    @error('product_thambnail')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <img src="" id="mainThmb">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Multiple Images <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="multi_img[]" class="form-control"
                                                        multiple="" id="multiImg" required="">{{-- il faut faire
                                                    mutliple pour selectionner plusieurs images --}}
                                                    @error('multi_img')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <div class="row" id="preview_img"></div>{{--espace pour voir
                                                    l'images téléchargé --}}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col md 4 -->
                                    </div>
                                    <!-- end 6th row  -->
                                    <div class="row">
                                        <!-- start 7th row  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Mini-Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="short_descp" rows="7" cols="100" id="textarea"
                                                        class="form-control" required
                                                        placeholder="Textarea text"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col md 6 -->
                                    </div>
                                    <!-- end 7th row  -->
                                    <div class="row">
                                        <!-- start 8th row  -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Description Détaillée <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea id="editor1" name="long_descp" rows="10" cols="100"
                                                        required="">
                                                        Description Détaillée
						                            </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col md 6 -->
                                    </div>
                                    <!-- end row  -->
                                </div>
                                <!-- end 8th row  -->
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <fieldset>
                                                    <input type="checkbox" id="checkbox_2" name="hot_deals" value="1">
                                                    <label for="checkbox_2">Hot Deals</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="checkbox_3" name="featured" value="1">
                                                    <label for="checkbox_3">Featured</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="controls">
                                                <fieldset>
                                                    <input type="checkbox" id="checkbox_4" name="special_offer"
                                                        value="1">
                                                    <label for="checkbox_4">Special Offer</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="checkbox_5" name="special_deals"
                                                        value="1">
                                                    <label for="checkbox_5">Special Deals</label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    {{-- <div class="form-group">
                                        <h5>Digital Product <span class="text-danger">pdf,xlx,csv*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div> --}}
                                </div> <!-- end col md 4 -->
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5"
                                        value="Ajouter le produit">
                                </div>
                        </form>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/category/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    	$('select[name="subsubcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
 $('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id) {
                $.ajax({
                    url: "{{  url('/category/sub-subcategory/ajax') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subsubcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subsubcategory_id"]').append('<option value="'+ value.id +'">' + value.subsubcategory_name + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
</script>
<script type="text/javascript">
    function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>
<script>
    $(document).ready(function(){
   $('#multiImg').on('change', function(){ //sur le changement input de fichier
      if (window.File && window.FileReader && window.FileList && window.Blob) // Vérifiez si l'API de fichier est pris en charge dans le navigateur
      {
          var data = $(this)[0].files; //this file 
          $.each(data, function(index, file){ //Loop via chaque fichier
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //Vérifier le type de fichier pris en charge
                  var fRead = new FileReader(); //nouveau file reader
                  fRead.onload = (function(file){ //Fonction de déclenchement sur la lecture réussie
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); //Créer un élément d'image
                      $('#preview_img').append(img); //Ajouter l'image à l'élément de sortie
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL représentant les données du fichier.
              }
          });
      }else{
          alert("Your browser doesn't support File API!"); //Si l'API de fichier est absente
      }
   });
  });
</script>
@endsection