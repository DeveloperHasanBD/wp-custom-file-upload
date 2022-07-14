$("#upload_adimg").on("click", function () {
            var ad_image = wp.media({
                title: "Upload Ad",
                multiple: false,
            }).open().on("select", function () {
                var uploaded_image = ad_image.state().get("selection").first();
                var get_image_url = uploaded_image.toJSON().url;
                $("#show_ad_image").html("<img src='" + get_image_url + "' style='height: 130px; width: 150px; border-radius: 10px;'>");
                $("#ad_one").val(get_image_url);
            });
        });
