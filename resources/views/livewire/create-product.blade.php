<main id="main-container">
    <div class="bg-body-light ">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Products<small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">Add Product</li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a style="color:black" href="">Products</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title ">Add Product</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group mb-3">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" wire:model="title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description:</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" wire:model="description" placeholder="Enter Description"></textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button wire:click.prevent="storeProduct()" class="btn btn-success btn-block">Save</button>
                                <button wire:click.prevent="cancelProduct()" class="btn btn-secondary btn-block">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
