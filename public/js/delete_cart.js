function deleteCart(e) {
    e.preventDefault();
    // alert("cartUpdate");

    let urlDeleteCart = $(".delete-cart-url").data("url");

    //get id of product
    let id = $(this).data("id");
    // alert(id);

    $.ajax({
        type: "GET",
        url: urlDeleteCart,
        data: { id: id },

        success: function (data) {
            if (data.code === 200) {
                $(".cart_wrapper").html(data.cart_component);

                alert("Delete product successfully");
            }
        },
        error: function (error) {},
    });
}

$(function () {
    $(document).on("click", ".delete-cart", deleteCart);
});
