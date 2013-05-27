<ul class="nav nav-pills">
        <li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/content/file_manager') ?>" id="list"><?php echo lang('file_manager_list'); ?></a>
	</li>

        <?php if ($this->auth->has_permission('File_manager.Content.Upload')) : ?>
                <li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
                        <a href="<?php echo site_url(SITE_AREA .'/content/file_manager/create') ?>" id="create_new"><?php echo lang('file_manager_upload_file'); ?></a>
                </li>
	<?php endif; ?>
</ul>