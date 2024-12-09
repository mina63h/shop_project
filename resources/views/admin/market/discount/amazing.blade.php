@extends('admin.layouts.master')
@section('head-tag')
    <title>فروش شگفت انگیز</title>
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#"> خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#"> بخش فروش</a></li>
            <li class="breadcrumb-item active font-size-12" aria-current="page"> فروش شگفت انگیز</li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h4> فروش شگفت انگیز </h4>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.discount.copan.create') }}" class="btn btn-info btn-sm">افزودن کالا به
                        لیست شگفت انگیز
                    </a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>
                <section class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام کالا</th>
                                <th scope="col">درصد تخفیف</th>
                                <th scope="col">تاریخ شروع</th>
                                <th scope="col">تاریخ پایان</th>
                                <th scope="col" class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>گوشی سامسونگ</td>
                                <td>15%</td>
                                <td>30 آذر 1403</td>
                                <td>30 دی 1403</td>
                                <td class="width-16-rem text-left">
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
