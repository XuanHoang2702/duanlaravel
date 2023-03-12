<div class="search col-lg-4 col-sm-5">
    <form action="{{ route('product.search') }}" method="POST" class="d-flex pt-5">
        @csrf
        <input type="text" class="form-control me-2 w-75" name="product_search" placeholder="Tìm kiếm sản phẩm"
            aria-label="Search">
        <button type="submit" class="btn btn-outline-black bg-warning border-success">Search</button>
    </form>
</div>
