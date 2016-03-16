/**
 * Created by jiamingdong on 3/15/16.
 */

$(function() {
    var afterResult = false;
    // numbers
    $('.btn-num').click(function(e) {
        var num = $(this).attr("id").charAt(4);

        if (afterResult) {
            display = num;
            afterResult = false;
        } else {
            display += num;
        }

        $('#display-board').text(display);
    });

    // operands
    $('#btn-plus').click(function(e) {
        afterResult = false;
        display += "+";
        $('#display-board').text(display);
    });

    $('#btn-minus').click(function(e) {
        afterResult = false;
        display += "-";
        $('#display-board').text(display);
    });

    $('#btn-multiply').click(function(e) {
        afterResult = false;
        display += "*";
        $('#display-board').text(display);
    });


    $('#btn-divide').click(function(e) {
        afterResult = false;
        display += "/";
        $('#display-board').text(display);
    });

    $('#btn-lparen').click(function(e) {
        afterResult = false;
        display += "(";
        $('#display-board').text(display);
    });

    $('#btn-rparen').click(function(e) {
        afterResult = false;
        display += ")";
        $('#display-board').text(display);
    });


    // controls
    $('#btn-point').click(function (e) {
        afterResult = false;
        display += ".";
        $('#display-board').text(display);
    });

    $('#btn-undo').click(function (e) {
        display = display.substring(0, display.length - 1);
        if (display.length > 0) {
            $('#display-board').text(display);
        } else {
            $('#display-board').text("0");
        }
    });

    $('#btn-clear').click(function(e) {
        afterResult = false;
        display = "";
        $('#display-board').text("0");
    });

    $('#btn-result').click(function(e) {
        var regex = new RegExp("\\+|\\-|\\*|\\/|\\(|\\)|[\\d]+(\\.[\\d]+)?", "g");
        var expression = display.match(regex);
        console.log(expression);
        afterResult = true;

        $.ajax({
            url:'server_side.php',
            type:'post',
            data:{'action':'get_result',
                'expression':JSON.stringify(expression)},
            success:function(result) {
                $("#display-board").text(result);
                display = result;
                expression = [];
                expression.push(result);
            },
            error:function(exception) {
                alert("Calculation failed.");
            }
        });
    });
});
