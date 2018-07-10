<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $(".one-open .toggle").on("click", function() {
    $(".one-open .toggle").removeClass("active");
    $(this).closest(".toggle").addClass("active");
  });
  $(".multiple-open .toggle").on("click", function() {
    $(this).closest(".multiple-open .toggle").toggleClass("active");
  });
});
</script>


