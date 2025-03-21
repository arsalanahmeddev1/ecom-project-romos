@extends('dashboard.layouts.app')
@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>All category</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html">
                                <div class="text-tiny">Dashboard</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#">
                                <div class="text-tiny">Category</div>
                            </a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">All category</div>
                        </li>
                    </ul>
                </div>
                <!-- all-category -->
                <div class="wg-box">
                    <div class="flex items-center justify-between gap10 flex-wrap">
                        <div class="wg-filter flex-grow">
                            <div class="show">
                                <div class="text-tiny">Showing</div>
                                <div class="select">
                                    <select class="">
                                        <option>10</option>
                                        <option>20</option>
                                        <option>30</option>
                                    </select>
                                </div>
                                <div class="text-tiny">entries</div>
                            </div>
                            <form class="form-search">
                                <fieldset class="name">
                                    <input type="text" placeholder="Search here..." class="" name="name"
                                        tabindex="2" value="" aria-required="true" required="">
                                </fieldset>
                                <div class="button-submit">
                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <a class="tf-button style-1 w208" href="{{ route('category.create') }}"><i class="icon-plus"></i>Add
                            new</a>
                    </div>
                    <div class="wg-table table-all-category">
                        <ul class="table-title flex gap20 mb-14">
                            <li>
                                <div class="body-title">Category</div>
                            </li>
                            <li>
                                <div class="body-title">Icon</div>
                            </li>
                            <li>
                                <div class="body-title">Quantity</div>
                            </li>
                            <li>
                                <div class="body-title">Sale</div>
                            </li>
                            <li>
                                <div class="body-title">Start date</div>
                            </li>
                            <li>
                                <div class="body-title">Action</div>
                            </li>
                        </ul>
                        <ul class="flex flex-column">
                            @foreach ($categories as $category) 
                            <li class="product-item gap14">
                                <div class="image no-bg">
                                    <img src="images/products/51.png" alt="">
                                </div>
                                <div class="flex items-center justify-between gap20 flex-grow">
                                    <div class="name">
                                        <a href="product-list.html" class="body-title-2">{{$category->name}}</a>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M16.9219 15.8672V10.4881L17.5312 9.26948C17.8241 8.68369 17.9766 8.03775 17.9766 7.38281M17.9766 7.38281V5.97656H6.02344V7.38281M17.9766 7.38281H6.02344M6.02344 7.38281C6.02344 8.03775 6.17592 8.68369 6.4688 9.26948L7.07812 10.4881V15.8672M7.07812 17.2734V19.1369L6.4688 20.3555C6.1759 20.9413 6.02342 21.5873 6.02344 22.2422M6.02344 22.2422V23.6484H17.9766V22.2422M6.02344 22.2422H17.9766M17.9766 22.2422C17.9766 21.5873 17.8241 20.9413 17.5312 20.3555L16.9219 19.1369V17.2734M9.1875 5.97656V4.21875C9.1875 3.63628 9.65972 3.16406 10.2422 3.16406C10.8247 3.16406 11.2969 3.63628 11.2969 4.21875V5.97656M12.7031 3.51562V1.40625C12.7031 0.823781 13.1753 0.351562 13.7578 0.351562C14.3403 0.351562 14.8125 0.823781 14.8125 1.40625V3.51562C14.8125 4.09809 14.3403 4.57031 13.7578 4.57031C13.1753 4.57031 12.7031 4.09809 12.7031 3.51562Z"
                                                stroke="#111111" stroke-width="0.7" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.9219 12.9388C14.2014 10.2183 9.79861 10.2183 7.07812 12.9388"
                                                stroke="#111111" stroke-width="0.7" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M13.5251 17.2621C13.1584 16.875 13.1584 16.2657 13.5259 15.8784C13.8868 15.4977 14.1094 14.9822 14.1094 14.4141C14.1094 13.2491 13.165 12.3047 12 12.3047C10.835 12.3047 9.89062 13.2491 9.89062 14.4141C9.89062 14.9822 10.1132 15.4977 10.475 15.8785C10.8417 16.2657 10.8417 16.875 10.4741 17.2622C10.1132 17.6429 9.89062 18.1584 9.89062 18.7266C9.89062 19.8915 10.835 20.8359 12 20.8359C13.165 20.8359 14.1094 19.8915 14.1094 18.7266C14.1094 18.1584 13.8868 17.6429 13.5251 17.2621Z"
                                                stroke="#111111" stroke-width="0.7" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="body-text">1,638</div>
                                    <div class="body-text">20</div>
                                    <div class="body-text">20 Nov 2023</div>
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="icon-eye"></i>
                                        </div>
                                        <div class="item edit">
                                            <i class="icon-edit-3"></i>
                                        </div>
                                        <div class="item trash">
                                            <i class="icon-trash-2"></i>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Showing 10 entries</div>
                        <ul class="wg-pagination">
                            <li>
                                <a href="#"><i class="icon-chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /all-category -->
            </div>
            <!-- /main-content-wrap -->
        </div>
        <!-- /main-content-wrap -->
        <!-- bottom-page -->
        <div class="bottom-page">
            <div class="body-text">Copyright © 2024 Remos. Design with</div>
            <i class="icon-heart"></i>
            <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All
                rights reserved.</div>
        </div>
        <!-- /bottom-page -->
    </div>
@endsection
