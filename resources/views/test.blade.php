@extends('layouts.main_layout')

@section('content')
    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="price-all">
                            <label class="custom-control-label" for="price-all">All Price</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-1">
                            <label class="custom-control-label" for="price-1">$0 - $100</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-2">
                            <label class="custom-control-label" for="price-2">$100 - $200</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-3">
                            <label class="custom-control-label" for="price-3">$200 - $300</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="price-4">
                            <label class="custom-control-label" for="price-4">$300 - $400</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="price-5">
                            <label class="custom-control-label" for="price-5">$400 - $500</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Price End -->

                <!-- Color Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="color-all">
                            <label class="custom-control-label" for="price-all">All Color</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-1">
                            <label class="custom-control-label" for="color-1">Black</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-2">
                            <label class="custom-control-label" for="color-2">White</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-3">
                            <label class="custom-control-label" for="color-3">Red</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="color-4">
                            <label class="custom-control-label" for="color-4">Blue</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="color-5">
                            <label class="custom-control-label" for="color-5">Green</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                <div class="mb-5">
                    <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" checked id="size-all">
                            <label class="custom-control-label" for="size-all">All Size</label>
                            <span class="badge border font-weight-normal">1000</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-1">
                            <label class="custom-control-label" for="size-1">XS</label>
                            <span class="badge border font-weight-normal">150</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-2">
                            <label class="custom-control-label" for="size-2">S</label>
                            <span class="badge border font-weight-normal">295</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-3">
                            <label class="custom-control-label" for="size-3">M</label>
                            <span class="badge border font-weight-normal">246</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input" id="size-4">
                            <label class="custom-control-label" for="size-4">L</label>
                            <span class="badge border font-weight-normal">145</span>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input" id="size-5">
                            <label class="custom-control-label" for="size-5">XL</label>
                            <span class="badge border font-weight-normal">168</span>
                        </div>
                    </form>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12 ">

                <div class="row pb-3 shop">

                    {{-- ALL DATA WILL BE HERE --}}


                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
@endsection


@section('scripts')
    <script>
        var page = 1;
        var last_page = 0;
        $(document).ready(function() {
            $('.shop').append(
                '<div class="d-flex justify-content-center"><div class="spinner-border text-primary" style="width: 18rem; height: 18rem;" role="status"><span class="sr-only">Loading...</span></div></div>'
                );
            getBooksData();
            console.log('first', page);
            $("#previousItem").addClass("disabled");
        });

        function nextPage() {
            if (page < last_page) {
                page += 1;
                getBooksData();
            }

        }

        function previousPage() {
            if (page > 1) {
                page -= 1;
                getBooksData();
            }

        }

        function getBooksData() {
            $(".shop-item").empty();
            $.ajax({
                type: 'GET',
                url: '/books?page=' + page,
                data: {
                    quantity: 1,
                    book_id: 2,
                    user_id: 1
                },
                success: function(data) {


                    var links = '';
                    var current_page_number = '<li class="page-item active"><a class="page-link" href="#">' +
                        data.request.current_page + '</a></li>'
                    var current_page_number_minus =
                        '<li class="page-item active"><a class="page-link" href="#">' + data.request
                        .current_page - 1 + '</a></li>' +
                        '<li class="page-item active"><a class="page-link" href="#">' + parseInt(data.request
                            .current_page) - 2 + '</a></li>'
                    var current_page_number_plus =
                        '<li class="page-item active"><a class="page-link" href="#">' + parseInt(data.request
                            .current_page) + 2 + '</a></li>' +
                        '<li class="page-item active"><a class="page-link" href="#">' + parseInt(data.request
                            .current_page) + 2 + '</a></li>'
                    links = current_page_number_minus + current_page_number + current_page_number_plus
                    $(".shop").empty();
                    $(data.request.data).each(function(index) {
                        $(".shop").append(
                            '<div class="col-lg-4 col-md-6 col-sm-12 pb-1 shop-item"><div class="card product-item border-0 mb-4"><div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0"><img class="img-fluid w-100" src="{{ asset('front_end/img/book_covers/default.jpg') }}" alt=""></div><div class="card-body border-left border-right text-center p-0 pt-4 pb-3"><h6 class="text-truncate mb-3">' +
                            $(this).attr('id') +
                            '</h6><div class="d-flex justify-content-center"><h6>$' + $(this).attr(
                                'price') +
                            '</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6></div> </div><div class="card-footer d-flex justify-content-between bg-light border"><a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a><a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a></div></div></div>'
                        );

                    });
                    $(".shop").append(
                        '<div class="col-12 pb-1"><nav aria-label="Page navigation"><ul class="pagination justify-content-center mb-3"><li class="page-item" id="previousItem"><a class="page-link previous" href="#" onClick="previousPage()" tabindex="-1">Previous</a></li>'  + pageGenerator(data.request.current_page, data.request.last_page) +  '</a></li><li class="page-item" id="nextItem"><a class="page-link next" onClick="nextPage()" href="#">Next</a></li></ul></nav></div>'
                    );

                    last_page = data.request.last_page;

                    if (page <= 1) {
                        $("#previousItem").addClass("disabled");
                    }
                    if (page == last_page) {
                        $("#nextItem").addClass("disabled");
                    }
                    console.log('Current page', page);

                },
                error: function(error) {
                    $(".shop").empty();
                    $(".shop").append(
                        '<div class="alert alert-warning alert-dismissible fade show justify-content-center" role="alert"><strong>Holy guacamole!</strong>' + error['statusText'] + ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }

            });
        }

        function pageGenerator(current, last) {
            var prev_links = '';
            var next_links = '';
            var current_link = '';
            for (let i = 1; i < current; i++) {
                if (i >= (current - 2)){
                    prev_links += '<li class="page-item"><a class="page-link" onClick="pageNumberJumper('+i+')" href="#">'+i+'</a></li>';
                }
            }
            current_link ='<li class="page-item active"><a class="page-link"  href="#">'+current+'</a></li>';
            for (let k = current+1; k < last+1; k++) {
                if (k <= (current + 2)){
                    next_links+='<li class="page-item"><a class="page-link" onClick="pageNumberJumper('+k+')" href="#">'+k+'</a></li>';
                }

            }
            return prev_links + current_link + next_links;
        }


        function pageNumberJumper(pageNumber){
            page = pageNumber;
            getBooksData();
        }
    </script>
@endsection
