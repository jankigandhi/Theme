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

  $(".basic-modal-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".basic-modal").addClass("show open");
    });
    $(".close-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".basic-modal").removeClass("show open");
  });

  $(".scroll-modal-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".scroll-modal").addClass("show open");
    });
    $(".close-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".scroll-modal").removeClass("show open");
  });

  $(".signup-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".signup-modal").addClass("show open");
    });
    $(".close-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".signup-modal").removeClass("show open");
  });

  $(".iframe-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".iframe-modal").addClass("show open");
    });
    $(".close-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".iframe-modal").removeClass("show open");
  });
  $(".basic-modal-btn,.signup-btn,.scroll-modal-btn,.iframe-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".modal-backdrop").addClass("show");
    });
    $(".close-btn").on("click", function(e) {
    if(e && e.preventDefault) {
    e.preventDefault();
    }
    $(".modal-backdrop").removeClass("show");
  });
  $(".modal-backdrop").on("click", function() {
    $(".modal-backdrop,.basic-modal,.scroll-modal,.signup-modal,.iframe-modal").removeClass("show open");
  });
});
</script>


