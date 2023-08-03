<a class="travel-go-to u-go-to-modern" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed"
    data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
    <span class="flaticon-arrow u-go-to-modern__inner"></span>
</a>
<div class="modal fade login" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content relative">
            <div class="modal-header">
                <h4 class="modal-title">Log In</h4>
                <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                    <i class="input-icon field-icon fa">
                        <img src="https://mytravel.bookingcore.co/images/ico_close.svg" alt="close">
                    </i>
                </span>
            </div>
            <div class="modal-body relative">
                <form class="bravo-form-login" method="POST" action="https://mytravel.bookingcore.co/login">
                    <input type="hidden" name="redirect" value="">
                    <input type="hidden" name="_token" value="p36G1xEn0kWhIEv8ZVs2svtzVENdPWyXCensO8jn">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" autocomplete="off"
                            placeholder="Email address">
                        <i class="input-icon icofont-mail"></i>
                        <span class="invalid-feedback error error-email"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" autocomplete="off"
                            placeholder="Password">
                        <i class="input-icon icofont-ui-password"></i>
                        <span class="invalid-feedback error error-password"></span>
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <label for="remember-me" class="mb0">
                                <input type="checkbox" name="remember" id="remember-me" value="1"> Remember me
                                <span class="checkmark fcheckbox"></span>
                            </label>
                            <a href="https://mytravel.bookingcore.co/forgot-password">Forgot Password?</a>
                        </div>
                    </div>
                    <div class="error message-error invalid-feedback"></div>
                    <div class="form-group">
                        <button class="btn btn-primary form-submit" type="submit">
                            Login
                            <span class="spinner-grow spinner-grow-sm icon-loading" role="status"
                                aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="c-grey font-medium f14 text-center"> Do not have an account? <a href=""
                            data-target="#register" data-toggle="modal">Sign Up</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade login" id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content relative">
            <div class="modal-header">
                <h4 class="modal-title">Sign Up</h4>
                <span class="c-pointer" data-dismiss="modal" aria-label="Close">
                    <i class="input-icon field-icon fa">
                        <img src="https://mytravel.bookingcore.co/images/ico_close.svg" alt="close">
                    </i>
                </span>
            </div>
            <div class="modal-body">
                <form class="form bravo-form-register" method="post" action="https://mytravel.bookingcore.co/register">
                    <input type="hidden" name="_token" value="p36G1xEn0kWhIEv8ZVs2svtzVENdPWyXCensO8jn">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" autocomplete="off"
                                    placeholder="First Name">
                                <i class="input-icon field-icon icofont-waiter-alt"></i>
                                <span class="invalid-feedback error error-first_name"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" autocomplete="off"
                                    placeholder="Last Name">
                                <i class="input-icon field-icon icofont-waiter-alt"></i>
                                <span class="invalid-feedback error error-last_name"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" autocomplete="off" placeholder="Phone">
                        <i class="input-icon field-icon icofont-ui-touch-phone"></i>
                        <span class="invalid-feedback error error-phone"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" autocomplete="off"
                            placeholder="Email address">
                        <i class="input-icon field-icon icofont-mail"></i>
                        <span class="invalid-feedback error error-email"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" autocomplete="off"
                            placeholder="Password">
                        <i class="input-icon field-icon icofont-ui-password"></i>
                        <span class="invalid-feedback error error-password"></span>
                    </div>
                    <div class="form-group">
                        <label for="term">
                            <input id="term" type="checkbox" name="term" class="mr5">
                            I have read and accept the <a href='' target='_blank'>Terms and Privacy Policy</a>
                            <span class="checkmark fcheckbox"></span>
                        </label>
                        <div><span class="invalid-feedback error error-term"></span></div>
                    </div>
                    <div class="error message-error invalid-feedback"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary form-submit">
                            Sign Up
                            <span class="spinner-grow spinner-grow-sm icon-loading" role="status"
                                aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="c-grey f14 text-center">
                        Already have an account?
                        <a href="#" data-target="#login" data-toggle="modal">Log In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="cdn-browser-modal" class="modal fade">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div id="cdn-browser" class="cdn-browser d-flex flex-column" v-cloak :class="{is_loading:isLoading}">
                <div class="files-nav flex-shrink-0">
                    <div class="d-flex justify-content-between">
                        <div class="col-left d-flex align-items-center">
                            <div class="filter-item">
                                <input type="text" placeholder="Search file name...." class="form-control"
                                    v-model="filter.s" @keyup.enter="filter.page = 1;reloadLists()">
                            </div>
                            <div class="filter-item">
                                <button class="btn btn-default" @click="reloadAll()">
                                    <i class="fa fa-search"></i> Search</button>
                            </div>
                            <div class="filter-item">
                                <small><i>Total: {{total}} files</i></small>
                            </div>
                        </div>
                        <div class="div">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" @click="setViewType('grid')" class="btn"
                                    :class="viewType == 'grid' ? 'btn-secondary' : 'btn-outline-secondary'"><i
                                        class="fa fa-th"></i></button>
                                <button type="button" @click="setViewType('list')" class="btn"
                                    :class="viewType != 'grid' ? 'btn-secondary' : 'btn-outline-secondary'"><i
                                        class="fa fa-bars"></i></button>
                            </div>
                        </div>
                        <div class="col-right">
                            <i class="fa-spin fa fa-spinner icon-loading active" v-show="isLoading"></i>
                            <button class="btn btn-primary mr-2" @click="addFolder">
                                <span><i class="fa fa-folder"></i> Add Folder</span>
                            </button>
                            <button class="btn btn-success btn-pick-files">
                                <span><i class="fa fa-upload"></i> Upload</span>
                                <input multiple :accept="accept_type" type="file" name="files[]" ref="files">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="upload-new" v-show="showUploader" display="none">
                    <input type="file" name="filepond[]" class="my-pond">
                </div>
                <div class="files-list">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a @click="toFolderRoot" href="#">Home</a></li>
                            <li v-for="(item,index) in breadcrumbs" class="breadcrumb-item active" aria-current="page">
                                <a @click.prevent="showFolder(item,index)" href="#">{{
                                    item.name }}</a></li>
                        </ol>
                    </nav>
                    <div class="border-top border-left mb-3 px-3" v-if="viewType == 'list'">
                        <div class="row font-weight-bold " style="font-size: 16px">
                            <div class="col-sm-6 py-2 border-bottom border-right">Name</div>
                            <div class="col-sm-2 py-2 border-bottom border-right">Type</div>
                            <div class="col-sm-2 py-2 border-bottom border-right">Created At</div>
                            <div class="col-sm-2 py-2 border-bottom border-right">Size</div>
                        </div>
                        <folder-item @deleted="deletedFolder" @toggle-edit="toggleEditFolder"
                            @dblclick="showFolder(folder)" @update="updateFolder" :view-type="viewType"
                            v-for="(folder,index) in folders" :index="index" :key="'folder-'+index" :folder="folder">
                        </folder-item>
                        <file-item v-for="(file,index) in files" :key="index" :view-type="viewType" :selected="selected"
                            :file="file" v-on:select-file="selectFile"></file-item>
                    </div>
                    <div class="files-wraps " v-if="viewType == 'grid'" :class="'view-'+viewType">
                        <folder-item @deleted="deletedFolder" @toggle-edit="toggleEditFolder"
                            @dblclick="showFolder(folder)" @update="updateFolder" v-for="(folder,index) in folders"
                            :index="index" :key="'folder-'+index" :folder="folder"></folder-item>
                        <file-item v-for="(file,index) in files" :key="index" :view-type="viewType" :selected="selected"
                            :file="file" v-on:select-file="selectFile"></file-item>
                    </div>
                    <p class="no-files-text text-center" v-show="!total && apiFinished" style="display: none">No
                        file found</p>
                    <div class="text-center" v-if="totalPage > 1">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item" :class="{disabled:filter.page <= 1}">
                                    <a class="page-link" v-if="filter.page <=1">Previous</a>
                                    <a class="page-link" href="#" v-if="filter.page > 1"
                                        v-on:click="changePage(filter.page-1,$event)">Previous</a>
                                </li>
                                <li class="page-item" v-if="p >= (filter.page-3) && p <= (filter.page+3)"
                                    :class="{active: p == filter.page}" v-for="p in totalPage"
                                    @click="changePage(p,$event)">
                                    <a class="page-link" href="#">{{p}}</a>
                                </li>
                                <li class="page-item" :class="{disabled:filter.page >= totalPage}">
                                    <a v-if="filter.page >= totalPage" class="page-link">Next</a>
                                    <a href="#" class="page-link" v-if="filter.page < totalPage"
                                        v-on:click="changePage(filter.page+1,$event)">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="browser-actions d-flex justify-content-between flex-shrink-0" v-if="selected.length">
                    <div class="col-left" v-show="selected.length">
                        <div class="control-remove" v-if="selected && selected.length">
                            <button class="btn btn-danger" @click="removeFiles">Delete file</button>
                        </div>
                        <div class="control-info" v-if="selected && selected.length">
                            <div class="count-selected">{{selected.length}} file selected</div>
                            <div class="clear-selected" @click="selected=[]"><i>unselect</i></div>
                        </div>
                    </div>
                    <div class="col-right" v-show="selected.length">
                        <button class="btn btn-primary" :class="{disabled:!selected.length}" @click="sendFiles">Use
                            file</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/x-template" id="file-item-template">
    <div :class="viewType == 'grid'  ? 'file-item' : 'file-list-item'" >
        <div class="row hover:bg-f5f5f5 cursor-pointer" v-if="viewType == 'list'" @click="selectFile(file)" :class="{'active':selected.indexOf(file.id) !== -1}">
            <div class="col-sm-6 py-1 border-right border-bottom">
                <span v-html="getFileThumb(file)" class="mr-2 item-preview"></span> {{ file.file_name }}</div>
            <div class="col-sm-2 py-1  border-right border-bottom">{{file.file_extension}}</div>
            <div class="col-sm-2 py-1  border-right border-bottom">{{file.created_at}}</div>
            <div class="col-sm-1 py-1 border-bottom">{{humanFileSize(file.file_size)}}</div>
            <div class="col-sm-1 py-1  border-right border-bottom d-flex justify-content-end">
                <a :href="file.full_size" target="_blank" title="View file"><i class=" fa fa-eye"></i></a>
            </div>
        </div>
        <div v-if="viewType == 'grid'" class="inner" :class="{active:selected.indexOf(file.id) !== -1 }" @click="selectFile(file)" :title="file.file_name">
            <div class="file-thumb" v-if="viewType=='grid'" v-html="getFileThumb(file)">
                </div>
                <div class="file-name">{{file.file_name}}</div>
                <span class="file-checked-status" v-show="selected.indexOf(file.id) !== -1">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M186.301 339.893L96 249.461l-32 30.507L186.301 402 448 140.506 416 110z"/></svg>
            </span>
        </div>
    </div>
</script>
<script type="text/x-template" id="folder-item-template">
    <div :class="viewType == 'grid'  ? 'file-item folder-item' : 'folder-item'" @dblclick="$emit('dblclick',folder,index)">
        <div class="row hover:bg-f5f5f5 cursor-pointer" v-if="viewType == 'list'">
            <div class="col-sm-6 py-1 border-right border-bottom">
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-grow-1 align-items-center">
                        <div>
                            <img src="/icon/folder.png" width="20px" height="auto" class="mr-2 flex-shrink-0" alt="">
                        </div>
                        <div class="text-center font-weight-medium" v-if="!folder.onEdit">{{folder.name}}</div>
                        <div class="" v-if="folder.onEdit">
                            <input ref="input" type="text" @blur="saveName" class="form-control" v-model="folder_name" >
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn-edit btn-sm position-absolute" @click.prevent="openEdit"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 py-1 border-right border-bottom">Folder</div>
            <div class="col-sm-2 py-1 border-right border-bottom">{{ folder.created_at }}</div>
            <div class="col-sm-2 py-1 border-right border-bottom d-flex justify-content-end">
                <a href="#" class="btn-sm text-danger" title="Delete this folder" @click.prevent="deleteFolder"><i class="fa fa-trash"></i></a>
            </div>
        </div>
        <div v-if="viewType == 'grid'" class="inner d-flex flex-column  position-relative">
            <div class="file-thumb flex-grow-1 d-flex align-items-center justify-content-center" style="background: #7b7d7e">
                <i class="fa fa-folder-o" style="font-size: 90px;color:white"></i>
            </div>
            <div class="text-center font-weight-medium p-2" v-if="!folder.onEdit">{{folder.name}}</div>
            <div class="" v-if="folder.onEdit">
                <input ref="input" type="text" @blur="saveName" class="form-control" v-model="folder_name" >
            </div>
            <a href="#" class="btn-edit btn btn-sm btn-warning position-absolute top-0 right-0 m-2" @click.prevent="openEdit"><i class="fa fa-edit"></i></a>
        </div>
    </div>
</script>
<link rel="stylesheet" href="https://mytravel.bookingcore.co/libs/flags/css/flag-icon.min.css">




<script src="https://mytravel.bookingcore.co/libs/lazy-load/intersection-observer.js"></script>
<script async src="https://mytravel.bookingcore.co/libs/lazy-load/lazyload.min.js"></script>
<script>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };

    // Listen to the initialization event and get the instance of LazyLoad
    window.addEventListener('LazyLoad::Initialized', function (event) {
        window.lazyLoadInstance = event.detail.instance;
    }, false);
</script>
<script src="https://mytravel.bookingcore.co/libs/jquery-3.6.3.min.js"></script>
<script src="https://mytravel.bookingcore.co/themes/mytravel/libs/jquery-migrate/jquery-migrate.min.js"></script>
<script src="https://mytravel.bookingcore.co/themes/mytravel/libs/header.js"></script>
<script>
    $(document).on('ready', function () {
        $.MyTravelHeader.init($('#header'));
    });
</script>
<script src="https://mytravel.bookingcore.co/libs/lodash.min.js"></script>
<script src="https://mytravel.bookingcore.co/libs/vue/vue.min.js"></script>
<script src="https://mytravel.bookingcore.co/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://mytravel.bookingcore.co/libs/bootbox/bootbox.min.js"></script>

<script src="https://mytravel.bookingcore.co/themes/mytravel/libs/fancybox/jquery.fancybox.min.js"></script>
<script src="https://mytravel.bookingcore.co/themes/mytravel/libs/slick/slick.js"></script>


<script src="https://mytravel.bookingcore.co/module/media/js/browser.js?_ver=2.2.0"></script>
<script src="https://mytravel.bookingcore.co/libs/carousel-2/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://mytravel.bookingcore.co/libs/daterange/moment.min.js"></script>
<script type="text/javascript" src="https://mytravel.bookingcore.co/libs/daterange/daterangepicker.min.js"></script>
<script src="https://mytravel.bookingcore.co/libs/select2/js/select2.min.js"></script>
<script src="https://mytravel.bookingcore.co/themes/mytravel/js/functions.js?_ver=2.2.0"></script>
<script src="https://mytravel.bookingcore.co/themes/mytravel/libs/custombox/custombox.min.js"></script>
<script src="https://mytravel.bookingcore.co/themes/mytravel/libs/custombox/custombox.legacy.min.js"></script>
<script src="https://mytravel.bookingcore.co/themes/mytravel/libs/custombox/window.modal.js"></script>

<script src="https://mytravel.bookingcore.co/libs/pusher.min.js"></script>
<script src="https://mytravel.bookingcore.co/themes/mytravel/js/home.js?_ver=2.2.0"></script>

<div class="booking_cookie_agreement p-3 fixed-bottom">
    <div class="container d-flex ">
        <div class="content-cookie">
            <p>This website requires cookies to provide all of its features. By using our website, you agree to
                our use of cookies. <a href='#'>More info</a></p>
        </div>
        <button class="btn save-cookie">Got it</button>
    </div>
</div>
<script>
    var save_cookie_url = 'https://mytravel.bookingcore.co/check-cookie';
</script>
<script src="https://mytravel.bookingcore.co/js/cookie.js?_ver=2.2.0"></script>



</div>


<!-- Google Tag Manager -->
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-W7B5HJJ');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7B5HJJ" height="0" width="0"
        style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v3.3'
        });
    };
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- Load Facebook SDK for JavaScript -->

<!-- Your customer chat code -->
<div class="fb-customerchat" attribution=setup_tool page_id="2280007165584589">
</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115740936-4"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-115740936-4');
</script>
<style>
    .bravo-buy-button {
        text-align: center;
        position: fixed;
        bottom: 20px;
        left: 20px;
        background-color: #0072bc;
        color: #fff;
        text-transform: uppercase;
        font-size: 12px;
        padding: 10px 20px 8px;
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        font-weight: 600;
        z-index: 99;
    }

    .bravo-buy-button:hover {
        text-decoration: none;
        color: #fff;
    }

    .bravo-buy-button .tf-text {
        background-image: url('https://mytravel.bookingcore.co/landing/img/logoen.png');
        width: 66px;
        height: 12px;
        display: inline-block;
        background-repeat: no-repeat;

    }
</style>
<a class="sticky-button bravo-buy-button" target="_blank"
    href="https://codecanyon.net/item/mytravel-ultimate-laravel-booking-system/32680572">
    <span>Buy on <span class="tf-text"></span> for $59</span>
</a>
</body>

</html>