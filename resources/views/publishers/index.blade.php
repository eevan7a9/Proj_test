@extends( (Auth::user()->user_type == 2) ? 'layouts.admin' : 'layouts.app')
@section('content')
<div class="container">
    <div class="card custom-bg-color-light">
        @include('layouts.tableNav')
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h1 class="custom-font-cursive">Publishers
                        @can('isLibrarian', Auth::user())
                            <small>you added</small>
                        @endcan
                        :<a href="publishers/create"><button class="btn btn-success"><i class="fas fa-plus-square mr-1"></i>New</button></a></h1>
                </div>
                {{-- <div class="col-12 col-sm-6 float-right">
                    <input class="form-control" type="text" id="mySearchBar" onkeyup="filterTable()" placeholder="Search for names.." title="Type in a name">
                </div> --}}
            </div>
            <div class="table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Added by</th>
                            <th scope="col">Added at</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody class="custom-tbody">
                    <?php $n = 1; ?>
                    @foreach ($publishers as $item)
                            <tr>
                                <th scope="row">{{ $n++ }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->user->username }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="publishers/{{ $item->id }}/edit" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
                                </td>
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/custom_script.js') }}" defer></script>
@endsection
