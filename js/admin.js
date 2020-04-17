jQuery(function ($) {
  /*
   * Select/Upload image(s) event
   */
  $("body").on("click", ".js_custom_upload_media", function (e) {
    e.preventDefault();

    var button = $(this),
      custom_uploader = wp
        .media({
          title: "Insert image",
          library: {
            // uncomment the next line if you want to attach image to the current post
            // uploadedTo : wp.media.view.settings.post.id,
            type: "image",
          },
          button: {
            text: "Use this image", // button label text
          },
          multiple: false, // for multiple image selection set to true
        })
        .on("select", function () {
          // it also has "open" and "close" events
          var attachment = custom_uploader
            .state()
            .get("selection")
            .first()
            .toJSON();

          // $(button)
          //   .removeClass("button")
          //   .html(
          //     '<img class="js_custom_upload_media" src="' +
          //       attachment.url +
          //       '" style="max-width:95%;display:block;" />'
          //   )
          //   .next()
          //   .val(attachment.id)
          //   .next()
          //   .show();

          $(".js_custom_upload_media-img").attr("src", attachment.url);
          $(".js_custom_upload_media_input").val(attachment.url);
          /* if you sen multiple to true, here is some code for getting the image IDs
			var attachments = frame.state().get('selection'),
			    attachment_ids = new Array(),
			    i = 0;
			attachments.each(function(attachment) {
 				attachment_ids[i] = attachment['id'];
				console.log( attachment );
				i++;
			});
			*/
        })
        .open();
  });

  /*
   * Remove image event
   */
  // $("body").on("click", ".arcade_remove_image_button", function () {
  //   $(this)
  //     .hide()
  //     .prev()
  //     .val("")
  //     .prev()
  //     .addClass("button")
  //     .html("Upload image");
  //   return false;
  // });
});
