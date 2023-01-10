@extends('layout-user')

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
            <button type="button" class="btn rounded-circle" data-bs-toggle="modal" data-bs-target="#updateModal"><img class="rounded-circle mt-3 mx-auto" src="assets/profile-pict.jpg" width="100" height="100" alt=""></button>
            <h5 class="text-white mt-3 mx-auto">Hans</h5>
            <h5 class="text-secondary">hans@mail.com</h5>
        </div>
        <form class="text-light w-100">
            <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control bg-dark text-white" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control bg-dark text-white" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Date of birth</label>
                <input type="date" class="form-control bg-dark text-white" id="" aria-describedby="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Phone</label>
                <input type="text" class="form-control bg-dark text-white" id="" aria-describedby="">
            </div>
            <button type="submit" class="btn btn-danger mb-3">Save Changes</button>
        </form>
    </div>
</div>
{{-- Pop up image update --}}
<div class="modal fade" id="updateModal" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-white">
        <div class="modal-content bg-dark">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Update Image</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="" class="form-label">Image Url</label>
                    <input type="url" class="form-control bg-secondary text-white" id="" aria-describedby="">
                    <p class="text-secondary">Please upload your image to other sources first and Use the URL</p>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger">Save changes</button>
            </div>
          </div>
    </div>
</div>
@endsection
