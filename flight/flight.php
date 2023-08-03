<!DOCTYPE html>
<html lang="en" class="">

<head>
<?php require_once('../include/head.php') ?>
</head>

<body dir="ltr" class="frontend-page    ">



    <div class="bravo_wrap">
    <?php require_once('../include/header.php') ?>



        <div class="bravo_search_flight">
            <div class="bg-gray-33 py-1">
                <div class="container">
                    <div class="border-0">
                        <div class="card-body pl-0 pr-0">
                            <form action="https://mytravel.bookingcore.co/flight"
                                class="form bravo_form d-flex mb-1 py-2" method="get">
                                <div class="g-field-search">
                                    <div class="row ">
                                        <div class="col-md-3 mb-4 mb-xl-0 ">
                                            <div class="item">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1  font-weight-normal mb-0 text-left">
                                                    From where
                                                </span>
                                                <div class="mb-4">
                                                    <div class="input-group border-bottom-1 py-2">
                                                        <i
                                                            class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                        <div
                                                            class="smart-search border-0 p-0 form-control  height-40  bg-transparent">
                                                            <input type="text"
                                                                class="smart-search-location parent_text  font-weight-bold font-size-16 shadow-none hero-form font-weight-bold border-0 p-0 "
                                                                readonly placeholder="Where are you going?" value=""
                                                                data-onLoad="Loading..."
                                                                data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:13,&quot;title&quot;:&quot;- Maryland&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;},{&quot;id&quot;:11,&quot;title&quot;:&quot; Ukraine (Alert)&quot;},{&quot;id&quot;:12,&quot;title&quot;:&quot; Slovakia&quot;},{&quot;id&quot;:14,&quot;title&quot;:&quot; &quot;}]">
                                                            <input type="hidden" class="child_id" name="from_where"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4 mb-xl-0 ">
                                            <div class="item">
                                                <!-- Input -->
                                                <span class="d-block text-gray-1  font-weight-normal mb-0 text-left">
                                                    To where
                                                </span>
                                                <div class="mb-4">
                                                    <div class="input-group border-bottom-1 py-2">
                                                        <i
                                                            class="flaticon-pin-1 d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                        <div
                                                            class="smart-search border-0 p-0 form-control  height-40  bg-transparent">
                                                            <input type="text"
                                                                class="smart-search-location parent_text  font-weight-bold font-size-16 shadow-none hero-form font-weight-bold border-0 p-0 "
                                                                readonly placeholder="Where are you going?" value=""
                                                                data-onLoad="Loading..."
                                                                data-default="[{&quot;id&quot;:1,&quot;title&quot;:&quot; Paris&quot;},{&quot;id&quot;:2,&quot;title&quot;:&quot; New York, United States&quot;},{&quot;id&quot;:3,&quot;title&quot;:&quot; California&quot;},{&quot;id&quot;:4,&quot;title&quot;:&quot; United States&quot;},{&quot;id&quot;:13,&quot;title&quot;:&quot;- Maryland&quot;},{&quot;id&quot;:5,&quot;title&quot;:&quot; Los Angeles&quot;},{&quot;id&quot;:6,&quot;title&quot;:&quot; New Jersey&quot;},{&quot;id&quot;:7,&quot;title&quot;:&quot; San Francisco&quot;},{&quot;id&quot;:8,&quot;title&quot;:&quot; Virginia&quot;},{&quot;id&quot;:9,&quot;title&quot;:&quot; London&quot;},{&quot;id&quot;:10,&quot;title&quot;:&quot; Germany&quot;},{&quot;id&quot;:11,&quot;title&quot;:&quot; Ukraine (Alert)&quot;},{&quot;id&quot;:12,&quot;title&quot;:&quot; Slovakia&quot;},{&quot;id&quot;:14,&quot;title&quot;:&quot; &quot;}]">
                                                            <input type="hidden" class="child_id" name="to_where"
                                                                value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Input -->
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4 mb-xl-0 ">
                                            <div class="item">
                                                <span class="d-block text-gray-1 text-left font-weight-normal">
                                                    Depart
                                                </span>
                                                <div class="border-bottom-1 mb-4 form-content">
                                                    <div
                                                        class="u-datepicker input-group py-2 flex-nowrap form-date-search">
                                                        <div class="input-group-prepend">
                                                            <span class="d-flex align-items-center mr-2">
                                                                <i
                                                                    class="flaticon-calendar text-primary font-weight-semi-bold"></i>
                                                            </span>
                                                        </div>
                                                        <div
                                                            class="date-wrapper height-40 font-size-16 ml-1 shadow-none font-weight-bold form-control hero-form bg-transparent border-0 flatpickr-input p-0">
                                                            <div class="render check-in-render">07/31/2023</div>
                                                            <span> - </span>
                                                            <div class="render check-out-render">08/07/2023</div>
                                                        </div>
                                                        <input type="hidden" class="check-in-input" value="07/31/2023"
                                                            name="start">
                                                        <input type="hidden" class="check-out-input" value="08/07/2023"
                                                            name="end">
                                                        <input type="text" class="check-in-out" name="date"
                                                            value="2023-07-31 - 2023-08-07">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4 mb-xl-0 ">
                                            <div class="item">
                                                <div class="dropdown-custom px-0 mb-4 custom-select-dropdown-parent">
                                                    <span
                                                        class="d-block text-gray-1 text-left font-weight-normal">Travelers</span>
                                                    <div class="flex-horizontal-center border-bottom-1  py-2 d-flex  dropdown-toggle"
                                                        data-toggle="dropdown">
                                                        <i
                                                            class="flaticon-plus d-flex align-items-center mr-2 text-primary font-weight-semi-bold"></i>
                                                        <div
                                                            class="text-black font-size-16 font-weight-semi-bold mr-auto height-40 d-flex align-items-center overflow-hidden">
                                                            <div class="render">
                                                                <span class="" id="seat_type_vip_render">
                                                                    <span class="one ">0 Vip</span>
                                                                    <span class=" d-none  multi"
                                                                        data-html=":count Vip">0Vip</span>
                                                                </span>
                                                                <span class="" id="seat_type_eco_render">
                                                                    <span class="one ">0 Economy</span>
                                                                    <span class=" d-none  multi"
                                                                        data-html=":count Economy">0Economy</span>
                                                                </span>
                                                                <span class="" id="seat_type_premium_render">
                                                                    <span class="one ">0 Premium</span>
                                                                    <span class=" d-none  multi"
                                                                        data-html=":count Premium">0Premium</span>
                                                                </span>
                                                                <span class="" id="seat_type_business_render">
                                                                    <span class="one ">0 Business</span>
                                                                    <span class=" d-none  multi"
                                                                        data-html=":count Business">0Business</span>
                                                                </span>
                                                                <span class="" id="seat_type_fist_class_render">
                                                                    <span class="one ">0 First Class</span>
                                                                    <span class=" d-none  multi"
                                                                        data-html=":count First Class">0First
                                                                        Class</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu custom-select-dropdown">

                                                        <div class="dropdown-item-row">
                                                            <div class="label">Adults Vip</div>
                                                            <div class="val">
                                                                <span class="btn-minus" data-input="seat_type_vip"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-md-remove"></i></span>
                                                                <span class="count-display"><input id="seat_type_vip"
                                                                        type="number" name="seat_type[vip]" value="0"
                                                                        min="0"></span>
                                                                <span class="btn-add" data-input="seat_type_vip"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="dropdown-item-row">
                                                            <div class="label">Adults Economy</div>
                                                            <div class="val">
                                                                <span class="btn-minus" data-input="seat_type_eco"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-md-remove"></i></span>
                                                                <span class="count-display"><input id="seat_type_eco"
                                                                        type="number" name="seat_type[eco]" value="0"
                                                                        min="0"></span>
                                                                <span class="btn-add" data-input="seat_type_eco"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="dropdown-item-row">
                                                            <div class="label">Adults Premium</div>
                                                            <div class="val">
                                                                <span class="btn-minus" data-input="seat_type_premium"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-md-remove"></i></span>
                                                                <span class="count-display"><input
                                                                        id="seat_type_premium" type="number"
                                                                        name="seat_type[premium]" value="0"
                                                                        min="0"></span>
                                                                <span class="btn-add" data-input="seat_type_premium"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="dropdown-item-row">
                                                            <div class="label">Adults Business</div>
                                                            <div class="val">
                                                                <span class="btn-minus" data-input="seat_type_business"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-md-remove"></i></span>
                                                                <span class="count-display"><input
                                                                        id="seat_type_business" type="number"
                                                                        name="seat_type[business]" value="0"
                                                                        min="0"></span>
                                                                <span class="btn-add" data-input="seat_type_business"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>

                                                        <div class="dropdown-item-row">
                                                            <div class="label">Adults First Class</div>
                                                            <div class="val">
                                                                <span class="btn-minus"
                                                                    data-input="seat_type_fist_class"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-md-remove"></i></span>
                                                                <span class="count-display"><input
                                                                        id="seat_type_fist_class" type="number"
                                                                        name="seat_type[fist_class]" value="0"
                                                                        min="0"></span>
                                                                <span class="btn-add" data-input="seat_type_fist_class"
                                                                    data-input-attr="id"><i
                                                                        class="icon ion-ios-add"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="g-button-submit align-self-lg-end">
                                    <button
                                        class="btn btn-blue-1 width-lg-200 text-white border-radius-2 font-weight-bold btn-md mb-xl-0 mb-lg-1 transition-3d-hover w-100 w-md-auto"
                                        type="submit"><i class="flaticon-magnifying-glass mr-2"></i> Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row  pt-5 pt-xl-8 mb-5 mb-xl-9 pb-xl-1">
                    <div class="col-lg-3 col-md-12">
                        <div class="bravo_filter navbar-expand-lg navbar-expand-lg-collapse-block">
                            <button class="btn d-lg-none mb-5 p-0 collapsed" type="button" data-toggle="collapse"
                                data-target="#sidebar" aria-controls="sidebar" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="fa fa-caret-square-o-down text-primary font-size-20 card-btn-arrow ml-0"></i>
                                <span class="text-primary ml-2">Filter Search</span>
                            </button>
                            <div id="sidebar" class="navbar-expand-lg navbar-expand-lg-collapse-block collapse">

                                <form action="https://mytravel.bookingcore.co/flight" class="bravo_form_filter">

                                    <div class="sidenav border border-color-8 rounded-xs">
                                        <div id="shopRatingAccordion"
                                            class="accordion rounded-0 shadow-none border-bottom d-none">
                                            <div class="border-0">
                                                <div class="card-collapse" id="shopCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-block card-btn py-2  text-lh-3 collapsed"
                                                            data-toggle="collapse" data-target="#shopRatingOne"
                                                            aria-expanded="false" aria-controls="shopRatingOne">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span
                                                                        class="d-block font-size-lg-15 font-size-17 font-weight-bold text-dark text-lh-1dot4">Star
                                                                        Ratings</span>
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
                                                <div id="shopRatingOne" class="collapse show"
                                                    aria-labelledby="shopCategoryHeadingOne"
                                                    data-parent="#shopRatingAccordion">
                                                    <div class="card-body pt-0 mt-1 ">
                                                        <div
                                                            class="form-group font-size-14 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" id="review_score_5"
                                                                    name="review_score[]" type="checkbox" value="5">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="review_score_5">
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
                                                                <input class="custom-control-input" id="review_score_4"
                                                                    name="review_score[]" type="checkbox" value="4">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="review_score_4">
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
                                                                <input class="custom-control-input" id="review_score_3"
                                                                    name="review_score[]" type="checkbox" value="3">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="review_score_3">
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
                                                                <input class="custom-control-input" id="review_score_2"
                                                                    name="review_score[]" type="checkbox" value="2">
                                                                <label
                                                                    class="custom-control-label text-lh-inherit text-color-1"
                                                                    for="review_score_2">
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
                                        <div id="bravo-filter-price"
                                            class="accordion rounded shadow-none bravo-filter-price">
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
                                                            data-hide-from-to="true" data-min="14" data-max="99"
                                                            data-from="14" data-to="99" data-prefix="$"
                                                            data-result-min="#rangeSliderMinResult"
                                                            data-result-max="#rangeSliderMaxResult">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="attr_12" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="cityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-block card-btn py-2 text-lh-3 collapsed"
                                                            data-toggle="collapse" data-target="#attr_more_12"
                                                            aria-expanded="false" aria-controls="attr_more_12">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span
                                                                        class="font-weight-bold font-size-17 text-dark mb-3">Flight
                                                                        Type</span>
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
                                                <div id="attr_more_12" class="collapse show"
                                                    aria-labelledby="cityCategoryHeadingOne" data-parent="#attr_12">
                                                    <div class="card-body pt-0 mt-1  pb-4">
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_83" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="83">
                                                                <label class="custom-control-label"
                                                                    for="term_83">Business</label>
                                                            </div>
                                                            <span>17</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_84" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="84">
                                                                <label class="custom-control-label" for="term_84">First
                                                                    Class</label>
                                                            </div>
                                                            <span>18</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_85" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="85">
                                                                <label class="custom-control-label"
                                                                    for="term_85">Economy</label>
                                                            </div>
                                                            <span>21</span>
                                                        </div>
                                                        <div class="collapse" id="more_term_86">
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_86" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="86">
                                                                    <label class="custom-control-label"
                                                                        for="term_86">Premium Economy</label>
                                                                </div>
                                                                <span>15</span>
                                                            </div>
                                                        </div>
                                                        <a class="link link-collapse small font-size-1 mt-2"
                                                            data-toggle="collapse" href="#more_term_86" role="button"
                                                            aria-expanded="false" aria-controls="more_term_86">
                                                            <span class="link-collapse__default font-size-14">Show
                                                                all</span>
                                                            <span class="link-collapse__active font-size-14">Show
                                                                less</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="attr_13" class="accordion rounded-0 shadow-none border-top">
                                            <div class="border-0">
                                                <div class="card-collapse" id="cityCategoryHeadingOne">
                                                    <h3 class="mb-0">
                                                        <button type="button"
                                                            class="btn btn-link btn-block card-btn py-2 text-lh-3 collapsed"
                                                            data-toggle="collapse" data-target="#attr_more_13"
                                                            aria-expanded="false" aria-controls="attr_more_13">
                                                            <span class="row align-items-center">
                                                                <span class="col-9">
                                                                    <span
                                                                        class="font-weight-bold font-size-17 text-dark mb-3">Inflight
                                                                        Experience</span>
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
                                                <div id="attr_more_13" class="collapse show"
                                                    aria-labelledby="cityCategoryHeadingOne" data-parent="#attr_13">
                                                    <div class="card-body pt-0 mt-1  pb-4">
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_87" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="87">
                                                                <label class="custom-control-label"
                                                                    for="term_87">Inflight Dining</label>
                                                            </div>
                                                            <span>16</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_88" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="88">
                                                                <label class="custom-control-label"
                                                                    for="term_88">Music</label>
                                                            </div>
                                                            <span>15</span>
                                                        </div>
                                                        <div
                                                            class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input id="term_89" class="custom-control-input"
                                                                    type="checkbox" name="terms[]" value="89">
                                                                <label class="custom-control-label" for="term_89">Sky
                                                                    Shopping</label>
                                                            </div>
                                                            <span>18</span>
                                                        </div>
                                                        <div class="collapse" id="more_term_90">
                                                            <div
                                                                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input id="term_90" class="custom-control-input"
                                                                        type="checkbox" name="terms[]" value="90">
                                                                    <label class="custom-control-label"
                                                                        for="term_90">Seats & Cabin</label>
                                                                </div>
                                                                <span>17</span>
                                                            </div>
                                                        </div>
                                                        <a class="link link-collapse small font-size-1 mt-2"
                                                            data-toggle="collapse" href="#more_term_90" role="button"
                                                            aria-expanded="false" aria-controls="more_term_90">
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
                    <div class="col-lg-9 col-md-12">
                        <div class="bravo-list-item">
                            <div class="d-flex justify-content-between align-items-center mb-4 topbar-search">
                                <h3 class="font-size-21 font-weight-bold mb-0 text-lh-1">
                                    20 flights found
                                </h3>
                                <div class="control">
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
                                                    href="https://mytravel.bookingcore.co/flight?orderby=">Recommended</a>
                                                <a class="dropdown-item"
                                                    href="https://mytravel.bookingcore.co/flight?orderby=price_low_high">Price
                                                    (Low to high)</a>
                                                <a class="dropdown-item"
                                                    href="https://mytravel.bookingcore.co/flight?orderby=price_high_low">Price
                                                    (High to low)</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item" id="flightFormBook">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card w-100 shadow-hover-3 mb-5">
                                            <a href="#" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">

                                                <img class="card-img-top"
                                                    src="https://mytravel.bookingcore.co/uploads/demo/flight/airline/img1.jpg"
                                                    alt="East Rosiefurt">
                                            </a>
                                            <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="#"
                                                            class="card-title text-dark font-size-17 font-weight-bold"
                                                            tabindex="0">South Wainoville</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="text-right">
                                                            <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">
                                                                $55</h6>
                                                            <span
                                                                class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span class="font-weight-normal text-gray-5">Take
                                                                    off</span>
                                                                <span class="font-size-14 text-gray-1">Thu Jun 29 07:43
                                                                    AM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span
                                                                    class="font-weight-normal text-gray-5">Landing</span>
                                                                <span class="font-size-14 text-gray-1">Thu Jun 29 14:43
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center font-size-14 text-primary mb-3">
                                                    <!-- On Target Modal -->
                                                    <a class="font-size-14 text-gray-1 d-none" href="#ontargetModal20"
                                                        data-modal-target="#ontargetModal20" data-modal-type="ontarget"
                                                        data-modal-effect="fadein" data-speed="500">Flight Details</a>

                                                    <!-- End On Target Modal -->
                                                </div>
                                                <div class="d-flex justify-content-center pl-3 pr-3">
                                                    <a @click="openModalBook('20')" href=""
                                                        onclick="event.preventDefault()"
                                                        class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card w-100 shadow-hover-3 mb-5">
                                            <a href="#" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">

                                                <img class="card-img-top"
                                                    src="https://mytravel.bookingcore.co/uploads/demo/flight/airline/img1.jpg"
                                                    alt="Alyssonside">
                                            </a>
                                            <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="#"
                                                            class="card-title text-dark font-size-17 font-weight-bold"
                                                            tabindex="0">Savanahberg</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="text-right">
                                                            <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">
                                                                $15</h6>
                                                            <span
                                                                class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span class="font-weight-normal text-gray-5">Take
                                                                    off</span>
                                                                <span class="font-size-14 text-gray-1">Fri Jun 30 14:20
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span
                                                                    class="font-weight-normal text-gray-5">Landing</span>
                                                                <span class="font-size-14 text-gray-1">Fri Jun 30 23:20
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center font-size-14 text-primary mb-3">
                                                    <!-- On Target Modal -->
                                                    <a class="font-size-14 text-gray-1 d-none" href="#ontargetModal19"
                                                        data-modal-target="#ontargetModal19" data-modal-type="ontarget"
                                                        data-modal-effect="fadein" data-speed="500">Flight Details</a>

                                                    <!-- End On Target Modal -->
                                                </div>
                                                <div class="d-flex justify-content-center pl-3 pr-3">
                                                    <a @click="openModalBook('19')" href=""
                                                        onclick="event.preventDefault()"
                                                        class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card w-100 shadow-hover-3 mb-5">
                                            <a href="#" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">

                                                <img class="card-img-top"
                                                    src="https://mytravel.bookingcore.co/uploads/demo/flight/airline/img3.jpg"
                                                    alt="Aufderharview">
                                            </a>
                                            <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="#"
                                                            class="card-title text-dark font-size-17 font-weight-bold"
                                                            tabindex="0">South Norwoodfurt</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="text-right">
                                                            <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">
                                                                $21</h6>
                                                            <span
                                                                class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span class="font-weight-normal text-gray-5">Take
                                                                    off</span>
                                                                <span class="font-size-14 text-gray-1">Sat Jul 01 16:54
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span
                                                                    class="font-weight-normal text-gray-5">Landing</span>
                                                                <span class="font-size-14 text-gray-1">Sat Jul 01 21:54
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center font-size-14 text-primary mb-3">
                                                    <!-- On Target Modal -->
                                                    <a class="font-size-14 text-gray-1 d-none" href="#ontargetModal18"
                                                        data-modal-target="#ontargetModal18" data-modal-type="ontarget"
                                                        data-modal-effect="fadein" data-speed="500">Flight Details</a>

                                                    <!-- End On Target Modal -->
                                                </div>
                                                <div class="d-flex justify-content-center pl-3 pr-3">
                                                    <a @click="openModalBook('18')" href=""
                                                        onclick="event.preventDefault()"
                                                        class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card w-100 shadow-hover-3 mb-5">
                                            <a href="#" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">

                                                <img class="card-img-top"
                                                    src="https://mytravel.bookingcore.co/uploads/demo/flight/airline/img3.jpg"
                                                    alt="South Alan">
                                            </a>
                                            <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="#"
                                                            class="card-title text-dark font-size-17 font-weight-bold"
                                                            tabindex="0">North Arianna</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="text-right">
                                                            <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">
                                                                $18</h6>
                                                            <span
                                                                class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span class="font-weight-normal text-gray-5">Take
                                                                    off</span>
                                                                <span class="font-size-14 text-gray-1">Wed Jun 28 20:15
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span
                                                                    class="font-weight-normal text-gray-5">Landing</span>
                                                                <span class="font-size-14 text-gray-1">Wed Jun 28 23:15
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center font-size-14 text-primary mb-3">
                                                    <!-- On Target Modal -->
                                                    <a class="font-size-14 text-gray-1 d-none" href="#ontargetModal17"
                                                        data-modal-target="#ontargetModal17" data-modal-type="ontarget"
                                                        data-modal-effect="fadein" data-speed="500">Flight Details</a>

                                                    <!-- End On Target Modal -->
                                                </div>
                                                <div class="d-flex justify-content-center pl-3 pr-3">
                                                    <a @click="openModalBook('17')" href=""
                                                        onclick="event.preventDefault()"
                                                        class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card w-100 shadow-hover-3 mb-5">
                                            <a href="#" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">

                                                <img class="card-img-top"
                                                    src="https://mytravel.bookingcore.co/uploads/demo/flight/airline/img2.jpg"
                                                    alt="New Greenshire">
                                            </a>
                                            <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="#"
                                                            class="card-title text-dark font-size-17 font-weight-bold"
                                                            tabindex="0">West Emmettstad</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="text-right">
                                                            <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">
                                                                $46</h6>
                                                            <span
                                                                class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span class="font-weight-normal text-gray-5">Take
                                                                    off</span>
                                                                <span class="font-size-14 text-gray-1">Wed Jun 28 18:13
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span
                                                                    class="font-weight-normal text-gray-5">Landing</span>
                                                                <span class="font-size-14 text-gray-1">Thu Jun 29 00:13
                                                                    AM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center font-size-14 text-primary mb-3">
                                                    <!-- On Target Modal -->
                                                    <a class="font-size-14 text-gray-1 d-none" href="#ontargetModal16"
                                                        data-modal-target="#ontargetModal16" data-modal-type="ontarget"
                                                        data-modal-effect="fadein" data-speed="500">Flight Details</a>

                                                    <!-- End On Target Modal -->
                                                </div>
                                                <div class="d-flex justify-content-center pl-3 pr-3">
                                                    <a @click="openModalBook('16')" href=""
                                                        onclick="event.preventDefault()"
                                                        class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card w-100 shadow-hover-3 mb-5">
                                            <a href="#" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">

                                                <img class="card-img-top"
                                                    src="https://mytravel.bookingcore.co/uploads/demo/flight/airline/img2.jpg"
                                                    alt="New Christianatown">
                                            </a>
                                            <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="#"
                                                            class="card-title text-dark font-size-17 font-weight-bold"
                                                            tabindex="0">Hansenhaven</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="text-right">
                                                            <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">
                                                                $34</h6>
                                                            <span
                                                                class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span class="font-weight-normal text-gray-5">Take
                                                                    off</span>
                                                                <span class="font-size-14 text-gray-1">Wed Jun 28 18:48
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span
                                                                    class="font-weight-normal text-gray-5">Landing</span>
                                                                <span class="font-size-14 text-gray-1">Thu Jun 29 01:48
                                                                    AM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center font-size-14 text-primary mb-3">
                                                    <!-- On Target Modal -->
                                                    <a class="font-size-14 text-gray-1 d-none" href="#ontargetModal15"
                                                        data-modal-target="#ontargetModal15" data-modal-type="ontarget"
                                                        data-modal-effect="fadein" data-speed="500">Flight Details</a>

                                                    <!-- End On Target Modal -->
                                                </div>
                                                <div class="d-flex justify-content-center pl-3 pr-3">
                                                    <a @click="openModalBook('15')" href=""
                                                        onclick="event.preventDefault()"
                                                        class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card w-100 shadow-hover-3 mb-5">
                                            <a href="#" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">

                                                <img class="card-img-top"
                                                    src="https://mytravel.bookingcore.co/uploads/demo/flight/airline/img2.jpg"
                                                    alt="Tremblayside">
                                            </a>
                                            <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="#"
                                                            class="card-title text-dark font-size-17 font-weight-bold"
                                                            tabindex="0">South Norwoodfurt</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="text-right">
                                                            <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">
                                                                $20</h6>
                                                            <span
                                                                class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span class="font-weight-normal text-gray-5">Take
                                                                    off</span>
                                                                <span class="font-size-14 text-gray-1">Fri Jun 30 13:15
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span
                                                                    class="font-weight-normal text-gray-5">Landing</span>
                                                                <span class="font-size-14 text-gray-1">Fri Jun 30 17:15
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center font-size-14 text-primary mb-3">
                                                    <!-- On Target Modal -->
                                                    <a class="font-size-14 text-gray-1 d-none" href="#ontargetModal14"
                                                        data-modal-target="#ontargetModal14" data-modal-type="ontarget"
                                                        data-modal-effect="fadein" data-speed="500">Flight Details</a>

                                                    <!-- End On Target Modal -->
                                                </div>
                                                <div class="d-flex justify-content-center pl-3 pr-3">
                                                    <a @click="openModalBook('14')" href=""
                                                        onclick="event.preventDefault()"
                                                        class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card w-100 shadow-hover-3 mb-5">
                                            <a href="#" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">

                                                <img class="card-img-top"
                                                    src="https://mytravel.bookingcore.co/uploads/demo/flight/airline/img1.jpg"
                                                    alt="East Beverly">
                                            </a>
                                            <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="#"
                                                            class="card-title text-dark font-size-17 font-weight-bold"
                                                            tabindex="0">Jaydonland</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="text-right">
                                                            <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">
                                                                $53</h6>
                                                            <span
                                                                class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span class="font-weight-normal text-gray-5">Take
                                                                    off</span>
                                                                <span class="font-size-14 text-gray-1">Wed Jun 28 03:38
                                                                    AM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span
                                                                    class="font-weight-normal text-gray-5">Landing</span>
                                                                <span class="font-size-14 text-gray-1">Wed Jun 28 05:38
                                                                    AM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center font-size-14 text-primary mb-3">
                                                    <!-- On Target Modal -->
                                                    <a class="font-size-14 text-gray-1 d-none" href="#ontargetModal13"
                                                        data-modal-target="#ontargetModal13" data-modal-type="ontarget"
                                                        data-modal-effect="fadein" data-speed="500">Flight Details</a>

                                                    <!-- End On Target Modal -->
                                                </div>
                                                <div class="d-flex justify-content-center pl-3 pr-3">
                                                    <a @click="openModalBook('13')" href=""
                                                        onclick="event.preventDefault()"
                                                        class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card w-100 shadow-hover-3 mb-5">
                                            <a href="#" class="d-block mb-0 mx-1 mt-1 p-3" tabindex="0">

                                                <img class="card-img-top"
                                                    src="https://mytravel.bookingcore.co/uploads/demo/flight/airline/img3.jpg"
                                                    alt="Lemuelfurt">
                                            </a>
                                            <div class="card-body px-3 pt-0 pb-3 my-0 mx-1">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <a href="#"
                                                            class="card-title text-dark font-size-17 font-weight-bold"
                                                            tabindex="0">Raymundobury</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <div class="text-right">
                                                            <h6 class="font-weight-bold font-size-17 text-gray-3 mb-0">
                                                                $42</h6>
                                                            <span
                                                                class="font-weight-normal font-size-14 d-block text-color-1">avg/person</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span class="font-weight-normal text-gray-5">Take
                                                                    off</span>
                                                                <span class="font-size-14 text-gray-1">Sun Jul 02 08:27
                                                                    AM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="border-bottom pb-3 mb-3">
                                                    <div class="px-3">
                                                        <div class="d-flex mx-1">
                                                            <i
                                                                class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary mr-3"></i>
                                                            <div class="d-flex flex-column">
                                                                <span
                                                                    class="font-weight-normal text-gray-5">Landing</span>
                                                                <span class="font-size-14 text-gray-1">Sun Jul 02 14:27
                                                                    PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center font-size-14 text-primary mb-3">
                                                    <!-- On Target Modal -->
                                                    <a class="font-size-14 text-gray-1 d-none" href="#ontargetModal12"
                                                        data-modal-target="#ontargetModal12" data-modal-type="ontarget"
                                                        data-modal-effect="fadein" data-speed="500">Flight Details</a>

                                                    <!-- End On Target Modal -->
                                                </div>
                                                <div class="d-flex justify-content-center pl-3 pr-3">
                                                    <a @click="openModalBook('12')" href=""
                                                        onclick="event.preventDefault()"
                                                        class="btn btn-blue-1 font-size-14 width-260 text-lh-lg transition-3d-hover py-1">Choose</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="flightFormBookModal" class="js-modal-window u-modal-window max-width-960"
                                data-modal-type="ontarget" data-open-effect="fadeIn" data-close-effect="fadeOut"
                                data-speed="500">
                                <div class="card mx-4 mx-xl-0 mb-4 mb-md-0" v-show="!onLoading">
                                    <button type="button"
                                        class="border-0 width-50 height-50 bg-primary flex-content-center position-absolute rounded-circle mt-n4 mr-n4 top-0 right-0"
                                        aria-label="Close" onclick="Custombox.modal.close();">
                                        <i aria-hidden="true" class="flaticon-close text-white font-size-14"></i>
                                    </button>
                                    <!-- Header -->
                                    <header class="card-header bg-light py-4 px-4">
                                        <div class="row align-items-center text-center">
                                            <div class="col-md-auto mb-4 mb-md-0">
                                                <div class="d-block d-lg-flex flex-horizontal-center">
                                                    <img class="img-fluid mr-3 mb-3 mb-lg-0 max-width-10"
                                                        :src="flight.airline.image_url??''" alt="Image-Description">
                                                    <div class="font-size-14">{{flight.title}} | {{flight.code}}</div>
                                                </div>
                                            </div>
                                            <div class="col-md-auto mb-4 mb-md-0">
                                                <div
                                                    class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i class="flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0"
                                                            v-html="flight.departure_time_html"></h6>
                                                        <div class="font-size-14 text-gray-5"
                                                            v-html="flight.departure_date_html"></div>
                                                        <span class="font-size-14 text-gray-1"
                                                            v-html="flight.airport_from.name"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-auto mb-4 mb-md-0">
                                                <div class="mx-2 mx-xl-3 flex-content-center flex-column">
                                                    <h6 class="font-size-14 font-weight-bold text-gray-5 mb-0"
                                                        v-html="flight.duration +' hrs'"></h6>
                                                    <div class="width-60 border-top border-primary border-width-2 my-1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-auto mb-4 mb-md-0">
                                                <div
                                                    class="mx-2 mx-xl-3 flex-content-center align-items-start d-block d-lg-flex">
                                                    <div class="mr-lg-3 mb-1 mb-lg-0">
                                                        <i
                                                            class="d-block rotate-90 flaticon-aeroplane font-size-30 text-primary"></i>
                                                    </div>
                                                    <div class="text-lg-left">
                                                        <h6 class="font-weight-bold font-size-21 text-gray-5 mb-0"
                                                            v-html="flight.arrival_time_html"></h6>
                                                        <div class="font-size-14 text-gray-5"
                                                            v-html="flight.arrival_date_html"></div>
                                                        <span class="font-size-14 text-gray-1"
                                                            v-html="flight.airport_to.name"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body py-4 p-md-5">
                                        <div class="row">
                                            <div class="col-12 border-bottom mb-3">
                                                <ul class="d-block d-md-flex justify-content-between list-group list-group-borderless list-group-horizontal list-group-flush no-gutters border-bottom "
                                                    v-for="(flight_seat,key) in flight.flight_seat" :key="key"
                                                    v-if="flight_seat.max_passengers >0">
                                                    <li
                                                        class="mr-md-8 mr-lg-8 mb-3 d-flex d-md-block justify-content-between list-group-item py-0">
                                                        <div class="font-weight-bold text-dark">Seat type</div>
                                                        <span class="text-gray-1 text-capitalize"
                                                            v-html="flight_seat.seat_type.name"></span>
                                                    </li>
                                                    <li
                                                        class="mr-md-8 mr-lg-8 mb-3 d-flex d-md-block justify-content-between list-group-item py-0">
                                                        <div class="font-weight-bold text-dark">Baggage</div>
                                                        <span class="text-gray-1 text-capitalize"
                                                            v-html="flight_seat.person"></span>
                                                    </li>
                                                    <li
                                                        class="mr-md-8 mr-lg-8 mb-3 d-flex d-md-block justify-content-between list-group-item py-0">
                                                        <div class="font-weight-bold text-dark">Check-in</div>
                                                        <span class="text-gray-1"
                                                            v-html="flight_seat.baggage_check_in+' Kgs'"></span>
                                                    </li>
                                                    <li
                                                        class="mr-md-8 mr-lg-8 mb-3 d-flex d-md-block justify-content-between list-group-item py-0">
                                                        <div class="font-weight-bold text-dark">Cabin</div>
                                                        <span class="text-gray-1"
                                                            v-html="flight_seat.baggage_cabin+' Kgs'"></span>
                                                    </li>
                                                    <li
                                                        class="mr-md-8 mr-lg-8 mb-3 d-flex d-md-block justify-content-between list-group-item py-0">
                                                        <div class="font-weight-bold text-dark">Price</div>
                                                        <span class="text-gray-1"
                                                            v-html="flight_seat.price_html"></span>
                                                    </li>
                                                    <li
                                                        class="mr-md-8 mr-lg-8 mb-3 d-flex d-md-block justify-content-between list-group-item py-0">
                                                        <div class="font-weight-bold text-dark">Number</div>
                                                        <div class="flex-horizontal-center">
                                                            <a class="font-size-10 text-dark" href="javascript:;"
                                                                @click="minusNumberFlightSeat(flight_seat)">
                                                                <i class="fa fa-chevron-down"></i>
                                                            </a>
                                                            <input
                                                                class="form-control h-auto width-30 font-weight-bold font-size-16 shadow-none bg-tranparent border-0 rounded p-0 mx-1 text-center"
                                                                type="text"
                                                                @change="updateNumberFlightSeat(flight_seat)"
                                                                v-model="flight_seat.number" min="1">
                                                            <a class="font-size-10 text-dark" href="javascript:;"
                                                                @click="addNumberFlightSeat(flight_seat)">
                                                                <i class="fa fa-chevron-up"></i>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12  col-lg-6 offset-lg-3">
                                                <div class="alert-text mt-3 text-left" v-show="message.content"
                                                    v-html="message.content"
                                                    :class="{'danger':!message.type,'success':message.type}"></div>
                                                <div class="min-width-250" v-show="total_price">
                                                    <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                                        <li class="d-flex justify-content-between py-2">
                                                            <span class="font-weight-medium">Pay Amount</span>
                                                            <span class="font-weight-medium"
                                                                v-html="total_price_html"></span>
                                                        </li>
                                                        <li
                                                            class="d-flex justify-content-center py-2 font-size-17 font-weight-bold">
                                                            <a @click="flightCheckOut()"
                                                                class="btn btn-blue-1 font-size-14 width-135 text-lh-lg transition-3d-hover py-1 text-white">Book
                                                                Now</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Body -->
                                </div>
                            </div>
                            <div class="text-center text-md-left font-size-14 mb-3 text-lh-1">Showing 1 - 9 of 20
                                Flights</div>
                            <nav class="mt-2">
                                <ul class="pagination">

                                    <li class="disabled page-item" aria-disabled="true" aria-label="&laquo; Previous">
                                        <span aria-hidden="true" class="page-link">&lsaquo;</span>
                                    </li>





                                    <li class="active page-item " aria-current="page"><span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://mytravel.bookingcore.co/flight?page=2">2</a></li>
                                    <li class="page-item"><a class="page-link"
                                            href="https://mytravel.bookingcore.co/flight?page=3">3</a></li>


                                    <li class="page-item">
                                        <a class="page-link" href="https://mytravel.bookingcore.co/flight?page=2"
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