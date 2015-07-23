<?php 
/**
 * Add button to the post editing screen
 */
add_action( 'media_buttons', 'rescue_shortcodes_media_button', 1000 );
function rescue_shortcodes_media_button( ) {
    
    $title = __( 'Shortcodes', 'rescue-shortcodes' );  ?>

    <a id="thickbox_shortcode_button" class="button thickbox" title="<?php echo esc_attr( $title ); ?>" href="#TB_inline?width=600&height=700&inlineId=thickbox_shortcode_window">
        <span class="rescue-shortcodes-icon"></span> <?php echo esc_html( $title ); ?>
    </a>

    <style>
        .rescue-shortcodes-icon::before {
            -moz-osx-font-smoothing: grayscale;
            color: #888;
            content: "\f334";
            font: 400 18px/1 dashicons;
            vertical-align: text-bottom;
        }
    </style>

<?php }

/**
 * Content displayed in the modal box
 */
add_action('admin_footer', 'rescue_shortcodes_thickbox_content');
function rescue_shortcodes_thickbox_content(){ ?>

    <div id="thickbox_shortcode_window" style="display: none;">

    <p>See examples on the <a target="_blank" href="https://rescuethemes.com/rescue-shortcodes-plugin/">Rescue Themes</a> site.</p>

    <table cellspacing="0" cellpadding="5" width="100%">

        <style>
           .wp-core-ui .button.insert_shortcode {
                margin-bottom: 0.75em;
                margin-right: 0.75em;
            }
            #TB_ajaxContent {
                width: 90%!important;
            }
            #TB_ajaxContent h3 {
                margin: 0;
            }
        </style>

        <tbody>
            <tr><th><h3>Columns</h3></th></tr>
            <tr>
                <!-- Columns -->
                <td>
                <a id="rescue_half" class="insert_shortcode button" href="javascript:void(0);">One Half</a>
                <a id="rescue_third" class="insert_shortcode button" href="javascript:void(0);">One Third</a>
                <a id="rescue_fourth" class="insert_shortcode button" href="javascript:void(0);">One Fourth</a>
                <a id="rescue_fifth" class="insert_shortcode button" href="javascript:void(0);">One Fifth</a>
                <a id="rescue_sixth" class="insert_shortcode button" href="javascript:void(0);">One Sixth</a>
                <a id="rescue_twothird" class="insert_shortcode button" href="javascript:void(0);">Two Third</a>
                <a id="rescue_threefourth" class="insert_shortcode button" href="javascript:void(0);">Three Fourth</a>
                <a id="rescue_twofifth" class="insert_shortcode button" href="javascript:void(0);">Two Fifth</a>
                <a id="rescue_threefifth" class="insert_shortcode button" href="javascript:void(0);">Three Fifth</a>
                </td>
            </tr>

            <tr><td><hr></td></tr>

            <tr><th><h3>Elements</h3></th></tr>
            <tr>
                <td>
                <a id="rescue_button" class="insert_shortcode button" href="javascript:void(0);">Button</a>
                <a id="rescue_icon" class="insert_shortcode button" href="javascript:void(0);">Icon</a>
                <a id="rescue_map" class="insert_shortcode button" href="javascript:void(0);">Google Map</a>
                <a id="rescue_tabbed" class="insert_shortcode button" href="javascript:void(0);">Tabbed Content</a>
                <a id="rescue_toggle" class="insert_shortcode button" href="javascript:void(0);">Toggle</a>
                <a id="rescue_progress" class="insert_shortcode button" href="javascript:void(0);">Progress Bar</a>
                <a id="rescue_spacing" class="insert_shortcode button" href="javascript:void(0);">Spacing</a>
                <a id="rescue_clear" class="insert_shortcode button" href="javascript:void(0);">Clear Floats</a>
                <p>Complete list of icon names are available on the <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Font Awesome</a> site.</p>
                </td>
            </tr>

            <tr><td><hr></td></tr>

            <tr><th><h3>Boxes</h3></th></tr>
            <tr>
                <!-- Content Boxes -->
                <td>
                <a id="rescue_box_blue" class="insert_shortcode button" href="javascript:void(0);">Blue Box</a>
                <a id="rescue_box_gray" class="insert_shortcode button" href="javascript:void(0);">Gray Box</a>
                <a id="rescue_box_green" class="insert_shortcode button" href="javascript:void(0);">Green Box</a>
                <a id="rescue_box_red" class="insert_shortcode button" href="javascript:void(0);">Red Box</a>
                <a id="rescue_box_yellow" class="insert_shortcode button" href="javascript:void(0);">Yellow Box</a>
                </td>
            </tr>

            <tr><td><hr></td></tr>

            <tr><th><h3>Highlights</h3></th></tr>
            <tr>
                <!-- Highlight Text -->
                <td>
                <a id="rescue_highlight_blue" class="insert_shortcode button" href="javascript:void(0);">Blue Highlight</a>
                <a id="rescue_highlight_gray" class="insert_shortcode button" href="javascript:void(0);">Gray Highlight</a>
                <a id="rescue_highlight_green" class="insert_shortcode button" href="javascript:void(0);">Green Highlight</a>
                <a id="rescue_highlight_red" class="insert_shortcode button" href="javascript:void(0);">Red Highlight</a>
                <a id="rescue_highlight_yellow" class="insert_shortcode button" href="javascript:void(0);">Yellow Highlight</a>
                </td>
            </tr>

            <tr><td><hr></td></tr>

            <tr><th><h3>Animations</h3></th></tr>
            <tr>
                <td>
                <a id="rescue_animate-slideInDown" class="insert_shortcode button" href="javascript:void(0);">SlideInDown</a>
                <a id="rescue_animate-slideInLeft" class="insert_shortcode button" href="javascript:void(0);">slideInLeft</a>
                <a id="rescue_animate-slideInRight" class="insert_shortcode button" href="javascript:void(0);">slideInRight</a>
                <a id="rescue_animate-fadeIn" class="insert_shortcode button" href="javascript:void(0);">fadeIn</a>
                <a id="rescue_animate-fadeInLeft" class="insert_shortcode button" href="javascript:void(0);">fadeInLeft</a>
                <a id="rescue_animate-fadeInRight" class="insert_shortcode button" href="javascript:void(0);">fadeInRight</a>
                <a id="rescue_animate-fadeInUp" class="insert_shortcode button" href="javascript:void(0);">fadeInUp</a>
                <a id="rescue_animate-fadeInDown" class="insert_shortcode button" href="javascript:void(0);">fadeInDown</a>
                <a id="rescue_animate-bounceIn" class="insert_shortcode button" href="javascript:void(0);">bounceIn</a>
                <a id="rescue_animate-bounceInLeft" class="insert_shortcode button" href="javascript:void(0);">bounceInLeft</a>
                <a id="rescue_animate-bounceInRight" class="insert_shortcode button" href="javascript:void(0);">bounceInRight</a>
                <a id="rescue_animate-bounceInUp" class="insert_shortcode button" href="javascript:void(0);">bounceInUp</a>
                <a id="rescue_animate-bounceInDown" class="insert_shortcode button" href="javascript:void(0);">bounceInDown</a>
                </td>
            </tr>

        </tbody>
    </table>

<script type="text/javascript">// <![CDATA[
    jQuery(function($){

        // Use unbind to prevent the click event to fire multiple times
        $('.insert_shortcode').unbind('click').bind("click",function() {

            // Close the modal window when a shortcode is clicked
            self.parent.tb_remove();
            
            // Prepare shortcode variable
            var shortcode = '';
             
            // Get the id of the clicked element and load the correct shortcode
            switch(this.id){

                // Columns
                case 'rescue_half':
                shortcode = '[rescue_column size="one-half" position="first"]Example Text[/rescue_column]';
                break;

                case 'rescue_third':
                shortcode = '[rescue_column size="one-third" position="first"]Example Text[/rescue_column]';
                break;

                case 'rescue_fourth':
                shortcode = '[rescue_column size="one-fourth" position="first"]Example Text[/rescue_column]';
                break;

                case 'rescue_fifth':
                shortcode = '[rescue_column size="one-fifth" position="first"]Example Text[/rescue_column]';
                break;

                case 'rescue_sixth':
                shortcode = '[rescue_column size="one-sixth" position="first"]Example Text[/rescue_column]';
                break;

                case 'rescue_twothird':
                shortcode = '[rescue_column size="two-third" position="first"]Example Text[/rescue_column]';
                break;

                case 'rescue_threefourth':
                shortcode = '[rescue_column size="three-fourth" position="first"]Example Text[/rescue_column]';
                break;

                case 'rescue_twofifth':
                shortcode = '[rescue_column size="two-fifth" position="first"]Example Text[/rescue_column]';
                break;

                case 'rescue_threefifth':
                shortcode = '[rescue_column size="three-fifth" position="first"]Example Text[/rescue_column]';
                break;

                // Elements
                case 'rescue_button':
                shortcode = '[rescue_button colorhex="#2ecc71" url="https://rescuethemes.com" title="Visit Site" target="blank" class="left" border_radius="3px"]Example Text[/rescue_button]';
                break;

                case 'rescue_icon':
                shortcode = '[icon type="cloud" size="3x" pull="left" color="#cccccc"]';
                break;

                case 'rescue_map':
                shortcode = '[rescue_googlemap title="Rescue Themes Offices" location="5046 S Greenwood Ave, Chicago, IL 60615" zoom="14" height=250]';
                break;

                case 'rescue_tabbed':
                shortcode = '[rescue_tabgroup]<br />[rescue_tab title="First Tab"]<br />First tab content<br />[/rescue_tab]<br />[rescue_tab title="Second Tab"]<br />Second Tab Content.<br />[/rescue_tab]<br />[/rescue_tabgroup]';
                break;

                case 'rescue_toggle':
                shortcode = '[rescue_toggle title="This Is Your Toggle Title"]Example Content[/rescue_toggle]';
                break;

                case 'rescue_progress':
                shortcode = '[rescue_progressbar title="Example" percentage="75" color="#f1c40f"]';
                break;

                case 'rescue_spacing':
                shortcode = '[rescue_spacing size="40px"]';
                break;

                case 'rescue_clear':
                shortcode = '[rescue_clear_floats]';
                break;

                // Boxes
                case 'rescue_box_blue':
                shortcode = '[rescue_box color="blue" text_align="left" width="100%" float="none"]Example Text Box[/rescue_box]';
                break;

                case 'rescue_box_gray':
                shortcode = '[rescue_box color="gray" text_align="left" width="100%" float="none"]Example Text Box[/rescue_box]';
                break;

                case 'rescue_box_green':
                shortcode = '[rescue_box color="green" text_align="left" width="100%" float="none"]Example Text Box[/rescue_box]';
                break;

                case 'rescue_box_red':
                shortcode = '[rescue_box color="red" text_align="left" width="100%" float="none"]Example Text Box[/rescue_box]';
                break;

                case 'rescue_box_yellow':
                shortcode = '[rescue_box color="yellow" text_align="left" width="100%" float="none"]Example Text Box[/rescue_box]';
                break;

                // Highlights
                case 'rescue_highlight_blue':
                shortcode = '[rescue_box color="blue" text_align="left" width="100%" float="none"]Example Text Highlight[/rescue_box]';
                break;

                case 'rescue_highlight_gray':
                shortcode = '[rescue_box color="gray" text_align="left" width="100%" float="none"]Example Text Highlight[/rescue_box]';
                break;

                case 'rescue_highlight_green':
                shortcode = '[rescue_box color="green" text_align="left" width="100%" float="none"]Example Text Highlight[/rescue_box]';
                break;

                case 'rescue_highlight_red':
                shortcode = '[rescue_box color="red" text_align="left" width="100%" float="none"]Example Text Highlight[/rescue_box]';
                break;

                case 'rescue_highlight_yellow':
                shortcode = '[rescue_box color="yellow" text_align="left" width="100%" float="none"]Example Text Highlight[/rescue_box]';
                break;

                // Animations
                case 'rescue_animate-slideInDown':
                shortcode = '[rescue_animate type="slideInDown" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-slideInLeft':
                shortcode = '[rescue_animate type="slideInLeft" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-slideInRight':
                shortcode = '[rescue_animate type="slideInRight" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-fadeIn':
                shortcode = '[rescue_animate type="fadeIn" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-fadeInLeft':
                shortcode = '[rescue_animate type="fadeInLeft" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-fadeInRight':
                shortcode = '[rescue_animate type="fadeInRight" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-fadeInUp':
                shortcode = '[rescue_animate type="fadeInUp" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-fadeInDown':
                shortcode = '[rescue_animate type="fadeInDown" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-bounceIn':
                shortcode = '[rescue_animate type="bounceIn" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-bounceInLeft':
                shortcode = '[rescue_animate type="bounceInLeft" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-bounceInRight':
                shortcode = '[rescue_animate type="bounceInRight" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-bounceInUp':
                shortcode = '[rescue_animate type="bounceInUp" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

                case 'rescue_animate-bounceInDown':
                shortcode = '[rescue_animate type="bounceInDown" duration="2s" delay="0s" iteration="1"]Example Content[/rescue_animate]';
                break;

            }
         
            // Check if visual editor is active or not
            is_tinyMCE_active = false;
             if (typeof(tinyMCE) != "undefined") {
                if (tinyMCE.activeEditor != null) {
                    is_tinyMCE_active = true;
                }
            }
         
            // Append shortcode to content for both Visual and Text mode
            if ( is_tinyMCE_active ) {
                tinymce.activeEditor.execCommand('mceInsertContent', false, shortcode);
            } else {
                var wpEditor = $('textarea.wp-editor-area');
                wpEditor.append(shortcode);
            }
            return false;
        });


    });
// ]]></script>

    </div><!-- #thickbox_shortcode_window -->
<?php }
