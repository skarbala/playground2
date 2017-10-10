var detail = $('div.detail article');


$("li.sin").click(function (event) {
    event.preventDefault();
    var key = $(this).find('a').attr("data");

    setTimeout(function () {
        loadDetail(key);
    }, 500);

});

function loadDetail(key) {
    $.ajax({
        url: baseURL + 'get-detail.php',
        data: {key: key},
        dataType: "json"
    })
        .done(function (data) {
            detail.fadeIn(300);
            detail.find('h4').text(data.author + " : " + data.title);
            detail.find('p').text(data.message);
            detail.find('h4').append("<span>" + data.creation_date + "</span>");
            var tags = detail.find('ul').html('');
            data.tags.forEach(function (element) {
                tags.append('<li>' + element + '</li>');
            });

        })
        .fail(function (msg) {
        })
        .always(function () {
        });
}