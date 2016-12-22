<div class="wrap kaira-upgrade-page-wrap">
    <?php
    $kaira_link = 'http://www.kairaweb.com';
    $premium_link = 'http://sllwi.re/p/Fs'; ?>
    
    <h2 id="theme-settings-title">
        <a href="<?php echo $kaira_link; ?>" target="_blank"></a>
    </h2>
    
    <div class="kaira-page-description">
        <?php _e( '<a href="http://www.kairaweb.com/" target="_blank">Visit our website</a> to view our other Themes and Plugins', 'electa' ); ?>
    </div>
    
    <table class="form-table">
        <tr>
            <th scope="row">
                <?php _e( 'Sticky Header', 'electa' ); ?>
            </th>
            <td>
                <a href="<?php echo $premium_link; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/upgrade/images/sticky_header.jpg'; ?>" alt="" class="kaira-page-img" />
                </a>
                <p class="description"><?php _e( '<a href="http://sllwi.re/p/Fs" target="_blank">Upgrade to premium</a> enable the option to have a sticky header which will sit fixed to the side while users scroll down.', 'electa' ); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <?php _e( 'Home Blocks Layout', 'electa' ); ?>
            </th>
            <td>
                <a href="<?php echo $premium_link; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/upgrade/images/home-blocks-layout.jpg'; ?>" alt="" class="kaira-page-img" />
                </a>
                <p class="description"><?php _e( 'Enable the option to select the grid layout for the home blocks layout.', 'electa' ); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <?php _e( 'Blog Blocks Layout', 'electa' ); ?>
            </th>
            <td>
                <a href="<?php echo $premium_link; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/upgrade/images/blog-blocks-layout.jpg'; ?>" alt="" class="kaira-page-img" />
                </a>
                <p class="description"><?php _e( 'Enable the option to select the grid layout for the blog blocks layout, and for the categories and archives pages.', 'electa' ); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <?php _e( 'Social Links', 'electa' ); ?>
            </th>
            <td>
                <a href="<?php echo $premium_link; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/upgrade/images/social-links.jpg'; ?>" alt="" class="kaira-page-img" />
                </a>
                <p class="description"><?php _e( 'Enable social links on the theme to link to all your social profiles.', 'electa' ); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <?php _e( 'Website copy text', 'electa' ); ?>
            </th>
            <td>
                <a href="<?php echo $premium_link; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/upgrade/images/site-copy-text.jpg'; ?>" alt="" class="kaira-page-img" />
                </a>
                <p class="description"><?php _e( 'Change the website copy to link out to your own website.', 'electa' ); ?></p>
            </td>
        </tr>
    </table>
    
</div>