<!DOCTYPE html>
<html lang="en" class="">

<head>
    <?php require_once('../include/head.php') ?>
</head>

<body dir="ltr" class="frontend-page    ">



    <div class="bravo_wrap">
        <?php require_once('../include/header.php') ?>


        <div class="bravo_search_hotel mt-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-3 col-md-12">
                        <div class="bravo_filter navbar-expand-lg navbar-expand-lg-collapse-block">
                            <button class="btn d-lg-none mb-5 p-0 collapsed" type="button" data-toggle="collapse"
                                data-target="#sidebar" aria-controls="sidebar" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i
                                    class="fa fa-caret-square-o-down text-primary font-size-20 card-btn-arrow ml-0 font-weight-normal"></i>
                                <span class="text-primary ml-2">Filter Search</span>
                            </button>
                            <div id="sidebar" class="navbar-expand-lg navbar-expand-lg-collapse-block collapse">

                                <div class="item pb-4 mb-2">
                                    <div class="sidebar border border-color-1 rounded-xs">
                                        <div class="p-4 mb-1">
                                            <form action="https://mytravel.bookingcore.co/hotel" class="bravo_form"
                                                method="get">
                                                <div class="item">
                                                    <span
                                                        class="d-block text-gray-1  font-weight-normal mb-0 text-left">
                                                        Location
                                                    </span>
                                                    <div class="mb-4">
                                                        <div
                                                            class="input-group border-bottom border-width-2 border-color-1 py-2">
                                                            <i
                                                                class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold font-size-22"></i>
                                                            <div
                                                                class="smart-search border-0 p-0 form-control  height-40">
                                                                <input type="text"
                                                                    class="smart-search-location parent_text  font-weight-bold font-size-16 shadow-none hero-form font-weight-bold border-0 p-0"
                                                                    readonly placeholder="Where are you going?" value=""
                                                                    data-onLoad="Loading..."
                                                                    data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:13,&quot;title&quot;:&quot;- Maryland&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;},{&quot;id&quot;:11,&quot;title&quot;:&quot; Ukraine (Alert)&quot;},{&quot;id&quot;:12,&quot;title&quot;:&quot; Slovakia&quot;},{&quot;id&quot;:14,&quot;title&quot;:&quot; &quot;}]">
                                                                <input type="hidden" class="child_id" name="location_id"
                                                                    value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <span class="d-block text-gray-1 text-left font-weight-normal">
                                                        Check In - Out
                                                    </span>
                                                    <div
                                                        class="border-bottom border-width-2 border-color-1 mb-4 form-content">
                                                        <div
                                                            class="u-datepicker input-group py-2 flex-nowrap form-date-search">
                                                            <div class="input-group-prepend">
                                                                <span
                                                                    class="d-flex align-items-center mr-2 font-size-21">
                                                                    <i
                                                                        class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="date-wrapper height-40 font-size-16 ml-1 shadow-none font-weight-bold form-control hero-form bg-transparent border-0 flatpickr-input p-0">
                                                                <div class="render check-in-render">07/31/2023</div>
                                                                <span> - </span>
                                                                <div class="render check-out-render">08/01/2023</div>
                                                            </div>
                                                            <input type="hidden" class="check-in-input"
                                                                value="07/31/2023" name="start">
                                                            <input type="hidden" class="check-out-input"
                                                                value="08/01/2023" name="end">
                                                            <input type="text" class="check-in-out" name="date"
                                                                value="2023-07-31 - 2023-08-01">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="col dropdown-custom px-0 mb-4 form-select-guests">
                                                        <span
                                                            class="d-block text-gray-1 text-left font-weight-normal">Guests</span>
                                                        <div class="flex-horizontal-center border-bottom border-width-2 border-color-1 py-2 d-flex  dropdown-toggle"
                                                            data-toggle="dropdown">
                                                            <i
                                                                class="flaticon-add-group d-flex align-items-center mr-3 font-size-20 text-primary font-weight-semi-bold"></i>
                                                            <div
                                                                class="text-black font-size-16 font-weight-semi-bold mr-auto">
                                                                <div class="render">
                                                                    <span class="adults"><span class="one ">1
                                                                            Adult</span> <span class=" d-none  multi"
                                                                            data-html=":count Adults">1
                                                                            Adults</span></span>
                                                                    -
                                                                    <span class="children">
                                                                        <span class="one " data-html=":count Child">0
                                                                            Child</span>
                                                                        <span class="multi  d-none "
                                                                            data-html=":count Children">0
                                                                            Children</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-menu select-guests-dropdown">
                                                            <div class="dropdown-item-row">
                                                                <div class="label">Adults</div>
                                                                <div class="val">
                                                                    <span class="btn-minus" data-input="adults"><i
                                                                            class="icon ion-md-remove"></i></span>
                                                                    <span class="count-display"><input type="number"
                                                                            name="adults" value="1" min="1"></span>
                                                                    <span class="btn-add" data-input="adults"><i
                                                                            class="icon ion-ios-add"></i></span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item-row">
                                                                <div class="label">Children</div>
                                                                <div class="val">
                                                                    <span class="btn-minus" data-input="children"><i
                                                                            class="icon ion-md-remove"></i></span>
                                                                    <span class="count-display"> <input type="number"
                                                                            name="children" value="0" min="0"> </span>
                                                                    <span class="btn-add" data-input="children"><i
                                                                            class="icon ion-ios-add"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit"
                                                        class="btn btn-primary height-60 w-100 font-weight-bold mb-xl-0 mb-lg-1 transition-3d-hover"><i
                                                            class="flaticon-magnifying-glass mr-2 font-size-17"></i>Search</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="item pb-4 mb-2">
                                    <a href="https://mytravel.bookingcore.co/hotel?_layout=map"
                                        class="d-block border border-color-1 rounded-xs">
                                        <img src="https://mytravel.bookingcore.co/themes/mytravel/images/map.jpg" alt=""
                                            width="100%">
                                    </a>
                                </div>
                                <form action="https://mytravel.bookingcore.co/hotel" class="bravo_form_filter">

                                    <div class="sidenav border border-color-8 rounded-xs">
                                        <div id="bravo-filter-price"
                                            class="accordion shadow-none bravo-filter-price border-bottom">
                                            <div class="border-0">
                                                <div class="card-collapse">
                                                    <h3 class="mb-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-block card-btn py-2  text-lh-3 collapsed"
                                                            data-toggle="collapse" data-target="#context-filter-price"
                                                            aria-expanded="false" aria-controls="context-filter-price">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span
                                                                        class="d-block font-size-lg-15 font-size-17 font-weight-bold text-dark">Price
                                                                        Range ($)</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fa fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="context-filter-price" class="collapse show"
                                                    data-parent="#bravo-filter-price">
                                                    <div class="card-body pt-0 ">
                                                        <div class="pb-3 mb-1 d-flex text-lh-1">
                                                            <span>$</span>
                                                            <span id="rangeSliderMinResult"></span>
                                                            <span class="mx-0dot5"> — </span>
                                                            <span>$</span>
                                                            <span id="rangeSliderMaxResult"></span>
                                                        </div>
                                                        <input class="filter-price" type="text" name="price_range"
                                                            data-extra-classes="u-range-slider height-35"
                                                            data-type="double" data-grid="false"
                                                            data-hide-from-to="true" data-min="300" data-max="900"
                                                            data-from="300" data-to="900" data-prefix="$"
                                                            data-result-min="#rangeSliderMinResult"
                                                            data-result-max="#rangeSliderMaxResult">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion rounded-0 shadow-none border-bottom">
                                            <div class="border-0">
                                                <div class="card-collapse">
                                                    <h3 class="mb-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-block card-btn py-2  text-lh-3 collapsed"
                                                            data-toggle="collapse" data-target="#rate">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span
                                                                        class="d-block font-size-lg-15 font-size-17 font-weight-bold text-dark text-lh-1dot4">Hotel
                                                                        Star</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fa fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="rate" class="collapse show">
                                                    <div class="card-body pt-0 mt-1 ">
                                                        <div
                                                            class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="star_rate5"
                                                                    name="star_rate[]" type="checkbox" value="5">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="star_rate5">
                                                                    <div
                                                                        class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div
                                                                            class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="star_rate4"
                                                                    name="star_rate[]" type="checkbox" value="4">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="star_rate4">
                                                                    <div
                                                                        class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div
                                                                            class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="star_rate3"
                                                                    name="star_rate[]" type="checkbox" value="3">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="star_rate3">
                                                                    <div
                                                                        class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div
                                                                            class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="star_rate2"
                                                                    name="star_rate[]" type="checkbox" value="2">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="star_rate2">
                                                                    <div
                                                                        class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div
                                                                            class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion rounded-0 shadow-none border-bottom">
                                            <div class="border-0">
                                                <div class="card-collapse">
                                                    <h3 class="mb-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-block card-btn py-2  text-lh-3 collapsed"
                                                            data-toggle="collapse" data-target="#review_score">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span
                                                                        class="d-block font-size-lg-15 font-size-17 font-weight-bold text-dark text-lh-1dot4">Review
                                                                        Score</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fa fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="review_score" class="collapse show">
                                                    <div class="card-body pt-0 mt-1 ">
                                                        <div
                                                            class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="review_score5"
                                                                    name="review_score[]" type="checkbox" value="5">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="review_score5">
                                                                    <div
                                                                        class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div
                                                                            class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="review_score4"
                                                                    name="review_score[]" type="checkbox" value="4">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="review_score4">
                                                                    <div
                                                                        class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div
                                                                            class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="review_score3"
                                                                    name="review_score[]" type="checkbox" value="3">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="review_score3">
                                                                    <div
                                                                        class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div
                                                                            class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="review_score2"
                                                                    name="review_score[]" type="checkbox" value="2">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="review_score2">
                                                                    <div
                                                                        class="d-inline-flex align-items-center font-size-13 text-lh-1 text-primary">
                                                                        <div
                                                                            class="green-lighter ml-1 letter-spacing-2">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="attr_5" class="accordion rounded-0 shadow-none">
                                            <div class="border-0">
                                                <div class="card-collapse" id="cityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-block card-btn py-2 text-lh-3 collapsed"
                                                            data-toggle="collapse" data-target="#attr_more_5"
                                                            aria-expanded="false" aria-controls="attr_more_5">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span
                                                                        class="font-weight-bold font-size-17 text-dark mb-3">Property
                                                                        type</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fa fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="attr_more_5" class="collapse show"
                                                    aria-labelledby="cityCategoryHeadingOne" data-parent="#attr_5">
                                                    <div class="card-body pt-0 mt-1  pb-4">
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_32" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="32">
                                                                <label class="custom-control-label"
                                                                    for="term_32">Apartments</label>
                                                            </div>
                                                            <span>10</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_33" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="33">
                                                                <label class="custom-control-label"
                                                                    for="term_33">Hotels</label>
                                                            </div>
                                                            <span>9</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_34" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="34">
                                                                <label class="custom-control-label"
                                                                    for="term_34">Homestays</label>
                                                            </div>
                                                            <span>10</span>
                                                        </div>
                                                        <div class="collapse" id="more_term_41">
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_35" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="35">
                                                                    <label class="custom-control-label"
                                                                        for="term_35">Villas</label>
                                                                </div>
                                                                <span>10</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_36" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="36">
                                                                    <label class="custom-control-label"
                                                                        for="term_36">Boats</label>
                                                                </div>
                                                                <span>9</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_37" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="37">
                                                                    <label class="custom-control-label"
                                                                        for="term_37">Motels</label>
                                                                </div>
                                                                <span>10</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_38" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="38">
                                                                    <label class="custom-control-label"
                                                                        for="term_38">Resorts</label>
                                                                </div>
                                                                <span>11</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_39" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="39">
                                                                    <label class="custom-control-label"
                                                                        for="term_39">Lodges</label>
                                                                </div>
                                                                <span>9</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_40" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="40">
                                                                    <label class="custom-control-label"
                                                                        for="term_40">Holiday homes</label>
                                                                </div>
                                                                <span>11</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_41" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="41">
                                                                    <label class="custom-control-label"
                                                                        for="term_41">Cruises</label>
                                                                </div>
                                                                <span>9</span>
                                                            </div>
                                                        </div>
                                                        <a class="link link-collapse small font-size-1 mt-2"
                                                            data-toggle="collapse" href="#more_term_41" role="button"
                                                            aria-expanded="false" aria-controls="more_term_41">
                                                            <span class="link-collapse__default font-size-14">Show
                                                                all</span>
                                                            <span class="link-collapse__active font-size-14">Show
                                                                less</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="attr_6" class="accordion rounded-0 shadow-none">
                                            <div class="border-0">
                                                <div class="card-collapse" id="cityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-block card-btn py-2 text-lh-3 collapsed"
                                                            data-toggle="collapse" data-target="#attr_more_6"
                                                            aria-expanded="false" aria-controls="attr_more_6">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span
                                                                        class="font-weight-bold font-size-17 text-dark mb-3">Facilities</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fa fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="attr_more_6" class="collapse show"
                                                    aria-labelledby="cityCategoryHeadingOne" data-parent="#attr_6">
                                                    <div class="card-body pt-0 mt-1  pb-4">
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_42" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="42">
                                                                <label class="custom-control-label"
                                                                    for="term_42">Wake-up call</label>
                                                            </div>
                                                            <span>11</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_43" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="43">
                                                                <label class="custom-control-label" for="term_43">Car
                                                                    hire</label>
                                                            </div>
                                                            <span>7</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_44" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="44">
                                                                <label class="custom-control-label"
                                                                    for="term_44">Bicycle hire</label>
                                                            </div>
                                                            <span>10</span>
                                                        </div>
                                                        <div class="collapse" id="more_term_48">
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_45" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="45">
                                                                    <label class="custom-control-label"
                                                                        for="term_45">Flat Tv</label>
                                                                </div>
                                                                <span>10</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_46" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="46">
                                                                    <label class="custom-control-label"
                                                                        for="term_46">Laundry and dry cleaning</label>
                                                                </div>
                                                                <span>10</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_47" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="47">
                                                                    <label class="custom-control-label"
                                                                        for="term_47">Internet – Wifi</label>
                                                                </div>
                                                                <span>9</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_48" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="48">
                                                                    <label class="custom-control-label"
                                                                        for="term_48">Coffee and tea</label>
                                                                </div>
                                                                <span>7</span>
                                                            </div>
                                                        </div>
                                                        <a class="link link-collapse small font-size-1 mt-2"
                                                            data-toggle="collapse" href="#more_term_48" role="button"
                                                            aria-expanded="false" aria-controls="more_term_48">
                                                            <span class="link-collapse__default font-size-14">Show
                                                                all</span>
                                                            <span class="link-collapse__active font-size-14">Show
                                                                less</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="attr_7" class="accordion rounded-0 shadow-none">
                                            <div class="border-0">
                                                <div class="card-collapse" id="cityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-block card-btn py-2 text-lh-3 collapsed"
                                                            data-toggle="collapse" data-target="#attr_more_7"
                                                            aria-expanded="false" aria-controls="attr_more_7">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span
                                                                        class="font-weight-bold font-size-17 text-dark mb-3">Hotel
                                                                        Service</span>
                                                                </span>
                                                                <span class="col-3 text-right">
                                                                    <span class="card-btn-arrow">
                                                                        <span class="fa fa-chevron-down small"></span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </h3>
                                                </div>
                                                <div id="attr_more_7" class="collapse show"
                                                    aria-labelledby="cityCategoryHeadingOne" data-parent="#attr_7">
                                                    <div class="card-body pt-0 mt-1  pb-4">
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_49" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="49">
                                                                <label class="custom-control-label" for="term_49">Havana
                                                                    Lobby bar</label>
                                                            </div>
                                                            <span>4</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_50" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="50">
                                                                <label class="custom-control-label" for="term_50">Fiesta
                                                                    Restaurant</label>
                                                            </div>
                                                            <span>9</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_51" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="51">
                                                                <label class="custom-control-label" for="term_51">Hotel
                                                                    transport services</label>
                                                            </div>
                                                            <span>7</span>
                                                        </div>
                                                        <div class="collapse" id="more_term_55">
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_52" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="52">
                                                                    <label class="custom-control-label"
                                                                        for="term_52">Free luggage deposit</label>
                                                                </div>
                                                                <span>4</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_53" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="53">
                                                                    <label class="custom-control-label"
                                                                        for="term_53">Laundry Services</label>
                                                                </div>
                                                                <span>10</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_54" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="54">
                                                                    <label class="custom-control-label"
                                                                        for="term_54">Pets welcome</label>
                                                                </div>
                                                                <span>7</span>
                                                            </div>
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_55" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="55">
                                                                    <label class="custom-control-label"
                                                                        for="term_55">Tickets</label>
                                                                </div>
                                                                <span>9</span>
                                                            </div>
                                                        </div>
                                                        <a class="link link-collapse small font-size-1 mt-2"
                                                            data-toggle="collapse" href="#more_term_55" role="button"
                                                            aria-expanded="false" aria-controls="more_term_55">
                                                            <span class="link-collapse__default font-size-14">Show
                                                                all</span>
                                                            <span class="link-collapse__active font-size-14">Show
                                                                less</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>




                    </div>
                    <div class="col-lg-8 col-xl-9 col-md-12">
                        <div class="bravo-list-item">
                            <div class="d-flex justify-content-between align-items-center mb-4 topbar-search">
                                <h3 class="font-size-21 font-weight-bold mb-0 text-lh-1">
                                    11 hotels found
                                </h3>
                                <div class="control">
                                    <div class="item">
                                        <a href="https://mytravel.bookingcore.co/hotel?_layout=map">Show on the map</a>
                                    </div>
                                    <div class="item">
                                        <div class="item-title">
                                            Sort by:
                                        </div>
                                        <div class="dropdown">
                                            <span class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Recommended
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="https://mytravel.bookingcore.co/hotel?orderby=">Recommended</a>
                                                <a class="dropdown-item"
                                                    href="https://mytravel.bookingcore.co/hotel?orderby=price_low_high">Price
                                                    (Low to high)</a>
                                                <a class="dropdown-item"
                                                    href="https://mytravel.bookingcore.co/hotel?orderby=price_high_low">Price
                                                    (High to low)</a>
                                                <a class="dropdown-item"
                                                    href="https://mytravel.bookingcore.co/hotel?orderby=rate_high_low">Rating
                                                    (High to low)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <a href="https://mytravel.bookingcore.co/hotel/dylan-hotel"
                                                                    class="d-block">
                                                                    <img class="min-height-230 bg-img-hero card-img-top"
                                                                        src="https://mytravel.bookingcore.co/uploads/mytravel/space/space-2.jpg"
                                                                        alt="Dylan Hotel">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span
                                                                    class="badge badge-orange text-white rounded-xs font-size-13 py-1 p-xl-2 mr-2">Featured</span>
                                                                <span class="green-lighter mr-2">
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block rtl-left-0 rtl-right-auto">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon rounded-circle"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="Save for later">
                                                                    <span class="service-wishlist " data-id="10"
                                                                        data-type="hotel">
                                                                        <span
                                                                            class="flaticon-heart-1 font-size-20"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <a href="https://mytravel.bookingcore.co/hotel/dylan-hotel">
                                                                <span
                                                                    class="font-weight-medium font-size-17 text-dark d-flex mb-1">Dylan
                                                                    Hotel </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <div
                                                                    class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                    <i
                                                                        class="icon flaticon-placeholder mr-2 font-size-20"></i>New
                                                                    York, United States
                                                                    <small class="px-1 font-size-15"> - </small>
                                                                    <a target="_blank"
                                                                        href="https://www.google.com/maps/place/19.229727,72.984470/@19.229727,72.984470,12z">
                                                                        <span class="text-primary font-size-14">View on
                                                                            map</span>
                                                                    </a>
                                                                </div>
                                                                <span class="attr-title mb-1 d-block"><i
                                                                        class="icofont-medal"></i> Facilities: </span>
                                                                <ul
                                                                    class="list-unstyled mb-2 d-flex flex-lg-wrap flex-xl-wrap">
                                                                    <li
                                                                        class="item wake-up-call term-42 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Wake-up
                                                                            call</span>
                                                                    </li>
                                                                    <li
                                                                        class="item car-hire term-43 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Car
                                                                            hire</span>
                                                                    </li>
                                                                    <li
                                                                        class="item bicycle-hire term-44 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Bicycle
                                                                            hire</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div
                                                            class="border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end rtl-pr-0 rtl-pl-wd-5 rtl-border-xl-left-0 rtl-border-xl-right">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span
                                                                                class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.0
                                                                                /5 </span>
                                                                            <span
                                                                                class="font-size-17 font-weight-bold text-primary">Very
                                                                                Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">
                                                                        (5 reviews)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">from</span>
                                                                <span class="font-weight-bold">$550</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <a href="https://mytravel.bookingcore.co/hotel/parian-holiday-villas"
                                                                    class="d-block">
                                                                    <img class="min-height-230 bg-img-hero card-img-top"
                                                                        src="https://mytravel.bookingcore.co/uploads/mytravel/space/space-13.jpg"
                                                                        alt="Parian Holiday Villas">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span
                                                                    class="badge badge-orange text-white rounded-xs font-size-13 py-1 p-xl-2 mr-2">Featured</span>
                                                                <span class="green-lighter mr-2">
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block rtl-left-0 rtl-right-auto">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon rounded-circle"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="Save for later">
                                                                    <span class="service-wishlist " data-id="9"
                                                                        data-type="hotel">
                                                                        <span
                                                                            class="flaticon-heart-1 font-size-20"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <a
                                                                href="https://mytravel.bookingcore.co/hotel/parian-holiday-villas">
                                                                <span
                                                                    class="font-weight-medium font-size-17 text-dark d-flex mb-1">Parian
                                                                    Holiday Villas </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <div
                                                                    class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                    <i
                                                                        class="icon flaticon-placeholder mr-2 font-size-20"></i>Paris
                                                                    <small class="px-1 font-size-15"> - </small>
                                                                    <a target="_blank"
                                                                        href="https://www.google.com/maps/place/19.161637,72.997510/@19.161637,72.997510,12z">
                                                                        <span class="text-primary font-size-14">View on
                                                                            map</span>
                                                                    </a>
                                                                </div>
                                                                <span class="attr-title mb-1 d-block"><i
                                                                        class="icofont-medal"></i> Facilities: </span>
                                                                <ul
                                                                    class="list-unstyled mb-2 d-flex flex-lg-wrap flex-xl-wrap">
                                                                    <li
                                                                        class="item wake-up-call term-42 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Wake-up
                                                                            call</span>
                                                                    </li>
                                                                    <li
                                                                        class="item bicycle-hire term-44 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Bicycle
                                                                            hire</span>
                                                                    </li>
                                                                    <li
                                                                        class="item flat-tv term-45 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Flat
                                                                            Tv</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div
                                                            class="border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end rtl-pr-0 rtl-pl-wd-5 rtl-border-xl-left-0 rtl-border-xl-right">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span
                                                                                class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">5.0
                                                                                /5 </span>
                                                                            <span
                                                                                class="font-size-17 font-weight-bold text-primary">Excellent</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">
                                                                        (4 reviews)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">from</span>
                                                                <span class="font-weight-bold">$550</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <a href="https://mytravel.bookingcore.co/hotel/the-may-fair-hotel"
                                                                    class="d-block">
                                                                    <img class="min-height-230 bg-img-hero card-img-top"
                                                                        src="https://mytravel.bookingcore.co/uploads/mytravel/space/space-5.jpg"
                                                                        alt="The May Fair Hotel">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter mr-2">
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block rtl-left-0 rtl-right-auto">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon rounded-circle"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="Save for later">
                                                                    <span class="service-wishlist " data-id="11"
                                                                        data-type="hotel">
                                                                        <span
                                                                            class="flaticon-heart-1 font-size-20"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <a
                                                                href="https://mytravel.bookingcore.co/hotel/the-may-fair-hotel">
                                                                <span
                                                                    class="font-weight-medium font-size-17 text-dark d-flex mb-1">The
                                                                    May Fair Hotel </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <div
                                                                    class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                    <i
                                                                        class="icon flaticon-placeholder mr-2 font-size-20"></i>Paris
                                                                    <small class="px-1 font-size-15"> - </small>
                                                                    <a target="_blank"
                                                                        href="https://www.google.com/maps/place/19.277696,72.887009/@19.277696,72.887009,12z">
                                                                        <span class="text-primary font-size-14">View on
                                                                            map</span>
                                                                    </a>
                                                                </div>
                                                                <span class="attr-title mb-1 d-block"><i
                                                                        class="icofont-medal"></i> Facilities: </span>
                                                                <ul
                                                                    class="list-unstyled mb-2 d-flex flex-lg-wrap flex-xl-wrap">
                                                                    <li
                                                                        class="item wake-up-call term-42 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Wake-up
                                                                            call</span>
                                                                    </li>
                                                                    <li
                                                                        class="item bicycle-hire term-44 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Bicycle
                                                                            hire</span>
                                                                    </li>
                                                                    <li
                                                                        class="item flat-tv term-45 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Flat
                                                                            Tv</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div
                                                            class="border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end rtl-pr-0 rtl-pl-wd-5 rtl-border-xl-left-0 rtl-border-xl-right">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span
                                                                                class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">5.0
                                                                                /5 </span>
                                                                            <span
                                                                                class="font-size-17 font-weight-bold text-primary">Excellent</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">
                                                                        (4 reviews)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">from</span>
                                                                <span class="font-weight-bold">$550</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <a href="https://mytravel.bookingcore.co/hotel/stewart-hotel"
                                                                    class="d-block">
                                                                    <img class="min-height-230 bg-img-hero card-img-top"
                                                                        src="https://mytravel.bookingcore.co/uploads/mytravel/space/space-12.jpg"
                                                                        alt="Stewart Hotel">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter mr-2">
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block rtl-left-0 rtl-right-auto">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon rounded-circle"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="Save for later">
                                                                    <span class="service-wishlist " data-id="8"
                                                                        data-type="hotel">
                                                                        <span
                                                                            class="flaticon-heart-1 font-size-20"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <a
                                                                href="https://mytravel.bookingcore.co/hotel/stewart-hotel">
                                                                <span
                                                                    class="font-weight-medium font-size-17 text-dark d-flex mb-1">Stewart
                                                                    Hotel </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <div
                                                                    class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                    <i
                                                                        class="icon flaticon-placeholder mr-2 font-size-20"></i>Los
                                                                    Angeles
                                                                    <small class="px-1 font-size-15"> - </small>
                                                                    <a target="_blank"
                                                                        href="https://www.google.com/maps/place/19.080542,73.010551/@19.080542,73.010551,12z">
                                                                        <span class="text-primary font-size-14">View on
                                                                            map</span>
                                                                    </a>
                                                                </div>
                                                                <span class="attr-title mb-1 d-block"><i
                                                                        class="icofont-medal"></i> Facilities: </span>
                                                                <ul
                                                                    class="list-unstyled mb-2 d-flex flex-lg-wrap flex-xl-wrap">
                                                                    <li
                                                                        class="item wake-up-call term-42 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Wake-up
                                                                            call</span>
                                                                    </li>
                                                                    <li
                                                                        class="item car-hire term-43 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Car
                                                                            hire</span>
                                                                    </li>
                                                                    <li
                                                                        class="item bicycle-hire term-44 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Bicycle
                                                                            hire</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div
                                                            class="border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end rtl-pr-0 rtl-pl-wd-5 rtl-border-xl-left-0 rtl-border-xl-right">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span
                                                                                class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.0
                                                                                /5 </span>
                                                                            <span
                                                                                class="font-size-17 font-weight-bold text-primary">Very
                                                                                Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">
                                                                        (2 reviews)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">from</span>
                                                                <span class="font-weight-bold">$900</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <a href="https://mytravel.bookingcore.co/hotel/crowne-plaza-hotel"
                                                                    class="d-block">
                                                                    <img class="min-height-230 bg-img-hero card-img-top"
                                                                        src="https://mytravel.bookingcore.co/uploads/mytravel/space/space-11.jpg"
                                                                        alt="Crowne Plaza Hotel">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter mr-2">
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block rtl-left-0 rtl-right-auto">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon rounded-circle"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="Save for later">
                                                                    <span class="service-wishlist " data-id="7"
                                                                        data-type="hotel">
                                                                        <span
                                                                            class="flaticon-heart-1 font-size-20"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <a
                                                                href="https://mytravel.bookingcore.co/hotel/crowne-plaza-hotel">
                                                                <span
                                                                    class="font-weight-medium font-size-17 text-dark d-flex mb-1">Crowne
                                                                    Plaza Hotel </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <div
                                                                    class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                    <i
                                                                        class="icon flaticon-placeholder mr-2 font-size-20"></i>New
                                                                    York, United States
                                                                    <small class="px-1 font-size-15"> - </small>
                                                                    <a target="_blank"
                                                                        href="https://www.google.com/maps/place/19.001355,73.111444/@19.001355,73.111444,12z">
                                                                        <span class="text-primary font-size-14">View on
                                                                            map</span>
                                                                    </a>
                                                                </div>
                                                                <span class="attr-title mb-1 d-block"><i
                                                                        class="icofont-medal"></i> Facilities: </span>
                                                                <ul
                                                                    class="list-unstyled mb-2 d-flex flex-lg-wrap flex-xl-wrap">
                                                                    <li
                                                                        class="item wake-up-call term-42 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Wake-up
                                                                            call</span>
                                                                    </li>
                                                                    <li
                                                                        class="item car-hire term-43 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Car
                                                                            hire</span>
                                                                    </li>
                                                                    <li
                                                                        class="item bicycle-hire term-44 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Bicycle
                                                                            hire</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div
                                                            class="border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end rtl-pr-0 rtl-pl-wd-5 rtl-border-xl-left-0 rtl-border-xl-right">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span
                                                                                class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.8
                                                                                /5 </span>
                                                                            <span
                                                                                class="font-size-17 font-weight-bold text-primary">Excellent</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">
                                                                        (4 reviews)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">from</span>
                                                                <span class="font-weight-bold">$900</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <a href="https://mytravel.bookingcore.co/hotel/envision-hotel-biston"
                                                                    class="d-block">
                                                                    <img class="min-height-230 bg-img-hero card-img-top"
                                                                        src="https://mytravel.bookingcore.co/uploads/mytravel/space/space-10.jpg"
                                                                        alt="EnVision Hotel Boston">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter mr-2">
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block rtl-left-0 rtl-right-auto">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon rounded-circle"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="Save for later">
                                                                    <span class="service-wishlist " data-id="6"
                                                                        data-type="hotel">
                                                                        <span
                                                                            class="flaticon-heart-1 font-size-20"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <a
                                                                href="https://mytravel.bookingcore.co/hotel/envision-hotel-biston">
                                                                <span
                                                                    class="font-weight-medium font-size-17 text-dark d-flex mb-1">EnVision
                                                                    Hotel Boston </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <div
                                                                    class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                    <i
                                                                        class="icon flaticon-placeholder mr-2 font-size-20"></i>California
                                                                    <small class="px-1 font-size-15"> - </small>
                                                                    <a target="_blank"
                                                                        href="https://www.google.com/maps/place/18.873011,72.975724/@18.873011,72.975724,12z">
                                                                        <span class="text-primary font-size-14">View on
                                                                            map</span>
                                                                    </a>
                                                                </div>
                                                                <span class="attr-title mb-1 d-block"><i
                                                                        class="icofont-medal"></i> Facilities: </span>
                                                                <ul
                                                                    class="list-unstyled mb-2 d-flex flex-lg-wrap flex-xl-wrap">
                                                                    <li
                                                                        class="item wake-up-call term-42 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Wake-up
                                                                            call</span>
                                                                    </li>
                                                                    <li
                                                                        class="item car-hire term-43 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Car
                                                                            hire</span>
                                                                    </li>
                                                                    <li
                                                                        class="item bicycle-hire term-44 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Bicycle
                                                                            hire</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div
                                                            class="border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end rtl-pr-0 rtl-pl-wd-5 rtl-border-xl-left-0 rtl-border-xl-right">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span
                                                                                class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.7
                                                                                /5 </span>
                                                                            <span
                                                                                class="font-size-17 font-weight-bold text-primary">Excellent</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">
                                                                        (3 reviews)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">from</span>
                                                                <span class="font-weight-bold">$700</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <a href="https://mytravel.bookingcore.co/hotel/studio-allston-hotel"
                                                                    class="d-block">
                                                                    <img class="min-height-230 bg-img-hero card-img-top"
                                                                        src="https://mytravel.bookingcore.co/uploads/mytravel/space/space-9.jpg"
                                                                        alt="Studio Allston Hotel">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter mr-2">
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block rtl-left-0 rtl-right-auto">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon rounded-circle"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="Save for later">
                                                                    <span class="service-wishlist " data-id="5"
                                                                        data-type="hotel">
                                                                        <span
                                                                            class="flaticon-heart-1 font-size-20"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <a
                                                                href="https://mytravel.bookingcore.co/hotel/studio-allston-hotel">
                                                                <span
                                                                    class="font-weight-medium font-size-17 text-dark d-flex mb-1">Studio
                                                                    Allston Hotel </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <div
                                                                    class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                    <i
                                                                        class="icon flaticon-placeholder mr-2 font-size-20"></i>Los
                                                                    Angeles
                                                                    <small class="px-1 font-size-15"> - </small>
                                                                    <a target="_blank"
                                                                        href="https://www.google.com/maps/place/18.972786,72.819724/@18.972786,72.819724,12z">
                                                                        <span class="text-primary font-size-14">View on
                                                                            map</span>
                                                                    </a>
                                                                </div>
                                                                <span class="attr-title mb-1 d-block"><i
                                                                        class="icofont-medal"></i> Facilities: </span>
                                                                <ul
                                                                    class="list-unstyled mb-2 d-flex flex-lg-wrap flex-xl-wrap">
                                                                    <li
                                                                        class="item wake-up-call term-42 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Wake-up
                                                                            call</span>
                                                                    </li>
                                                                    <li
                                                                        class="item bicycle-hire term-44 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Bicycle
                                                                            hire</span>
                                                                    </li>
                                                                    <li
                                                                        class="item flat-tv term-45 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Flat
                                                                            Tv</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div
                                                            class="border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end rtl-pr-0 rtl-pl-wd-5 rtl-border-xl-left-0 rtl-border-xl-right">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span
                                                                                class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.4
                                                                                /5 </span>
                                                                            <span
                                                                                class="font-size-17 font-weight-bold text-primary">Very
                                                                                Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">
                                                                        (5 reviews)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">from</span>
                                                                <span class="font-weight-bold">$500</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <a href="https://mytravel.bookingcore.co/hotel/redac-gateway-hotel"
                                                                    class="d-block">
                                                                    <img class="min-height-230 bg-img-hero card-img-top"
                                                                        src="https://mytravel.bookingcore.co/uploads/mytravel/space/space-8.jpg"
                                                                        alt="Redac Gateway Hotel">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter mr-2">
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block rtl-left-0 rtl-right-auto">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon rounded-circle"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="Save for later">
                                                                    <span class="service-wishlist " data-id="4"
                                                                        data-type="hotel">
                                                                        <span
                                                                            class="flaticon-heart-1 font-size-20"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <a
                                                                href="https://mytravel.bookingcore.co/hotel/redac-gateway-hotel">
                                                                <span
                                                                    class="font-weight-medium font-size-17 text-dark d-flex mb-1">Redac
                                                                    Gateway Hotel </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <div
                                                                    class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                    <i
                                                                        class="icon flaticon-placeholder mr-2 font-size-20"></i>Paris
                                                                    <small class="px-1 font-size-15"> - </small>
                                                                    <a target="_blank"
                                                                        href="https://www.google.com/maps/place/19.031217,72.851982/@19.031217,72.851982,12z">
                                                                        <span class="text-primary font-size-14">View on
                                                                            map</span>
                                                                    </a>
                                                                </div>
                                                                <span class="attr-title mb-1 d-block"><i
                                                                        class="icofont-medal"></i> Facilities: </span>
                                                                <ul
                                                                    class="list-unstyled mb-2 d-flex flex-lg-wrap flex-xl-wrap">
                                                                    <li
                                                                        class="item wake-up-call term-42 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Wake-up
                                                                            call</span>
                                                                    </li>
                                                                    <li
                                                                        class="item car-hire term-43 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Car
                                                                            hire</span>
                                                                    </li>
                                                                    <li
                                                                        class="item flat-tv term-45 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Flat
                                                                            Tv</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div
                                                            class="border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end rtl-pr-0 rtl-pl-wd-5 rtl-border-xl-left-0 rtl-border-xl-right">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span
                                                                                class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.8
                                                                                /5 </span>
                                                                            <span
                                                                                class="font-size-17 font-weight-bold text-primary">Excellent</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">
                                                                        (4 reviews)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">from</span>
                                                                <span class="font-weight-bold">$500</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <li class="card mb-5 overflow-hidden">
                                            <div class="product-item__outer w-100">
                                                <div class="row">
                                                    <div class="col-md-5 col-xl-4">
                                                        <div class="product-item__header">
                                                            <div class="position-relative">
                                                                <a href="https://mytravel.bookingcore.co/hotel/castello-casole-hotel"
                                                                    class="d-block">
                                                                    <img class="min-height-230 bg-img-hero card-img-top"
                                                                        src="https://mytravel.bookingcore.co/uploads/mytravel/space/space-7.jpg"
                                                                        alt="Castello Casole Hotel">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 col-xl-5 col-wd-4gdot5 flex-horizontal-center">
                                                        <div class="w-100 position-relative m-4 m-md-0">
                                                            <div class="mb-1 pb-1">
                                                                <span class="green-lighter mr-2">
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                    <small class="fa fa-star font-size-12"></small>
                                                                </span>
                                                            </div>
                                                            <div
                                                                class="position-absolute top-0 right-0 pr-md-3 d-none d-md-block rtl-left-0 rtl-right-auto">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-icon rounded-circle"
                                                                    data-toggle="tooltip" data-placement="top" title=""
                                                                    data-original-title="Save for later">
                                                                    <span class="service-wishlist " data-id="3"
                                                                        data-type="hotel">
                                                                        <span
                                                                            class="flaticon-heart-1 font-size-20"></span>
                                                                    </span>
                                                                </button>
                                                            </div>
                                                            <a
                                                                href="https://mytravel.bookingcore.co/hotel/castello-casole-hotel">
                                                                <span
                                                                    class="font-weight-medium font-size-17 text-dark d-flex mb-1">Castello
                                                                    Casole Hotel </span>
                                                            </a>
                                                            <div class="card-body p-0">
                                                                <div
                                                                    class="d-flex flex-wrap flex-xl-nowrap align-items-center font-size-14 text-gray-1">
                                                                    <i
                                                                        class="icon flaticon-placeholder mr-2 font-size-20"></i>Paris
                                                                    <small class="px-1 font-size-15"> - </small>
                                                                    <a target="_blank"
                                                                        href="https://www.google.com/maps/place/19.077946,72.838255/@19.077946,72.838255,12z">
                                                                        <span class="text-primary font-size-14">View on
                                                                            map</span>
                                                                    </a>
                                                                </div>
                                                                <span class="attr-title mb-1 d-block"><i
                                                                        class="icofont-medal"></i> Facilities: </span>
                                                                <ul
                                                                    class="list-unstyled mb-2 d-flex flex-lg-wrap flex-xl-wrap">
                                                                    <li
                                                                        class="item wake-up-call term-42 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Wake-up
                                                                            call</span>
                                                                    </li>
                                                                    <li
                                                                        class="item car-hire term-43 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Car
                                                                            hire</span>
                                                                    </li>
                                                                    <li
                                                                        class="item bicycle-hire term-44 border border-dark rounded-xs d-flex align-items-center text-lh-1 py-1 px-2 mr-2 mb-2 mb-md-0 mb-lg-2 mb-xl-2">
                                                                        <span
                                                                            class="font-weight-normal font-size-14">Bicycle
                                                                            hire</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col col-xl-3 col-wd-3gdot5 align-self-center py-4 py-xl-0 border-top border-xl-top-0">
                                                        <div
                                                            class="border-xl-left ml-4 ml-xl-0 pr-xl-3 pr-wd-5 text-xl-right justify-content-xl-end rtl-pr-0 rtl-pl-wd-5 rtl-border-xl-left-0 rtl-border-xl-right">
                                                            <div class="mb-xl-5 mb-wd-7">
                                                                <div class="mb-0">
                                                                    <div class="my-xl-1">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-xl-end mb-2">
                                                                            <span
                                                                                class="badge badge-primary rounded-xs font-size-14 p-2 mr-2 mb-0">4.3
                                                                                /5 </span>
                                                                            <span
                                                                                class="font-size-17 font-weight-bold text-primary">Very
                                                                                Good</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="font-size-14 text-gray-1">
                                                                        (4 reviews)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="mb-0">
                                                                <span class="mr-1 font-size-14 text-gray-1">from</span>
                                                                <span class="font-weight-bold">$350</span>
                                                                <span class="font-size-14 text-gray-1"> / night</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center text-md-left font-size-14 mb-3 text-lh-1 mt-2">Showing 1 - 9 of 11
                                Hotels</div>
                            <nav class="mt-2">
                                <ul class="pagination">

                                    <li class="disabled page-item" aria-disabled="true" aria-label="&laquo; Previous">
                                        <span aria-hidden="true" class="page-link">&lsaquo;</span>
                                    </li>





                                    <li class="active page-item " aria-current="page"><span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://mytravel.bookingcore.co/hotel?page=2">2</a></li>


                                    <li class="page-item">
                                        <a class="page-link" href="https://mytravel.bookingcore.co/hotel?page=2"
                                            rel="next" aria-label="Next &raquo;">&rsaquo;</a>
                                    </li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once('../include/footer.php') ?>

        <?php require_once('../include/foot.php') ?>