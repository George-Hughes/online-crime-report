{{-- <x-layout>
    <style>
        body{
            background-color: #eee;
        }
    </style>
    <div class="container">
        <form action="/emergency" method="POST">
            @csrf
            <label for="emergency" class="text-muted h4">Emergency Type:</label>
            <select name="name" id="" class="form-control">
                <option value="trafic">Traffic</option>
                <option value="accident">Accident</option>
                <option value="other">Other</option>
            </select>
            <label for="description" class="text-muted h4 mt-3">Description:</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            <div class="modal-footer">
                <button name="submit" class="btn btn-md btn-danger float-right">Report Emergency</button>
            </div>
        </form>


    </div>
</x-layout>
 --}}

 <x-admin-layout>
    <p class="display-4">Create Emergency Type</p>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 mt-2">
                @foreach ($emergencyTypes as $emergencyType)
                    <!-- Collapsable Card Example -->
                    <div class="card shadow mb-4">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardExample">
                            <h6 class="m-0 font-weight-bold text-danger">{{ $emergencyType->name }}</h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardExample">
                            <div class="card-body">
                                {{ $emergencyType->description }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-lg-6">
                <form action="/emergency/create" method="POST" class="form">
                    @csrf
                    <div class="form-group">
                        <label  for="crime-type">Emergency Type</label>
                        <input type="text" name="name" class="form-control">

                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label  for="description">Description</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>

                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div><br>

                    <a class="btn btn-danger text-white d-inline-block mr-3" href="/admin/manage-emergencies"> &lang;&lang; Back</a>
                    <button class="btn btn-primary" name="submit"><i class="fas fa-arrow-up"></i> Submit</button>
                </form>
            </div>
        </div>
    </div>
 </x-admin-layout>
