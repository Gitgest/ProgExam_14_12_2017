var url = "http://localhost/ProgExam_14_12_2017/explore_california_api.php/tours";
$.getJSON(url, function (data) {
    var atour = data[0];
    document.getElementById("tourname").innerHTML=atour.tourName;
    document.getElementById("price").innerHTML=atour.price;
} );