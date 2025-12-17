@extends('Admin.layout.master')
@section('title', 'Footer')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h4 class="fw-bold">بخش فوتر</h4>

        <a href="{{ route('admin.footer.edit') }}" class="btn btn-sm btn-dark">ویرایش تنظیمات
            فوتر</a>
    </div>

    <form class="row gy-4 mb-5">
        <h3>ستون اول</h3>
        <div class="col-md-3">
            <label class="form-label">عنوان</label>
            <input disabled value="{{ $footer->col_1_title }}" class="form-control" />
        </div>
        <div class="col-md-3">
            <label class="form-label">متن اول</label>
            <input disabled value="{{ $footer->col_1_body_1 }}" class="form-control" />
        </div>
        <div class="col-md-3">
            <label class="form-label">متن دوم</label>
            <input disabled value="{{ $footer->col_1_body_2 }}" class="form-control" />
        </div>

        <hr>
        <h3>ستون دوم</h3>
        <div class="col-md-3">
            <label class="form-label">عنوان</label>
            <input disabled value="{{ $footer->col_2_title }}" class="form-control" />
        </div>
        <div class="col-md-9">
            <label class="form-label">متن</label>
            <input disabled value="{{ $footer->col_2_body }}" class="form-control" />
        </div>
        <div class="col-12">
            <label class="form-label">تلگرام</label>
            <input disabled value="{{ $footer->telegram_link }}" class="form-control" />
        </div>
        <div class="col-12">
            <label class="form-label">واتس اپ</label>
            <input disabled value="{{ $footer->whatsapp_link }}" class="form-control" />
        </div>
        <div class="col-12">
            <label class="form-label">اینستاگرام</label>
            <input disabled value="{{ $footer->instagram_link }}" class="form-control" />
        </div>
        <div class="col-12">
            <label class="form-label">یوتیوب</label>
            <input disabled value="{{ $footer->youtube_link }}" class="form-control" />
        </div>
        <hr>
        <h3>ستون سوم</h3>
        <div class="col-md-3">
            <label class="form-label">عنوان</label>
            <input disabled value="{{ $footer->col_3_title }}" class="form-control" />
        </div>
        <div class="col-md-3">
            <label class="form-label">متن</label>
            <input disabled value="{{ $footer->col_3_body }}" class="form-control" />
        </div>
        <hr>
        <div class="col-md-6">
            <label class="form-label">متن کپی رایت </label>
            <input disabled value="{{ $footer->copyright }}" class="form-control" />
        </div>
    </form>
@endsection
