wp_enqueue_media();

<div class="form-group">
    <label for="ad_one" class="control-label">Ad One</label>
    <p class="text-center">
        <span id="show_ad_image"></span>
    </p>
    <input type="button" id="upload_adimg" value="Upload Ad" class="form-control">
    <input name="ad_one" id="ad_one" class="ad_one_visibility" type="hidden">
    <img style="display: block; margin: 15px auto;height: 120px; width: 120px; border-radius: 10px;" src="" alt="">
    <p>
        <label for="ad_checking_tk_one">Ad TK one</label>
        <input id="ad_checking_tk_one" value="" name="ad_checking_tk_one" type="text" class="form-control">
    </p>
</div>
