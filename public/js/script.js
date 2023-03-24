// function deleteItem(productId) {
//     $.ajax({
//         url: "/product/" + productId + "/delete",
//         method: "DELETE",
//         headers: {
//             "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
//         },
//         success: function (response) {
//             console.log("Item deleted!");
//             // Do something else after the item is deleted, e.g. update the UI
//         },
//         error: function (xhr, status, error) {
//             console.log(error);
//         },
//     });
// }
