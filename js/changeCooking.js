// $(function() {
    $('#btn_next').click(function() {
        if (x) {
            i = $("#totalPage").text();
            totalPage = i;
            x = false;
        }
        if (i == 0) {
            alert("最末頁");
        }
        else {
            // alert(i);
            $('article').eq(i).addClass('btn_next');
            i--;
        }

    });

    $('#btn_order').click(function() {
        if (x) {
            i = $("#totalPage").text();
            totalPage = i;
            x = false;
        }

        if (totalPage == i) {
            alert("第一頁");
        }
        else {
            // alert(i);
            $('article').eq(i + 1).removeClass('btn_next');
            i++;
        }
    });
// });