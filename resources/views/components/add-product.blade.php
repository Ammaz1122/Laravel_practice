<x-layout>


    <div class="container border">
        <div class="row">
            <div class="col-lg-5 m-auto my-5">
                <h2 class="text-center display-5">Add Products</h2>

                <form action="/add-product" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="Name">
                            Name
                        </label>
                        <input type="text" name="name" class="form-control">
                        @error('name')
                        <p class="text-danger fw-medium my-2">
                            {{ $message }}

                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Auctual Price">
                            Auctual Price
                        </label>
                        <input type="number" name="auctual_price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Discount Price">
                            Discount Price
                        </label>
                        <input type="number" name="discount_price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Description ">
                            Description
                        </label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="Image">
                            Image
                        </label>
                        <input type="file" name="image" class="form-control preview_file">
                    </div>

                        <img src="" class="preview_image" style="width: 100px; height:100px" alt="Preview">



                    <div class="d-flex justify-content-center">
                        <button  class="btn btn-warning my-4 w-50">Add-Data</button>
                        </div>
                </form>
            </div>
        </div>
    </div>

                <script>
                    let preview_image = document.querySelector('.preview_image');
                    let preview_file = document.querySelector('.preview_file');

                    preview_image.style.display = 'none';

                    preview_file.addEventListener('input',(e)=>{

                        let image_file = e.target.files[0];
                        let image_url = URL.createObjectURL(image_file);
                        preview_image.style.display = 'block';
                        // console.log(image_url)
                        preview_image.src = image_url;

                    });


                </script>

</x-layout>
