function addQty(id) {
    var qtyValue = document.getElementById(id);
    if (qtyValue.value != 0) {
        qtyValue.value = parseInt(qtyValue.value) + 1;
        var getId = "price" + id;
        var price = document.getElementById(getId).value;
        computeTotalPrice(parseFloat(price));
    } else {
        alert("Something went wrong");
    }
}

function minusQty(id) {
    var qtyValue = document.getElementById(id);
    if (qtyValue.value != 1) {
        qtyValue.value = parseInt(qtyValue.value) - 1;
        var getId = "price" + id;
        var price = document.getElementById(getId).value;
        computeTotalPrice(-parseFloat(price));
    } else {
        alert("Only 1 product");
    }
}

function computeTotalPrice(price) {
    var total = 0;
    var totalPrice = document.getElementById('totalPrice');
    total = parseFloat(totalPrice.value) + price;
    totalPrice.value = total;
    console.log(new Intl.NumberFormat('en-US', { style: 'decimal' }).format(total));
    document.getElementById('displayTotalPrice').innerText = new Intl.NumberFormat('en-US', { style: 'decimal' }).format(total);
}

function showCheckout() {
    document.getElementById("checkout-btn").style.display = "none";
    document.getElementById("checkout-form").style.display = "block";
}

function saveRemind() {
    alert("After change, please click save button beside.");
}

function cartEmpty() {
    alert("Cart is empty.");
}

function haveNotLogin() {
    alert("Please login to rent product");
}