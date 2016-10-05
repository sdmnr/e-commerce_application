<label><b>Date:From-To:</b></label><br><input type="text" name="daterange" value="01/01/2015 - 01/31/2015" />

<script type="text/javascript">
$(function() {
    $('input[name="daterange"]').daterangepicker();
});
</script>

<script>$('input[name="daterange"]').daterangepicker(
{
    locale: {
      format: 'YYYY-MM-DD'
    },
    startDate: '2013-01-01',
    endDate: '2013-12-31'
}, 
function(start, end, label) {
    alert("A new date range was chosen: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
});</script>
