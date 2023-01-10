@extends('layout.layout-guest')

@section('contents')
<div class="bg-black mx-auto mt-5 rounded actordetails-content">
    <div class="d-flex">
        <h2 class="text-danger mx-auto mt-3">Update Profile</h2>
    </div>
    <div class="d-flex p-5">
        <div class="d-flex flex-column me-5">
            <div class="d-flex mx-auto">
                <h2 class="text-white me-2">My
                <h2 class="text-danger">Profile</h2>
            </div>
            <button type="button" class="btn rounded-circle" data-bs-toggle="modal" data-bs-target="#updateModal"><img class="rounded-circle mt-3 mx-auto" src="../{{$user->image_url}}" width="100" height="100" alt=""></button>
            <h5 class="text-white mt-3 mx-auto">{{$user->username}}</h5>
            <h5 class="text-secondary">{{$user->email}}</h5>
        </div>
        <form class="text-light w-100" action="/update-profile" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="hidden" name="id_update" value="{{$user->id}}">
            <div class="mb-3">
                <label for="" class="form-label">Username</label>
                <input type="text" name="username" class="form-control bg-dark text-white" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" name="email" class="form-control bg-dark text-white" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Date of birth</label>
                <input type="date" name="dob" class="form-control bg-dark text-white" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input type="text" name="phone" class="form-control bg-dark text-white" id="" aria-describedby="">
            </div>
            <div class="modal fade" id="updateModal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered text-white">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Update Image</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control bg-secondary text-white" name="image" id="" aria-describedby="">
                                <p class="text-secondary">Please upload your image</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger">Save changes</button>
                        </div>
                      </div>
                </div>
            </div>
            <button type="submit" class="btn btn-danger mb-3">Save Changes</button>
        </form>
    </div>
</div>
{{-- Pop up image update --}}

@endsection
