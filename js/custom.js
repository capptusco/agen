$(function () {
        
        $('#datetimepicker6').datetimepicker();

        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075

        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
        $('#datetimepicker8').datetimepicker();

        $('#datetimepicker3').datetimepicker({
                    format: 'LT'
        });
        $('#datetimepicker9').datetimepicker();
        $('#datetimepicker10').datetimepicker({
            useCurrent: false //Important! See issue #1075

        });
        $("#datetimepicker9").on("dp.change", function (e) {
            $('#datetimepicker10').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker10").on("dp.change", function (e) {
            $('#datetimepicker9').data("DateTimePicker").maxDate(e.date);
        });
        $('#datetimepicker11').datetimepicker();

        
});

    