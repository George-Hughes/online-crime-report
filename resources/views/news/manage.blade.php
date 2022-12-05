<x-layout>
    <style>
        .imgManage{
            max-height: 80px
        }
    </style>
    <div class="container">
        <table class="table table-bordered">
            @php
                $numberId = 1;
            @endphp
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @unless ($news->isEmpty())
                @foreach ($news as $new)
                    <tr>
                        <td>{{ $numberId++ }}</td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->description }}</td>
                        <td><img 
                            class="img img-fluid imgManage" 
                            src="{{ asset('storage/'. $new->image) }}" 
                            alt="{{ $new->image }}">
                        </td>
                        <td>
                            <a href="/news/{{ $new->id }}/edit" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach
                @else
                <tr><p>No News Posted</p></tr>
            @endunless

            {{-- @forelse ($news as $new)
                <tr>
                    <td>{{ $new->id }}</td>
                    <td>{{ $new->title }}</td>
                    <td>{{ $new->description }}</td>
                </tr>
            @empty
                <p>No News</p>
            @endforelse --}}
        </table>
    </div>
</x-layout>

