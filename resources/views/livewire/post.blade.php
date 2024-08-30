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
        @if($addPost)
            @include('livewire.create')
        @endif
        @if($updatePost)
            @include('livewire.update')
        @endif
    </div>
    <main id="main-container">
            <div class="bg-body-light ">
                <div class="content content-full">
                    <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                        <h1 class="flex-sm-fill h3 my-2">
                            POSTS<small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted"></small>
                        </h1>
                        <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-alt">
                                <li class="breadcrumb-item">POSTS</li>
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
                            @if(!$addPost)
                            <button wire:click="addPost()" class="btn btn-primary btn-sm float-right">Add New Post</button>
                            @endif
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table"  role="grid" >
                                    <thead>
                                        <tr role="row">
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $posts = $posts ?? [];
                                        @endphp
                                            @if (count($posts) > 0)
                                                    @foreach ($posts as $post)
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                {{$post->title}}
                                                            </td>
                                                            <td>
                                                                {{$post->description}}
                                                            </td>
                                                            <td>
                                                                <button wire:click="editPost({{$post->id}})" class="btn btn-primary btn-sm">Edit</button>
                                                                <button wire:click="deletePost({{$post->id}})" class="btn btn-danger btn-sm">Delete</button>
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
    </main>
    <script>
        function deleteProduct(id){
            if(confirm("Are you sure to delete this record?"))
                window.livewire.emit('deletePostListner',id);
        }
    </script>
</div>
