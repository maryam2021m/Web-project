@extends('layouts.app', ['active' => 'lab_info', 'title' => 'Info'])

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">اطلاعات آزمایشگاه</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="row mb-5">

                  @foreach ($events as $event)
                  <div class="col-md-6 col-lg-4 mb-3">
                    <div class="card">
                      <img class="card-img-top" src="/storage/assets/img/events/thumbs/{{ $event->image }}">
                      <div class="card-header py-3">{{ timestamp_to_indo_date($event->start) }}</div>
                      <div class="card-body">
                        <h5 class="card-title">{{ $event->name }}</h5>
                        <p class="card-text">
                          {{ strip_tags(substr($event->description, 0, 300), null) }} ...
                        </p>
                        <a href="{{ route('event.show', $event) }}" class="btn btn-primary">مشاهده</a>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
