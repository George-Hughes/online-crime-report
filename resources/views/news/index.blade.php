<x-layout >

<main>
    <div class="background-img">
        {{-- Hero --}}
        {{-- @include('partials._hero') --}}
        {{-- @foreach ($allCrimeTypes as $allCrimeType) --}}
            <x-hero :allCrimeTypes="$allCrimeTypes"/>
        {{-- @endforeach --}}
        {{-- Hero --}}
    </div>

    <div class="album py-3 bg-light">
        <div class="container">
            <h1 class="h3 text-center text-decoration-underline">NEWS</h1>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                {{-- Demo --}}
                @foreach ($news as $new)
                    <x-news-card :new="$new"/>

                @endforeach
                {{-- Demo --}}
            </div>
        </div>

        {{-- Pagination --}}
        <div class="container">
            <div class="mt-3 p-3 pagination-md">
                {{ $news->links() }}
            </div>
        </div>

    </div>


</main>

</x-layout>
 

