$('.change').on('click', function (e) {

        var rate = fx(1).from("GBP").to("USD")
        alert("£1 = $" + rate.toFixed(4))

});