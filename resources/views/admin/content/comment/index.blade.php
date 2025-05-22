@extends('admin.layouts.master')
@section('head-tag')
    <title>نظرات</title>
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#"> خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#"> بخش فروش</a></li>
            <li class="breadcrumb-item active font-size-12" aria-current="page"> نظرات</li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h4>نطرات</h4>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="#" class="btn btn-info btn-sm disabled">ایجاد نظر</a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>
                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">کد کاربر</th>
                                <th scope="col">نویسنده نظر</th>
                                <th scope="col">کد کالا</th>
                                <th scope="col">کالا</th>
                                <th scope="col">وضعیت</th>
                                <th scope="col" class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>1234</td>
                                <td>مینا حاجیان</td>
                                <td>123</td>
                                <td>آیفون 12</td>
                                <td>در انتظار تایید</td>
                                <td class="width-16-rem text-left">
                                    <a href="{{ route('admin.content.comment.show') }}" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i> نمایش</a>
                                    <button class="btn btn-success btn-sm" type="submit"><i class="fa fa-check"></i>
                                        تایید</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">۲</th>
                                <td>1234</td>
                                <td>مینا حاجیان</td>
                                <td>123</td>
                                <td>آیفون 12</td>
                                <td>تایید شده</td>
                                <td class="width-16-rem text-left">
                                    <a href="{{ route('admin.content.comment.show') }}" class="btn btn-info btn-sm"><i
                                            class="fa fa-eye"></i> نمایش</a>
                                    <button class="btn btn-warning btn-sm" type="submit"><i class="fa fa-clock"></i>
                                        عدم تایید</button>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </section>
            </section>
        </section>
    </section>
@endsection
