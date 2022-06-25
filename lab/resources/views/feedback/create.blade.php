@extends('layouts.app', ['active' => 'feedback', 'title' => 'Feedback'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">انتقاد و پیشنهاد</h4>
        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <x-alert></x-alert>
                    <div class="card-body">
                        <form action="{{ route('feedback.create') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="complaint">منتقد</label>
                                <div class="col-sm-10">
                                    <input type="text" name="complaint" class="form-control" id="complaint"
                                        placeholder="" />
                                    @error('complaint')
                                        <span class="text-danger" role="alert">
                                            <p class="m-0 mt-2">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">پیشنهاد</label>
                                <div class="col-sm-10">
                                    <input type="text" name="suggestion" class="form-control" id="basic-default-name"
                                        placeholder="" />
                                    @error('suggestion')
                                        <span class="text-danger" role="alert">
                                            <p class="m-0 mt-2">{{ $message }}</p>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">ثبت</button>
                                </div>
                            </div>
                        </form>

                        <div>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">پیشنهاد دهنده</th>
                                    <th scope="col">پیشنهاد</th>
                                    <th scope="col">تاریخ</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all as $single)
                                        
                                    
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$single->complaint}}</td>
                                    <td>{{ $single->suggestion }}</td>
                                    <td>{{ $single->created_at }}</td>
                                </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
