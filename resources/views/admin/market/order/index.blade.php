@extends('admin.layouts.master')
@section('head-tag')
    <title>سفارشات</title>
@endsection
@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش فروش</a></li>
            <li class="breadcrumb-item active font-size-12" aria-current="page"> سفارشات</li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h4>سفارشات</h4>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="" class="btn btn-info btn-sm disabled">ایجاد سفارش</a>
                    <div class="max-width-16-rem">
                        <input type="text" class="form-control form-control-sm form-text" placeholder="جستجو">
                    </div>
                </section>
                <section class="table-responsive">
                    <table class="table table-striped table-hover h-150px">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">کد سفارش</th>
                                <th scope="col">مبلغ سفارش</th>
                                <th scope="col">مبلغ تخفیف</th>
                                <th scope="col">مبلغ نهایی</th>
                                <th scope="col">وضعیت پرداخت</th>
                                <th scope="col">شیوه پرداخت</th>
                                <th scope="col">بانک</th>
                                <th scope="col">وضعیت ارسال</th>
                                <th scope="col">شیوه ارسال</th>
                                <th scope="col">وضعیت سفارش</th>
                                <th scope="col" class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th scope="row">2</th>
                                <td>123456</td>
                                <td>200,000</td>
                                <td>20,000</td>
                                <td>180,000</td>
                                <td>پرداخت شده</td>
                                <td>آنلاین</td>
                                <td>ملت</td>
                                <td>در حال ارسال</td>
                                <td>پست پیشتاز</td>
                                <td>در حال ارسال</td>

                                <td class="width-18-rem text-left">

                                    <div class="dropdown">
                                        <button class="btn btn-success btn-sm btn-block dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-tools"></i> عملیات </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-images"></i>
                                                مشاهده فاکتور</a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-list-ul"></i>
                                                تغییر وضعیت ارسال </a>
                                            <a href="#" class="dropdown-item text-right"><i class="fa fa-edit"></i>
                                                تغییر وضعیت سفارش</a>
                                            <a href="#" class="dropdown-item text-right"><i
                                                    class="fa fa-window-close"></i>
                                                باطل
                                                کردن سفارش</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </section>
            </section>
        </section>
    </section>
@endsection
