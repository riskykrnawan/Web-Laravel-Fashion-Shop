@extends('admin.layout')
@section('content_admin')
    <div class="container-fluid mb-5">
      <div class="row">
        @include('admin.components.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"></div>
            <form action="/admin/products/store" method="post" enctype="multipart/form-data" onsubmit="createAlert()">
              {{ csrf_field() }}
              <div class="mb-3">
                <label for="photo" class="form-label">Product photo</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="Product photo" required aria-required="true">
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Product name" required aria-required="true">
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3"></textarea>
              </div>

              <label for="category" class="form-label">Category</label>
              <select id="category" class="form-select mb-3" name="category" aria-label="Default select example">
                <option value="other" selected>Category</option>
                <option value="women">Women</option>
                <option value="men">Men</option>
                <option value="children">Children</option>
                <option value="accessories">Accessories</option>
                <option value="shoes">Shoes</option>
                <option value="other">Other</option>
              </select>

              <hr class="mt-4">

              <div id="sizeContainer" class="mt-2 mb-3 pt-2">
                  <p>Size</p>
                  <!-- <div class="my-2">
                    Add Size nanti dipakai di fitur selanjutnya
                    <input class="px-2 py-1 border" type="text" id="newSize" placeholder="Add new size">
                    <button type="button" id="addSize" class="px-3 py-1 border bg-white">+</button>
                  </div> -->
                  <!-- question_id sebagai index, dan question_choice_id sebagai valuenya -->
                  <input class="form-check-input mt-2 hidden-radio" type="radio" name="size" id="size_xs" value="xs">
                  <label class="px-3 py-1 border" for="size_xs">XS</label>

                  <input class="form-check-input mt-2 hidden-radio" type="radio" name="size" id="size_s" value="s">
                  <label class="px-3 py-1 border" for="size_s">S</label>

                  <input class="form-check-input mt-2 hidden-radio" type="radio" name="size" id="size_m" value="m">
                  <label class="px-3 py-1 border" for="size_m">M</label>

                  <input class="form-check-input mt-2 hidden-radio" type="radio" name="size" id="size_l" value="l">
                  <label class="px-3 py-1 border" for="size_l">L</label>

                  <input class="form-check-input mt-2 hidden-radio" type="radio" name="size" id="size_xl" value="xl">
                  <label class="px-3 py-1 border" for="size_xl">XL</label>

                  <input class="form-check-input mt-2 hidden-radio" type="radio" name="size" id="size_xxl" value="xxl">
                  <label class="px-3 py-1 border" for="size_xxl">XXL</label>
              </div>

              <div id="colorContainer" class="mt-2">
                  <p>Colors</p>

                  <!-- <div class="my-2">
                    Add color nanti dipakai di fitur selanjutnya
                    <input class="px-2 py-1 border" type="text" id="newColor" placeholder="Add new color">
                    <button type="button" id="addColor" class="px-3 py-1 border bg-white">+</button>
                  </div> -->

                  <!-- question_id sebagai index, dan question_choice_id sebagai valuenya -->
                  <input class="form-check-input hidden-checkbox" type="checkbox" name="color" id="color_merah" value="merah">
                  <label class="px-3 py-1 border" for="color_merah">Merah</label>

                  <input class="form-check-input hidden-checkbox" type="checkbox" name="color" id="color_kuning" value="kuning">
                  <label class="px-3 py-1 border" for="color_kuning">Kuning</label>

                  <input class="form-check-input hidden-checkbox" type="checkbox" name="color" id="color_hijau" value="hijau">
                  <label class="px-3 py-1 border" for="color_hijau">Hijau</label>

                  <input class="form-check-input hidden-checkbox" type="checkbox" name="color" id="color_biru" value="biru">
                  <label class="px-3 py-1 border" for="color_biru">Biru</label>

                  <input class="form-check-input hidden-checkbox" type="checkbox" name="color" id="color_hitam" value="hitam">
                  <label class="px-3 py-1 border" for="color_hitam">Hitam</label>
              </div>

              <div id="container" class="mb-3 mt-4"> </div>

              <button id='btn-submit' type="submit" class="btn btn-success float-end">Submit</button>
            </form>
        </main>
      </div>
    </div>
@endsection