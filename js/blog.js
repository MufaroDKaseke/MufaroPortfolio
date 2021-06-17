$(document).ready(function(){

  (function($) {
    "use strict";


    const likes = $(".post .post-likes");
    const likeAction = likes.attr("like-action");

    // Post Likes
    likes.on("click" ,function(e){
      e.preventDefault();

      let postId = $("article.post").attr('id');
      let query = {action: `${likeAction}`,post_id: `${postId}` };

      $.ajax({
        url: './includes/like_post.php', // Form action url
        type: "POST", // Form submit method
        dataType: "html", // Request t ype
        data: query,  // Serialize form data
        success: function(data) {
          console.log(data);
          likes.toggleClass("liked");
          likes.children("i").toggleClass("icon-heart-o icon-heart");
          likes.children("i").css("animation" ,"pulse 1s ease");
          if (likeAction == "like") {
            likes.attr("like-action" ,"unlike");
          } else {
            likes.attr("like-action", 'like');
          }
        },
        error: function(e) {
          console.log(e); // Console log
        }, 
        complete: function() {
        }
      });
    });

    const commentModal = $("#commentModal");
    const commentForm = $("#commentForm");

    commentForm.on("submit" , function(e) {
      e.preventDefault();

      let submitBtn = $("#commentForm buttton[type=submit]");
      let resultModal = $("#commentModal");
      let errorMsg = '<div class="text-center"><i class="icon-error_outline text-danger" style="font-size: 3rem;"></i></div><div class="success-msg"><h5 class="text-center my-3">Oops ,an error occured.</h5><div class="col text-center"><button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close"><i class="icon-refresh"></i> Try Again</button></div></div>';



      $.ajax({
        url: './includes/create_comment.php', // Form action url
        type: "POST", // Form submit method
        dataType: "html", // Request t ype
        data: commentForm.serialize(),  // Serialize form data
        beforeSend: function() {
          submitBtn.prop("disabled" , true); // Disable submit button
          submitBtn.html('<span class="icon-refresh text-secondary mx-2" style="animation: rotate 0.5s ease 0s infinite;"></span>Sending...'); // Change submit button to Sending...
        },
        success: function(data) {
          commentForm.trigger('reset'); // Reset form fields
          $('#commentModal .modal-body').html(data); // Insert result from backend
          console.log(data);
          resultModal.modal('show'); // Show Modal
          console.log("Success : Ajax Response Success"); // Console log success message
        },
        error: function(e) {
          console.log(e); // Console log  
          $('#commentModal .modal-body').html(errorMsg);
          resultModal.modal('show');
        }, 
        complete: function() {
          submitBtn.html("Submit Comment"); // Reset submit button
          submitBtn.prop("disabled" , false); // Re-enable submit button
        }
      });

    });
    
  })(jQuery);
});