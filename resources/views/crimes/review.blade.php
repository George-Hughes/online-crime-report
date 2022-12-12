<x-admin-layout>
   <div class="container">
     {{-- Other data for js --}}
     <input id="ID" type="text" value="{{ $crime->id }}" hidden>
     <input id="LAT" type="text" value="{{ $crime->lat }}" hidden>
     <input id="LNG" type="text" value="{{ $crime->lng }}" hidden>
     <input id="C-TYPE" type="text" value="{{ $crime->name }}" hidden>
     <input id="REGION" type="text" value="{{ $crime->region }}" hidden>
     {{-- Other data for js --}}
 
     <h1 class="display-5 text-center mt-2">Location of Residence</h1>
     <x-current-map />

     <h1 class="display-5 text-center mt-4">Crime Detail</h1>
     <div class="card mb-2 py-0 px-2 border-left-primary">
        <div class="card-body d-inline-flex align-items-center justify-content-between">
            <h5>Crime Id: <span class="text-warning">{{ $crime->id }}</span></h5>
            <h5>Status: 
                @if ($crime->status == 'pending')
                    <span class="text-danger text-capitalize">{{ $crime->status }}</span>
                    @else
                    <span class="text-success text-capitalize">{{ $crime->status }}</span>
                @endif
            </h5>
            <h4>Crime Type: <span class="text-warning">{{ $crime->name }}</span></h4>
        </div>
    </div>

     <div class="card mb-2 py-0 px-2 border-left-primary">
        <div class="card-body d-inline-flex align-items-center justify-content-between">
            <h5>IP Address: <span class="text-warning">{{ $crime->ip }}</span></h5>
            <h5><span class="text-secondary">{{ date('M j, Y h:ia', strtotime($crime->created_at)) }}</span></h5>
            <h5>Region: <span class="text-warning">{{ $crime->region }}</span></h5>
        </div>
    </div>

    <div class="card mb-2 py-3 border-bottom-primary">
        <div class="card-body">
            <h5 class="text-center">Detailed Description: <br><br><span class="text-muted">{{ $crime->description }}</span></h5>
        </div>
    </div>
 
     <a class="btn btn-primary text-white d-inline-block mr-3 my-5" href="/admin/manage-crimes"> &lang;&lang; Back to Crimes</a>
   </div>
</x-admin-layout>