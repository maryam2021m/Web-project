@extends('layouts.app', ['active' => 'guestbook', 'title' => 'Buku Tamu'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">اطلاعات ویزیت</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <x-alert></x-alert>
                    <div class="card-body">
                        <form action="{{ route('guestbook.create') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">استفاده مورد نظر</label>
                                <div class="col-sm-10">
                                    <input type="text" name="purpose" class="form-control" id="basic-default-name"
                                        placeholder="" />
                                    @error('purpose')
                                        <span class="text-danger" role="alert">
                                            <p class="m-0 mt-2">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="html5-time-input" class="col-md-2 col-form-label">تاریخ شروع</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="start" type="time"
                                        id="html5-time-input" />
                                    @error('start')
                                        <span class="text-danger" role="alert">
                                            <p class="m-0 mt-2">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="html5-time-input" class="col-md-2 col-form-label">تاریخ اتمام</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="end" type="time"
                                        id="html5-time-input" />
                                    @error('end')
                                        <span class="text-danger" role="alert">
                                            <p class="m-0 mt-2">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-message">توضیحات
                                    (Optional)</label>
                                <div class="col-sm-10">
                                    <textarea id="basic-default-message" name="description" class="form-control" placeholder=""
                                        aria-label="Deskripsi tujuan"
                                        aria-describedby="basic-icon-default-message2"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">ثبت</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
