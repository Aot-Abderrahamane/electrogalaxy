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
                <h4 class="box-title">Editer Une Produit </h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form method="post" action="{{ route('product-update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$products->id}}">
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
                                                        <option value="{{ $brand->id }}" {{ $brand->id ==
                                                            $products->brand_id ? " selected":''}}>
                                                            {{ $brand->brand_name_en }}
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
                                                        <option value="{{ $category->id }}" {{ $category->id ==
                                                            $products->category_id ? " selected":''}}>{{
                                                            $category->category_name
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
                                                        @foreach($subcategory as $sub)
                                                        <option value="{{ $sub->id }}" {{ $sub->id ==
                                                            $products->subcategory_id ? 'selected': '' }} >{{
                                                            $sub->subcategory_name }}</option>
                                                        @endforeach
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
                                                        @foreach($subsubcategory as $subsub)
                                                        <option value="{{ $subsub->id }}" {{ $subsub->id ==
                                                            $products->subsubcategory_id ? 'selected': '' }} >{{
                                                            $subsub->subsubcategory_name }}</option>
                                                        @endforeach
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
                                                        required="" value="{{ $products->product_name }}">
                                                    @error('product_name')
                                                    <span class=" text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 4 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Taille du produit <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="product_size" class="form-control"
                                                        value="{{ $products->product_size }}" data-role="tagsinput">
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
                                                        required="" value="{{ $products->product_code }}">
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
                                                        required="" value="{{ $products->product_qty }}">
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
                                                        value="{{ $products->product_tags }}" data-role="tagsinput"
                                                        required="">
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
                                                        required="" value="{{$products->selling_price}}">
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
                                                        required="" value="{{$products->discount_price}}">
                                                    @error('discount_price')
                                                    <span class=" text-danger">{{ $message }}</span>
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
                                                        value="{{ $products->product_color }}" data-role="tagsinput"
                                                        required="">
                                                    @error('product_color')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col md 4 -->
                                    </div>
                                    <!-- end 5th row  -->

                                    <!-- end 6th row  -->
                                    <div class="row">
                                        <!-- start 7th row  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Bref <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="short_descp" rows="7" cols="100" id="textarea"
                                                        class="form-control" required
                                                        placeholder="Textarea text">{!! $products->short_descp !!}</textarea>
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
                                                        {!! $products->long_descp !!}
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
                                                    <input type="checkbox" id="checkbox_2" name="hot_deals" value="1" {{
                                                        $products->hot_deals == 1 ? 'checked': '' }}>
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
                                                        value="1" {{ $products->special_offer == 1 ? 'checked': '' }}>
                                                    <label for="checkbox_4">Special Offer</label>
                                                </fieldset>
                                                <fieldset>
                                                    <input type="checkbox" id="checkbox_5" name="special_deals"
                                                        value="1" {{ $products->special_deals == 1 ? 'checked': '' }}>
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
                                        value="Mettre à jour le produit">
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
    <!-- ///////////////// Démarrer la zone de mise à jour de l'image ///////// -->

    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box bt-3 border-info">
                    <div class="box-header">
                        <h4 class="box-title">Produit Image multiple
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Mise à jour</strong></h4>
                    </div>


                    <form method="post" action="{{ route('update-product-image') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row row-sm">
                            @foreach($multiImgs as $img)
                            <div class="col-md-3">

                                <div class="card">
                                    <img src="{{ asset($img->photo_name) }}" class="card-img-top"
                                        style="height: 100%; width: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="{{ route('product.multiimg.delete',$img->id) }}"
                                                class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i
                                                    class="fa fa-trash"></i> </a>
                                        </h5>
                                        <p class="card-text">
                                        <div class="form-group">
                                            <label class="form-control-label">Change Image <span
                                                    class="tx-danger">*</span></label>
                                            <input class="form-control" type="file" name="multi_img[{{ $img->id }}]">
                                        </div>
                                        </p>

                                    </div>
                                </div>

                            </div><!--  end col md 3		 -->
                            @endforeach

                        </div>

                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
                        </div>
                        <br><br>



                    </form>

                </div>
            </div>



        </div> <!-- // end row  -->

    </section>
    <!-- ///////////////// End Start Multiple Image Update Area ///////// -->

    <!-- ///////////////// Start Thambnail Image Update Area ///////// -->

    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="box bt-3 border-info">
                    <div class="box-header">
                        <h4 class="box-title">Image de miniatures du produit &nbsp;&nbsp;&nbsp;&nbsp; <strong>Mise à
                                jour</strong></h4>
                    </div>


                    <form method="post" action="{{ route('update-product-thambnail') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="id" value="{{ $products->id }}">
                        <input type="hidden" name="old_img" value="{{ $products->product_thambnail }}">

                        <div class="row row-sm">

                            <div class="col-md-3">

                                <div class="card">
                                    <img src=" {{ asset($products->product_thambnail) }}" class="card-img-top"
                                        style="height: 100%; width: 100%;">
                                    <div class="card-body">

                                        <p class="card-text">
                                        <div class="form-group">
                                            <label class="form-control-label">Changer l'image <span
                                                    class="tx-danger">*</span></label>
                                            <input type="file" name="product_thambnail" class="form-control"
                                                onChange="mainThamUrl(this)">
                                            <img src="" id="mainThmb">
                                        </div>
                                        </p>

                                    </div>
                                </div>

                            </div><!--  end col md 3		 -->


                        </div>

                        <div class="text-xs-right">
                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Mettre à jour l'image">
                        </div>
                        <br><br>



                    </form>





                </div>
            </div>



        </div> <!-- // end row  -->

    </section>
    <!-- ///////////////// End Start Thambnail Image Update Area ///////// -->
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
   $('#multiImg').on('change', function(){ // sur le changement d'entrée de fichier
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; // ces données de fichier
          $.each(data, function(index, file){ // Boucle via chaque fichier
              if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ // Vérifiez pris en chargefile type
                  var fRead = new FileReader(); // Nouveau fileader
                  fRead.onload = (function(file){ // déclencher la fonction sur lecture réussie
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                  .height(80); // Créer un élément d'image
                      $('#preview_img').append(img); // Ajouter l'image à l'élément de sortie
                  };
                  })(file);
                  fRead.readAsDataURL(file); // URL représentant les données du fichier.
              }
          });
      }else{
          alert("Your browser doesn't support File API!"); // Si l'API de fichier est absente
      }
   });
  });
</script>
@endsection