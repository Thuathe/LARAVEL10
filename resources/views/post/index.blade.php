<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">HALAMAN ADMIN</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('post.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                    <form action="search"class="d-flex" role="search">
        <input name="search"style="font-family: 'Source Sans Pro';border-radius:10px;background:white;height:40px;width:85%;"class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

        <button style="font-family: 'Source Sans Pro';border-radius:10px;margin-top:-40px;float:right;"class="btn btn-outline-success" type="submit">Search</button>
      </form>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">JUDUL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($post as $post1)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ asset($post1->image) }}" class="rounded" style="width:150px">
                                </td>
                                <td>{{ $post1->title }}</td>
                                <td>{!! $post1->content !!}</td>
                                <td class="text-center">
                                    
                                    <form onsubmit="return 
confirm('Apakah Anda Yakin ?');" action="{{ route('post.destroy', $post1->id) }}" method="POST">
                                        <a href="{{ route('post.show', $post1->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('post.edit', $post1->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE') <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Post belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>


    <div class="pagination-status">
        <p>
        {{ $post->links() }}
 </p> 

    </div>
    
    </div>

</body>

</html>