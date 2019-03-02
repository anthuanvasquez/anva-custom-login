# Anva Custom Login

Add custom login styles to WordPress site.

### Change Author Name

YOu can change the author name and url on login page.

```
function theme_author( $output ) {
    
    $url = 'https://your-author-page.com';
    
    $author = 'Your Name';
    
    $output = sprintf( 
        '<a class="login-footer__link" href="%1$s">%2$s</a>', 
        esc_url( $url ),
        esc_html( $author )
    );

    return $output;
}
add_filter( 'anva_custom_login_author', 'theme_author', 10 );
```
