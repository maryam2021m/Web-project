@extends('layouts.app_staff', ['active' => 'users', 'title' => 'User Details'])

@section('styles')
  <link rel="stylesheet" href="/css/staff.css">
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-white">User</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card pb-2 bg-dark shadow text-white">
            <div class="card-body">
                <div class="d-flex align-items-start align-items-sm-center gap-4">
                    <img style="object-fit: cover; object-position: center;" id="details-preview"
                        src="{{ $details->guest->profile_picture ? '/storage/assets/img/avatars/' . $details->guest->profile_picture : '/assets/img/avatars/profile.png' }}"
                        alt="user-avatar" class="d-block rounded" height="200" width="200" id="uploadedAvatar" />
                    <div class="col-md-8">
                        <div class="mb-3 col-12 border-bottom">
                            <h5 for="name" class="form-label text-primary">Nama Lengkap</h5>
                            <p>{{ $details->guest->name }}</p>
                        </div>
                        <div class="mb-3 col-12 border-bottom">
                            <h5 for="name" class="form-label text-primary">Nomor Induk</h5>
                            <p>{{ $details->guest->reg_number }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="my-0" />
            <div class="card-body">
                <div class="row">
                    <div class="mb-3 col-md-6">
                      <h5 for="name" class="form-label text-primary">Email</h5>
                      <p>{{ $details->email }}</p>
                    </div>
                    <div class="mb-3 col-md-6">
                      <h5 for="name" class="form-label text-primary">Tempat Lahir</h5>
                      <p>{{ $details->guest->birth_place ? $details->guest->birth_place : 'NOT SET' }}</p>
                    </div>
                    <div class="mb-3 col-md-6">
                      <h5 for="name" class="form-label text-primary">Tanggal Lahir</h5>
                      <p>{{ $details->guest->birth_date ? timestamp_to_indo_date($details->guest->birth_date) : 'NOT SET' }}</p>
                    </div>
                    <div class="mb-3 col-md-6">
                      <h5 for="name" class="form-label text-primary">Addres</h5>
                      <p>{{ $details->guest->address ? $details->guest->address : 'NOT SET' }}</p>
                    </div>
                    <div class="mb-3 col-md-6">
                      <h5 for="name" class="form-label text-primary">Jurusan</h5>
                      <p>{{ $details->guest->major ? $details->guest->major : 'NOT SET' }}</p>
                    </div>
                    <div class="mb-3 col-md-6">
                      <h5 for="name" class="form-label text-primary">Program Study</h5>
                      <p>{{ $details->guest->study_program ? $details->guest->study_program : 'NOT SET' }}</p>
                    </div>
                    <div class="mb-3 col-md-6">
                        <h5 for="name" class="form-label text-primary">Kelas</h5>
                        <p>{{ $details->guest->class ? $details->guest->class : 'NOT SET' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
@endsection

@section('scripts')
@endsection
