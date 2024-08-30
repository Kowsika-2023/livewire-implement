<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="col-md-8 mb-2">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        @if($addProduct)
            @include('livewire.create-product')
        @endif
        @if($updateProduct)
            @include('livewire.update-product')
        @endif
    </div>
    <main id="main-container">
    <!-- Hero -->
    <div class="bg-body-light ">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Products<small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Products</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a style="color:black" href="">List</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded">
            <div class="block-content ">
                <div class="d-flex justify-content-end">
                    @if(!$addProduct)
                    <button wire:click="addProduct()" class="btn btn-primary btn-sm float-right">Add New Product</button>
                    @endif
                </div>
            </div>

            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table" role="grid" >
                            <thead>
                                <tr role="row">
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $products = $products ?? [];
                                @endphp
                                    @if (count($products) > 0)
                                            @foreach ($products as $product)
                                                <tr role="row" class="odd">
                                                    <td>
                                                        {{$product->title}}
                                                    </td>
                                                    <td>
                                                        {{$product->description}}
                                                    </td>
                                                    <td>
                                                        <button wire:click="editProduct({{$product->id}})" class="btn btn-primary btn-sm">Edit</button>
                                                        <button wire:click="deleteProduct({{$product->id}})" class="btn btn-danger btn-sm">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                    @else
                                            <tr>
                                                <td colspan="3" align="center">
                                                    No Products Found.
                                                </td>
                                            </tr>
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function deleteProduct(id){
            if(confirm("Are you sure to delete this record?"))
                window.livewire.emit('deletePostListner',id);
        }
    </script>
</div>
