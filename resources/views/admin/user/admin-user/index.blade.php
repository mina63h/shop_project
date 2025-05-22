@extends('admin.layouts.master')
@section('head-tag')
    <title>کاربران ادمین</title>
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش کاربران</a></li>
            <li class="breadcrumb-item active font-size-12" aria-current="page"> کاربران ادمین</li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h4>کاربران ادمین</h4>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.user.admin-user.create') }}" class="btn btn-info btn-sm">ایجاد ادمین جدید</a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>
                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ایمیل</th>
                                <th scope="col">شماره موبایل</th>
                                <th scope="col">نام</th>
                                <th scope="col">نام خانوادگی</th>
                                <th scope="col">نقش</th>
                                <th scope="col" class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>mn.hajian@gmail.com</td>
                                <td>09133077695</td>
                                <td>مینا</td>
                                <td>حاجیان</td>
                                <td>سوپر ادمین</td>
                                <td class="width-22-rem text-left">
                                    <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> نقش</a>
                                    <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> ویرایش</a>
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash-alt"></i>
                                        حذف</button>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </section>
            </section>
        </section>
    </section>
@endsection
