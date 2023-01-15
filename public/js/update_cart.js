function updateCart(e) {
    e.preventDefault();
    // alert("cartUpdate");

    let urlUpdateCart = $(".update-cart-url").data("url");

    //get id of product
    let id = $(this).data("id");
    // alert(id);

    //get quantity of product
    let quantity = $(this).parents("tr").find("input").val();
    // alert(quantity);

    $.ajax({
        type: "GET",
        url: urlUpdateCart,
        data: { id: id, quantity: quantity },

        success: function (data) {
            if (data.code === 200) {
                $(".cart_wrapper").html(data.cart_component);

                alert("Update cart successfully");
            }
        },
        error: function (error) {},
    });
}

$(function () {
    $(document).on("click", ".update-cart", updateCart);
});
