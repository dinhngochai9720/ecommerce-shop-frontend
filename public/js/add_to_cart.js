function addToCart(e) {
    e.preventDefault();

    //get url of a tag Add to cart
    let urlProduct = $(this).data("url");
    // alert(url);

    $.ajax({
        type: "GET",
        url: urlProduct,
        dataType: "json",
        success: function (data) {
            if (data.code === 200) {
                alert("Thêm sản phẩm vào giỏ hàng thành công");
            }
        },
        error: function (error) {},
    });
}

$(function () {
    $(".add-to-cart").on("click", addToCart);
});
