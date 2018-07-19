<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $(".one-open .toggle").on("click", function() {
    var $this = $(this);
    $this.parent().find(".toggle").removeClass("active");
    $this.addClass("active");
       
  });
  $(".multiple-open .toggle").on("click", function() {
    var $this = $(this);
    $this.closest(".multiple-open .toggle").toggleClass("active");
  });
  $(".mobile-toggle").on("click", function(e) {
    if(e && e.preventDefault)  {
    e.preventDefault();
    }
    $(".nav-bar").toggleClass("nav-open")
  });
  $(".has-dropdown").on("click", function() {
    var $this = $(this);
    $this.closest(".has-dropdown").toggleClass("toggle-sub");
  });
  $(".search-widget-handle .search").on("click", function(e) {
    if(e && e.preventDefault)  {
    e.preventDefault();
    }
    $(".search-widget-handle").toggleClass("toggle-widget-handle")
  });
});
</script>


