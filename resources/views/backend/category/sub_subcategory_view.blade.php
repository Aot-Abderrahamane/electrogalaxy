@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Content Wrapper. Contains page content -->

<div class="container-full">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
        <div class="row">



            <div class="col-8">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Liste des Sous->sous-catégories <span
                                class="badge badge-pill badge-danger"> {{
                                count($subsubcategory) }} </span></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Catégorie </th>
                                        <th>sous-catégorie</th>
                                        <th>Sous-sous-catégorie </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($subsubcategory as $item)
                                    <tr>
                                        <td> {{ $item['category']['category_name'] }} </td>
                                        <td>{{ $item['subcategory']['subcategory_name'] }}</td>
                                        <td>{{ $item->subsubcategory_name }}</td>
                                        <td width="30%">
                                            <a href="{{ route('subsubcategory.edit',$item->id) }}" class="btn btn-info"
                                                title="Edit Data"><i class="fa fa-pencil"></i> </a>

                                            <a href="{{ route('subsubcategory.delete',$item->id) }}"
                                                class="btn btn-danger" title="Delete Data" id="delete">
                                                <i class="fa fa-trash"></i></a>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->


            </div>
            <!-- /.col -->


            <!--   ------------ Ajouter la page de catégorie -------- -->


            <div class="col-4">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ajouter une sous-souscatégorie </h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">


                            <form method="post" action="{{ route('subsubcategory.store') }}">
                                @csrf
                                <div class="form-group">
                                    <h5>Catégories <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="category_id" class="form-control">
                                            <option value="" selected="" disabled="">Sélectionner une catégorie</option>
                                            @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <h5>Sous-catégories <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="subcategory_id" class="form-control">
                                            <option value="" selected="" disabled="">Sélectionner une sous-catégorie
                                            </option>

                                        </select>
                                        @error('subcategory_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <h5>Sous-sous-catégorie <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="subsubcategory_name" class="form-control">
                                        @error('subsubcategory_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5"
                                        value="Ajouter un nouveau">
                                </div>
                            </form>





                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>




        </div>
        <!-- /.row -->
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
    });
</script>


@endsection