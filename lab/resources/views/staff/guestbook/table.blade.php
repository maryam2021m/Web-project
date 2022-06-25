@extends('layouts.app_staff', ['active' => 'guestbook', 'title' => 'Kunjungan'])

@section('styles')
  <link rel="stylesheet" href="/css/staff.css">
@endsection

@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4 text-white">میز بازدید</h4>
        
        <!-- Basic Bootstrap Table -->
        <div class="card pb-2 bg-dark shadow">
          <x-alert></x-alert>
          <div class="table-responsive text-nowrap p-3">
            <table class="table" id="data-table" style="width:100%">
              <thead>
                <tr>
                  <th class="text-primary">ردیف</th>
                  <th class="text-primary">تاریخ</th>
                  <th class="text-primary">کاربر</th>
                  <th class="text-primary">قصد</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @php $no=1 @endphp
                @foreach ($guestbook as $item)
                <tr>
                  <td class="text-white py-3"><strong>{{ $no }}</strong></td>
                  <td class="py-3">
                    <span class="badge me-1 bg-label-primary">{{ timestamp_to_indo_date($item->start) }}</span>
                  </td>
                  <td class="text-white py-3">{{ $item->guest->name }}</td>
                  <td class="text-white py-3">{{ $item->purpose }}</td>
                </tr>
                @php $no++ @endphp                    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>

@endsection

@section('scripts')
<script>
  function deleteRecord(id) {
    const confirmDelete = document.getElementById('confirmDelete')
    confirmDelete.setAttribute('action', `/staff/info/${id}/delete`)
  }
</script>
@endsection
