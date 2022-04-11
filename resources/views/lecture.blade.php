@include('layouts.header', ['title' => 'Lecture List'])
<div class="container text-center mt-3 p-4 bg-white">
    <h1>Lecture List</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
            <ol class="list-group">
                @forelse ($lectures as $lecture)
                    <li class="list-group-item">{{ $lecture }}</li>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                @endforelse
            </ol>
        </div>
    </div>
</div>
@include('layouts.footer')