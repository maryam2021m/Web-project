@extends('layouts.app_staff', ['active' => 'info', 'title' => 'Tambah Info'])

@section('styles')
  <link rel="stylesheet" href="/css/staff.css">
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-white">افزودن اطلاعات</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card pb-2 bg-dark shadow">
            <div class="card-body">
                <form action="{{ route('staff.info.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-center flex-column align-items-center py-5">
                        <img style="object-fit: cover; object-position: center;" id="profile-preview"
                            class="d-block rounded mb-3" height="200" width="200" id="uploadedAvatar" />
                        <div class="button-wrapper text-center">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">آپلود عکس جدید</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" name="image" onchange="showPreview(event)" id="upload"
                                    class="account-file-input" hidden accept="image/png, image/jpeg" />
                                @error('image')
                                    <span class="text-danger" role="alert">
                                        <p class="m-0 mt-2">{{ $message }}</p>
                                    </span>
                                @enderror
                            </label>
                            <p class="text-muted mb-0">Allowed JPEG, JPG or PNG. Max size of 1Mb</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-white" for="name">عنوان رویداد</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control text-white bg-dark" id="name"
                                placeholder="" />
                            @error('name')
                                <span class="text-danger" role="alert">
                                    <p class="m-0 mt-2">{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label text-white" for="responsible">فرد مسئول</label>
                        <div class="col-sm-10">
                            <input type="text" name="responsible" value="{{ old('responsible') }}" class="form-control text-white bg-dark"
                                id="responsible" placeholder="" />
                            @error('responsible')
                                <span class="text-danger" role="alert">
                                    <p class="m-0 mt-2">{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="html5-datetime-local-input" class="col-md-2 col-form-label text-white">تاریخ شروع</label>
                        <div class="col-md-10">
                            <input class="form-control text-white bg-dark" name="start" type="datetime-local"
                                id="html5-datetime-local-input" />
                            @error('start')
                                <span class="text-danger" role="alert">
                                    <p class="m-0 mt-2">{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="html5-datetime-local-input" class="col-md-2 col-form-label text-white">تاریخ پایان</label>
                        <div class="col-md-10">
                            <input class="form-control text-white bg-dark" name="end" type="datetime-local"
                                id="html5-datetime-local-input" />
                            @error('end')
                                <span class="text-danger" role="alert">
                                    <p class="m-0 mt-2">{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="html5-datetime-local-input" class="col-md-2 col-form-label text-white">توضیحات</label>
                        <div class="col-md-10">
                            <div class="p-0 bg-white rounded">
                                <textarea id="summernote" name="description"></textarea>
                                @error('description')
                                <span class="text-danger" role="alert">
                                    <p class="m-0 mt-2">{{ $message }}</p>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3 justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>

    <!-- / Content -->
@endsection

@section('scripts')
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
        $('#summernote').summernote({
            placeholder: '',
            tabsize: 2,
            height: 400
        });
    </script>

    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                const src = URL.createObjectURL(event.target.files[0]);
                const preview = document.getElementById('profile-preview');
                preview.src = src;
            }
        }
    </script>
@endsection
