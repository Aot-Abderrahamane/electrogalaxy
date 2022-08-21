<div id="brands-carousel" class="logo-slider wow fadeInUp">
  <div class="logo-slider-inner">
    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
      <!--   // Obtenez les données de la table de brands-->
      @php
      $brands = App\Models\Brand::orderBy('brand_name_en','ASC')->get();
      @endphp

      @foreach ($brands as $brand)
    <div class="item m-t-15"> <a href="#" class="img-thumbnail" style="border-radius: 10% 30% 50% 70%"> 
      <img style="width:100% ;";
            data-echo="{{ asset($brand->brand_image) }}" src="{{ asset($brand->brand_image) }}" alt="">
           </a> 
          </div>
      <!--/.item-->
      @endforeach
    </div>
    <!-- /.owl-carousel #logo-slider -->
  </div>
  <!-- /.logo-slider-inner -->

</div>