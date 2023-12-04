<section class="link-tabs">
  <div class="d-md-flex justify-content-center align-items-center gap-4 link-container">
    <a class="<?php if ($page == 'regional-partner') {
                echo 'active';
              } ?>" target="_blank" href="<?php customUrl("regional-partner"); ?>">Regional Partner</a>
    <a class="<?php if ($page == 'ib-partner') {
                echo 'active';
              } ?>" target="_blank" href="<?php customUrl("ib-partner"); ?>">IB Partner</a>
    <a class="<?php if ($page == 'copy-trading') {
                echo 'active';
              } ?>" target="_blank" href="<?php customUrl("copy-trading"); ?>">Copy Trading</a>
    <a class="<?php if ($page == 'service-provider') {
                echo 'active';
              } ?>" target="_blank" href="<?php customUrl("service-provider"); ?>">Service Provider</a>
  </div>
</section>